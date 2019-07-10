<?php

use Illuminate\Database\Seeder;
use Mekaeil\LaravelUserManagement\seeders\Permission\MasterPermissionTableSeeder;

class PermissionTableSeeder extends MasterPermissionTableSeeder
{
    protected $permissions = [
        [
            'name'          => 'admin.manager',
            'display_name'  => 'پنل مدیریت',
            'guard_name'    => 'web',
            'description'   => 'این مجوز برای دسترسی کاربر به ادمین می‌باشد.',
            'module'        => 'User',
            'roles'         => [
                'Admin',
            ],
        ],
    ];

    
}
