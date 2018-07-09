<?php

namespace SevenGreenz\LaravelGuzzle\Tests;

use SevenGreenz\LaravelGuzzle\Factory;
use SevenGreenz\LaravelGuzzle\Manager;

class ServiceProviderTest extends TestCase
{
    public function testRegister()
    {
        $factory = app('guzzle.factory');
        $this->assertInstanceOf(Factory::class, $factory);

        $factory = app('guzzle');
        $this->assertInstanceOf(Manager::class, $factory);
    }
}
