<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Topics;
use App\Models\Categories;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
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

        Gate::define('update-category', function (User $user, Categories $category) {
            return $user->name === 'admin';
        });

        Gate::define('delete-category', function (User $user, Categories $category) {
            return $user->name === 'admin';
        });

        Gate::define('update-topic', function (User $user, Topics $topic) {
            return $user->name === 'admin';
        });

        Gate::define('delete-topic', function (User $user, Topics $topic) {
            return $user->name === 'admin';
        });

        Gate::define('show-dashboard', function (User $user) {
            return $user->name === 'admin';
        });
    }
}
