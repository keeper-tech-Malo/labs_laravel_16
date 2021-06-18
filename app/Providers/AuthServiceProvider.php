<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('editUser', function($user,$post){
            return $user->role_id == 1 || $user->id == $post->user_id;
        });

        Gate::define('removeTag', function($user){
            return $user->role_id == 1 || $user->role_id == 2;
        });

        Gate::define('removeCat', function($user){
            return $user->role_id == 1 || $user->role_id == 2;
        });
    }
}
