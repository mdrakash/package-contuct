<?php

namespace Akash\Contuct;

use Illuminate\Support\ServiceProvider;

class ContuctServiceProvider extends ServiceProvider
{

    public function register()
    {
    }


    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'form');
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        $this->mergeConfigFrom(
            __DIR__ . '/config/contuct.php',
            'contuct'
        );
        $this->publishes([
            __DIR__ . '/config/contuct.php' => config_path('contuct.php'),
        ]);
    }
}
