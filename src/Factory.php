<?php

namespace SevenGreenz\LaravelGuzzle;

use GuzzleHttp\Client;

class Factory
{
    /**
     * make GuzzleHttp client
     *
     * @param array $config
     * @return GuzzleHttp\Client
     */
    public function make(array $config)
    {
        return new Client($config);
    }
}
