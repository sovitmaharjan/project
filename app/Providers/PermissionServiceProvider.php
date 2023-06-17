<?php

namespace App\Providers;

use App\Models\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        try{
            Permission::get()
                ->map(function ($permission){
                    Gate::define($permission->slug, function($user) use ($permission){
                        return $user->hasPermission($permission->slug);
                    });
                });
        } catch (\Exception $e){
            report($e);
            return false;
        }

        Blade::if('can', function($permission){
            if(getUser()->hasPermission($permission)){
                return true;
            }
            return false;
        });

        Blade::if('hasRole', function ($role){
            if(getUser()->role->slug == $role){
                return true;
            }
            return false;
        });

        Blade::if('hasAnyRole', function ($roles=[]){
            if (in_array(getUser()->role->slug, $roles)){
                return true;
            }
            return false;
        });
    }
}
