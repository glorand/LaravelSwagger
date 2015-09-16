<?php

namespace Glorand\LaravelSwagger;

use Illuminate\Support\ServiceProvider;

class LaravelSwaggerServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->routesAreCached()) {
            require __DIR__ . '/Http/routes.php';
        }
        //$this->loadViewsFrom(__DIR__ . '/../../views', 'laravel-swagger');
        //$this->loadTranslationsFrom(__DIR__ . '/../../translations', 'laravel-swagger');

        $this->publishes([
            __DIR__ . '/../../views' => base_path('resources/views/vendor/laravel-swagger'),
            __DIR__ . '/../../translations' => base_path('resources/lang/vendor/laravel-swagger'),
            __DIR__ . '/../../config/laravel-swagger.php' => config_path('laravel-swagger.php')
        ]);

        $this->publishes([
            __DIR__ . '/../../../public' => public_path('vendor/laravel-swagger'),
        ], 'public');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/laravel-swagger.php',
            'laravel-swagger'
        );
    }
}
