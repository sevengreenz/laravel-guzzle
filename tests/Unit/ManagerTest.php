<?php

namespace SevenGreenz\LaravelGuzzle\Tests;

use GuzzleHttp\ClientInterface;
use SevenGreenz\LaravelGuzzle\Factory;
use SevenGreenz\LaravelGuzzle\Manager;

class ManagerTest extends TestCase
{
    public function testConnection()
    {
        $factoryMock = $this->createMock(Factory::class);
        $factoryMock->method('make')
            ->willReturn($this->createMock(ClientInterface::class));

        $manager = new Manager(app(), $factoryMock);

        $actual = $manager->connection();

        $this->assertInstanceOf(ClientInterface::class, $actual);
    }
}
