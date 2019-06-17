<?php

use Illuminate\Database\Seeder;
use Mekaeil\LaravelUserManagement\seeders\Permission\MasterPermissionTableSeeder;

class PermissionTableSeeder extends MasterPermissionTableSeeder
{
    protected $permissions = [
        [
            [
                'name'          => 'admin.manager',
                'display_name'  => 'مدیریت بخش‌های ادمین',
                'guard_name'    => 'api',
                'description'   => 'این دسترسی جهت مشاهده بخش‌های عمومی ادمین ایجاد شده است.',
                'module'        => 'User',
                'roles'         => [
                    'Admin',
                ],
            ],
        ]
    ];

    
}
