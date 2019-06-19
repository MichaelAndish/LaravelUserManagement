<?php

use Illuminate\Database\Seeder;
use Mekaeil\LaravelUserManagement\seeders\User\MasterUserTableSeeder;

class UserTableSeeder extends MasterUserTableSeeder
{
    protected $permissions = [
        [
            'first_name'    => '',
            
        ],
        
    ];

    
}
