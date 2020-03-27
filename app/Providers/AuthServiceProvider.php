<?php

namespace App\Providers;

use App\Role;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        'App\AddPost' => 'App\Policies\AddPostPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin-permission', function ($user) {
            return $user->hasRole('admin');
        });


        Gate::define('can-edit', function ($user) {
            return $user->hasAnyRoles(['admin','editor']);
        });

        Gate::define('can-delete', function ($user) {
            return $user->hasAnyRoles(['admin','editor']);
        });

        Gate::define('can-add', function ($user) {
            return $user->hasAnyRoles(['admin','creator']);
        });
    }
}
