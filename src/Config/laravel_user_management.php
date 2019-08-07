<?php

return [

    /*  
    |--------------------------------------------------------------------------
    | LARAVEL USER MANAGEMENT CONFIG
    |--------------------------------------------------------------------------
    |   
    |
    */
        // laravel_user_management.users_table
        'users_table'           => 'users',
        // laravel_user_management.user_department_table
        'user_department_table' =>  'user_departments',

        /** 
         * THIS TABLE IS NAME OF THE MANY TO MANY RELATIONAL TABLE 
         * BETWEEN USERS TABLE & USER DEPARTMENTS TABLE
         * **/
        // laravel_user_management.user_department_user_table
        'user_department_user_table' =>  'user_departments_users',
        
        // laravel_user_management.user_model    
        'user_model'            => App\Entities\User::class,

        // laravel_user_management.row_list_per_page
        'row_list_per_page'     => 15,

        // laravel_user_management.admin_url
        'admin_url'             => env('APP_URL').'/admin',

        // laravel_user_management.logo_url
        'logo_url'              => env('APP_URL'). "/mekaeils-package/images/logo-user-management.jpg",
        
        'auth'  => [

            // laravel_user_management.auth.enable    
            'enable'        => true,

            // laravel_user_management.auth.login_url    
            'login_url'     => 'user/login',

            // laravel_user_management.auth.register_url    
            'register_url'  => 'user/register',

            // laravel_user_management.auth.username  
            'username'      => 'email', // email OR mobile 
            
        ],

];