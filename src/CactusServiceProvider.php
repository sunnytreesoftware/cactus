<?php

namespace Sunnytree\Cactus;

use Illuminate\Support\ServiceProvider;

class CactusServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([__DIR__.'/../publishable/assets' => public_path('assets')]);
        $this->publishes([__DIR__.'/../resources/views' => resource_path('views')]);
        $this->publishes([__DIR__.'/../routes' => base_path('routes')]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/../routes/cactus.php';
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'cactuswelcome');
    }
}
