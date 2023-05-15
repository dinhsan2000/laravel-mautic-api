<?php

namespace Triibo\Mautic;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class MauticServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish Configuration File to base Path.
        $this->publishes( [
            __DIR__ . "/config/mautic.php" => config_path( "mautic.php" ),
        ], 'config');

        $this->publishes([
            __DIR__ . "/migrations"        => database_path('migrations'),
        ], 'migrations');

        $this->publishes([
            __DIR__ . "/Factories" => app_path('Factories'),
        ], 'factories');

        $this->publishes([
            __DIR__ . "/Models" => app_path('Models'),
        ], 'models');
    }

}
