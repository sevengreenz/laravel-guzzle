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
            sprintf('%s/config/http.php', dirname(__DIR__)) => config_path('http.php')
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

        $app->singleton('http.factory', function ($app) {
            return new Factory();
        });

        $app->singleton('http', function ($app) {
            return new Manager($app, $app['http.factory']);
        });
    }
}
