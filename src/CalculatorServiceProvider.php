<?php

namespace umar\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //register our package controller
        $this->app->make('Umar\Calculator\CalculatorController');
        //load our package views
        $this->loadViewsFrom(__DIR__.'/views', 'calculator');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //load package route file 
        include __DIR__.'/routes.php';
    }
}
