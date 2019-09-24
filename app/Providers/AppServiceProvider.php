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
        //for every /user uri, pass the associated user along
        view()->composer('user.*', function($view){
            //pass the view with data
            $view->with('user', auth()->user());
        });
    }
}
