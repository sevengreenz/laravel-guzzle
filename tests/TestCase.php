<?php

namespace SevenGreenz\LaravelGuzzle\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use SevenGreenz\LaravelGuzzle\ServiceProvider;
use SevenGreenz\LaravelGuzzle\Facade;

abstract class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Guzzle' => Facade::class,
        ];
    }
}
