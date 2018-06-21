<?php

namespace SevenGreenz\LaravelGuzzle;

use GuzzleHttp\Client;
use Illuminate\Contracts\Foundation\Application;

class Manager
{

    /**
     * application instance
     *
     * @var Illuminate\Contracts\Foundation\Application
     */
    protected $app;

    /**
     * GuzzleHttp connention factory instance
     *
     * @var SevenGreenz\LaravelGuzzle\Factory
     */
    protected $factory;

    /**
     * GuzzleHttp connection instance
     *
     *  @var array
     */
    protected $connection = [];

    /**
     * @param Illuminate\Contracts\Foundation\Application $app
     * @param SevenGreenz\LaravelGuzzle\Factory $factory
     */
    public function __construct(Application $app, Factory $factory)
    {
        $this->app     = $app;
        $this->factory = $factory;
    }

    /**
     * get connection
     *
     * @param string $name
     */
    public function connection(string $name = ''): Client
    {
        if (empty($name)) {
            $name = $this->app['config']['http']['default_connetion'];
        }

        if (!isset($this->connection[$name])) {
            $this->connection[$name] = $this->makeConnection($name);
        }

        return $this->connection[$name];
    }

    /**
     * make connection
     *
     * @param string $name
     */
    protected function makeConnection(string $name): Client
    {
        $config = array_get($this->app['config']['http']['connections'], $name);

        return $this->factory->make($config);
    }
}
