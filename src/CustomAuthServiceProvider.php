<?php

namespace Ferita\Products;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class CustomAuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('create-product', function () {

            $roles = app('current_user_type');

            if($roles =='Admin' || $roles =='admin' || $roles == 'Manager' ||  $roles == 'manager') {
                return true;
            }
            return false;
        });

        Gate::define('edit-delete-product', function () {

            $roles = app('current_user_type');

            if($roles =='Admin' || $roles =='admin' || $roles == 'Manager' ||  $roles == 'manager') {
                return true;
            }
            return false;
        });
    }
}
