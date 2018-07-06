<?php

namespace SevenGreenz\LaravelGuzzle\Tests;

use GuzzleHttp\ClientInterface;
use SevenGreenz\LaravelGuzzle\Factory;

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
