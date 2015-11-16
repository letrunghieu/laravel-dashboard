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
        $this->loadViewsFrom(dirname(__DIR__) . '/views', 'laravel_dashboard');
        $this->mergeConfigFrom(dirname(__DIR__) . '/config/config.php', 'laravel_dashboard');
        $this->publishes([
            dirname(__DIR__) . '/config/config.php' => config_path('laravel_dashboard.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app['dashboard-body'] = new Body();
        $this->app['dashboard-body']->addClasses('admin');

        $this->app->register(ActiveServiceProvider::class);
        $this->app->register(LaravelMenuServiceProvider::class);
        $this->app->register(ServiceProvider::class);
    }
}