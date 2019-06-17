<?php

namespace Mekaeil\LaravelUserManagement\seeders\Permission;

use Illuminate\Database\Seeder;

class MasterRoleTableSeeder extends Seeder
{
    protected $roles = [];

    private function getPermissions()
    {
        return $this->roles;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    }
}
