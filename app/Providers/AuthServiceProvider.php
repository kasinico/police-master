<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isSuperAdmin', function ($user) {
            if($user->isSuperAdmin == 'Y')
            {
                return true;
            }
            return false;
        });

        Gate::define('isMember', function ($user) {
            if($user->isMember == 'Y')
            {
                return true;
            }
            return false;
        });

        Gate::define('isPoliceAdmin', function ($user) {
            if($user->isPoliceAdmin == 'Y')
            {
                return true;
            }
            return false;
        });

        Gate::define('isSupervisor', function ($user) {
            if($user->isSupervisor == 'Y')
            {
                return true;
            }
            return false;
        });

        Gate::define('isStaff', function ($user) {
            if($user->isStaff == 'Y')
            {
                return true;
            }
            return false;
        });
    }
}
