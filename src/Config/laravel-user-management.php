<?php

return [

    /*  
    |--------------------------------------------------------------------------
    | YOUR PROJECT INFORMATION
    |--------------------------------------------------------------------------
    |   
    |
    */

        'users_table'               => 'users',
        'user_model'                => \Mekaeil\LaravelUserManagement\Entities\User::class,
        'users_id_table'            => 'id',
        'user_password_coumn_name'  => 'password', // FOR SET BCRYPT IN USER MODEL

        'fillables_column' => [
            'first_name',
            'last_name',
            'password',
            'email',            
            'mobile',           
            'status',           
            'remember_token',
            'mobile_verified',
            'email_verified',
        ],

        'migrations_columns' => [
            [
                'type'      => 'string',
                'name'      => 'first_name',
                'nullable'  => false,
                'length'    => null,
            ],
            [
                'type'      => 'string',
                'name'      => 'last_name',
                'nullable'  => false,
                'length'    => null,
            ],
            [
                'type'      => 'string',
                'name'      => 'password',
                'nullable'  => false,
                'length'    => null,
            ],
            [
                'type'      => 'string',
                'name'      => 'email',
                'nullable'  => false,
                'length'    => null,
            ],
            [
                'type'      => 'string',
                'name'      => 'mobile',
                'nullable'  => true,
                'length'    => null,
            ],
            [
                'type'      => 'string',
                'name'      => 'remember_token',
                'nullable'  => true,
                'length'    => null,  
            ],
            [
                'type'      => 'enum',
                'name'      => 'status',
                'default'   =>  'pending',
                'values'    => [
                    'pending',
                    'accepted',
                    'blocked',
                ],

            ],
            [
                'type'      => 'boolean',
                'name'      => 'email_verified',
                'default'   => false,
            ],
            [
                'type'      => 'boolean',
                'name'      => 'mobile_verified',
                'default'   => false,
            ],
            
        ],
    
];