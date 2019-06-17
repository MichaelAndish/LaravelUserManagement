<?php

namespace Mekaeil\LaravelUserManagement;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Mekaeil\LaravelUserManagement\Facade\UserManagement;

class LaravelUserManagementProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        ////    CHECK IF ROUTE EXISTS IN BASE PROJECT USE IT 
        $this->loadRoutesFrom(__DIR__ . '/routes/route.user_management.php');

        ////    SET VIEW'S ROUTE
        $this->loadViewsFrom(__DIR__ . '/views', 'LaravelUserManagement');

        ////    SET MIGRATION'S ROUTE
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');


        /// PUBLISH SECTION
        ////////////////////////////////////////////////////////////////////////////////////////////////////
            
            /// ROUTE
            $this->publishes([
                //  ROUTE
                __DIR__ . '/Routes/route.user_management.php' => app_path('/../routes/route.user_management.php'),
                // CONFIGS
                __DIR__ . '/Config/laravel_user_management.php' => config_path('laravel_user_management.php'),
                __DIR__ . '/Config/permission.php'              => config_path('permission.php'),
                // MIGRATIONS
                __DIR__ . '/Database/Migrations/'              => database_path('migrations/'),
                // SEEDS
                __DIR__ . '/Database/Seeders/Permission/PermissionTableSeeder.php'  => database_path('seeds/PermissionTableSeeder.php'),
                __DIR__ . '/Database/Seeders/Role/RoleTableSeeder.php'              => database_path('seeds/RoleTableSeeder.php'),
                // VIEWS
            ]);

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        ////    BIND FOR FACADE PATTERN
        $this->app->bind('UserManagement', function(){
            return new UserManagement();
        });

    }
}
