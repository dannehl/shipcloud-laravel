<?php


namespace Dannehl\Shipcloud;


use Illuminate\Support\ServiceProvider;

class ShipcloudServiceProvider extends ServiceProvider
{


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('shipcloud', function ($app) {

            $client = new \Dannehl\Shipcloud\Shipcloud($app['config']['shipcloud']['api_key']);

            return $client;
        });
    }



    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/config/config.php' => config_path('shipcloud.php'),
            ], 'config');

        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['shipcloud'];
    }

}