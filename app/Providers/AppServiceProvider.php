<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use App\Models\Role;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Define gates for permissions
        $roles = Role::with('permissions')->get();
        $permissionsArray = [];

        foreach ($roles as $role) {
            foreach ($role->permissions as $permissions) {
                $permissionsArray[$permissions->title][] = $role->id;
            }
        }

            foreach ($permissionsArray as $title => $roles) {
                Gate::define($title, function (\App\Models\User $user) use ($roles) {
                    $userRoles = $user->roles()->pluck('id')->toArray();
                    return count(array_intersect($userRoles, $roles)) > 0;
                });
            }        View::composer('*', function ($view) {
            $view->with('globalLocations', \App\Models\Location::all());
            $view->with('globalEventTypes', \App\Models\EventType::all());
        });
    }
}
