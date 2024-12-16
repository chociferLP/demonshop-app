<?php

namespace App\Providers;

use App\Models\User;
use App\Policies\AdminPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     */
    protected $policies = [
            // Map your model to the policy
        User::class => AdminPolicy::class,
    ];

    /**
     * Register any authentication/authorization services.
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('is-admin', function (User $user) {
            return $user->role === 'admin';
        });
    }
}
