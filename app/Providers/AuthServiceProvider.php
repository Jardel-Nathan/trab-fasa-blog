<?php

namespace blog\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use blog\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'blog\Model' => 'blog\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('access-admin', function ($user){
            return $user->role == User::ROLE_ADMIN;
        });

        Gate::define('access-usuario', function ($user){
            return $user->role == User::ROLE_USER;
        });

    }
}
