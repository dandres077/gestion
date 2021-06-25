<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Schema::defaultStringLength(191);

        /*$usuarios = \App\User::all();
        view()->share('usuarios', $usuarios);*/

        view()->composer('*', 'App\Http\ViewComposers\ProfileComposer@compose');
    }

}
