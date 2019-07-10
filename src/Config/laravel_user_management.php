<?php

return [

    /*  
    |--------------------------------------------------------------------------
    | YOUR PROJECT INFORMATION
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


        
];