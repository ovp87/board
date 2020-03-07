<?php

namespace  Simpler\Board\Providers;

use Illuminate\Support\ServiceProvider;

class BoardProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');
        $this->loadMigrationsFrom(__DIR__.'/../Migrations');
    }
}
