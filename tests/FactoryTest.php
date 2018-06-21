<?php

namespace SevenGreenz\LaravelGuzzle\Tests;

use SevenGreenz\LaravelGuzzle\Factory;
use GuzzleHttp\ClientInterface;

class FactoryTest extends TestCase
{
    public function testRegister()
    {
        $factory = new Factory();

        $actual = $factory->make([
            'base_url' => 'localhost'
        ]);

        $this->assertInstanceOf(ClientInterface::class, $actual);
    }
}
