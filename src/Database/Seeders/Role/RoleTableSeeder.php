<?php

use Illuminate\Database\Seeder;
use Mekaeil\LaravelUserManagement\seeders\Permission\MasterRoleTableSeeder;
class RoleTableSeeder extends MasterRoleTableSeeder
{
    protected $permissions = [
        [
            'name'          => "Admin",
            'title'         => "Administrator",
            'guard_name'    => "web",
            'description'   => "This role will assign to project owner",
        ],
        [
            'name'          => "User",
            'title'         => "Client",
            'guard_name'    => "web",
            'description'   => "This role will assign to usual users or clients",
        ],
        
    ];

    
}
