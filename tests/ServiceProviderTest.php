<?php

namespace SevenGreenz\LaravelGuzzle\Tests;

use SevenGreenz\LaravelGuzzle\ServciceProvider;
use SevenGreenz\LaravelGuzzle\Factory;

class ServiceProviderTest extends TestCase
{
    public function testRegister()
    {
        $factory = app('guzzle.factory');
        $this->assertInstanceOf(Factory::class, $factory);
    }
}
