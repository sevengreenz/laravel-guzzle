<?php

namespace SevenGreenz\LaravelGuzzle;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Class ServiceProvider
 *
 */
class ServiceProvider extends BaseServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            sprintf('%s/config/guzzle.php', dirname(__DIR__)) => config_path('guzzle.php')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     **/
    public function register()
    {
        $app = $this->app;

        $app->singleton('guzzle.factory', function ($app) {
            return new Factory();
        });

        $app->singleton('guzzle', function ($app) {
            return new Manager($app, $app['guzzle.factory']);
        });
    }
}
