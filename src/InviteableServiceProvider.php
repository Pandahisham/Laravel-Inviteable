<?php

namespace DraperStudio\Inviteable;

use Illuminate\Support\ServiceProvider;

/**
 * Class InviteableServiceProvider.
 */
class InviteableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('/migrations'),
        ], 'migrations');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
