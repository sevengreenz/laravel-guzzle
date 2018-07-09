<?php

namespace SevenGreenz\LaravelGuzzle\Tests;

use SevenGreenz\LaravelGuzzle\Facade;

class FacadeTest extends TestCase
{
    public function testGetFacadeAccessor()
    {
        $facade            = new \ReflectionClass(new Facade());
        $getFacadeAccessor = $facade->getMethod('getFacadeAccessor');
        $getFacadeAccessor->setAccessible(true);
        $actual = $getFacadeAccessor->invokeArgs(null, []);

        $this->assertEquals('guzzle', $actual);
    }
}
