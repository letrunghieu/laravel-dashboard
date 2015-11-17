<?php
namespace HieuLe\LaravelDashboard;

use HieuLe\Active\ActiveServiceProvider;
use HieuLe\BodyClasses\Body;
use HieuLe\LaravelMenu\LaravelMenuServiceProvider;
use Illuminate\Support\ServiceProvider;

class LaravelDashboardServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(dirname(__DIR__) . '/views', Dashboard::PLUGIN_NAME);
        $this->mergeConfigFrom(dirname(__DIR__) . '/config/config.php', Dashboard::PLUGIN_NAME);
        $this->publishes([
            dirname(__DIR__) . '/config/config.php' => config_path(Dashboard::PLUGIN_NAME . '.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Dashboard::PLUGIN_NAME, function ($app) {
            return new Dashboard($app['config'], new Body());
        });

        $this->app->register(ActiveServiceProvider::class);
        $this->app->register(LaravelMenuServiceProvider::class);
        $this->app->register(ServiceProvider::class);
    }
}