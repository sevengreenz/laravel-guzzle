<?php

namespace SevenGreenz\LaravelGuzzle\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use SevenGreenz\LaravelGuzzle\Facade;
use SevenGreenz\LaravelGuzzle\ServiceProvider;

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

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('guzzle.default_connection', 'default');
        $app['config']->set('guzzle.connections.default', [
            'base_uri'   => 'localhost',
        ]);
    }
}
