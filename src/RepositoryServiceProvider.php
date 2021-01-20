<?php

namespace RafflesArgentina\Repository;

use RafflesArgentina\Repository\Listeners\RepositoryEventListener;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('rafflesargentina.repository.listener', RepositoryEventListener::class);
    }

    /**
     * Register any other events for your application.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['events']->subscribe('rafflesargentina.repository.listener');
    }
}
