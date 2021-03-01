<?php

namespace Mekaeil\LaravelUserManagement\Database\Seeders\Department;

use Mekaeil\LaravelUserManagement\Seeders\Department\MasterDepartmentTableSeeder;

class DepartmentTableSeeder extends MasterDepartmentTableSeeder
{
    protected $departments = [
        [
            'title'     => "Clients",
            'parent'    => '',    
        ],
        
    ];

    
}