<?php

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
