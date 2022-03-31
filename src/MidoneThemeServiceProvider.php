<?php

namespace Codein\MidoneTheme;

use Illuminate\Support\ServiceProvider;

class MidoneThemeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // include the routes
        $this->loadRoutesFrom(__DIR__.'/routes.php');

        //include the views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'midonetheme');
    }
}
