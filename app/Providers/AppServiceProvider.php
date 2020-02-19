<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
    
    public function __construct(){
    // Force SSL in production
    if (config('app.env') == 'production') {
        URL::forceScheme('http://integra-035.herokuapp.com');
    }
}
}
