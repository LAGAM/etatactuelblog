<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Categorie;

class testProvider extends ServiceProvider
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
        view()->composer('*', function($view){
            $view->with('classname_array', Categorie::all());
        });
    }
}
