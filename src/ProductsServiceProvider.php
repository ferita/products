<?php

namespace Ferita\Products;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class ProductsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('current_user_type', function ($app) {
           
            $current_user_type = 'guest';

            /* 
            * В тестовом примере из-за отсутствия в таблице "Users" поля "role" 
            * имя пользователя соответствует его роли (при запуске PackageUsersTableSeeder)
            */

            if(Auth::check()) {
                $current_user_type = Auth::user()->name; 
            }
            return $current_user_type;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    { 
        
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');

        $this->loadViewsFrom(__DIR__.'/views', 'products');

        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->loadTranslationsFrom(__DIR__.'/lang', 'products');

        $this->publishes([
            __DIR__.'/lang/ru' => resource_path('lang/ru'),
        ], 'lang');

        $this->publishes([
            __DIR__.'/assets' => public_path('vendor/products'),
        ], 'public');

        $this->publishes([
            __DIR__.'/database/migrations' => database_path('migrations'),
        ], 'migrations');

        $this->publishes([
            __DIR__.'/database/seeds' => database_path('seeds'),
        ], 'seeds');

    }

}

