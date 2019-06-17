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
        if (file_exists(app_path('/../routes/route.user.management.php')))
        {
            $this->loadRoutesFrom(app_path('/../routes/route.user.management.php'));
        }
        else{
            $this->loadRoutesFrom(__DIR__ . '/Routes/route.user.management.php');
        }

        ////    SET VIEW'S ROUTE
        // $this->loadViewsFrom(__DIR__ . '/Views', 'LaravelUserManagement');

        ////    SET MIGRATION'S ROUTE
        $this->loadMigrationsFrom(__DIR__ . '/Database/Migrations');

        ////    SET CONFIG ROUTE
        // $this->mergeConfigFrom([
            // __DIR__ . '/config/laravel_user_management.php',
            // __DIR__ . '/config/permission.php','permission',
        // ]);


        /// PUBLISH SECTION
        ////////////////////////////////////////////////////////////////////////////////////////////////////
            
            /// ROUTE
            $this->publishes([
                __DIR__ . '/Routes/route.user.management.php' => app_path('/../routes/route.user.management.php'),
            ]);

            /// CONFIG
            $this->publishes([
                __DIR__ . '/Config/laravel_user_management.php' => config_path('laravel_user_management.php'),
                __DIR__ . '/Config/permission.php' => config_path('permission.php'),

            ]);

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        $this->app->bind('UserManagement', function(){
            return new UserManagement();
        });


    }
}
