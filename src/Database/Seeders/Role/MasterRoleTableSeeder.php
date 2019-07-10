<?php

namespace Mekaeil\LaravelUserManagement\seeders\Permission;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Mekaeil\LaravelUserManagement\Repository\Contracts\RoleRepositoryInterface;

class MasterRoleTableSeeder extends Seeder
{
    protected $roles = [];
    protected $roleRepository;

    public function __construct(RoleRepositoryInterface $repository)
    {
        $this->roleRepository = $repository;
    }

    protected function getRoles()
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
        Model::unguard();

        $this->command->info('=============================================================');
        $this->command->info('              USER MODULE: INSERT ROLES DATA');
        $this->command->info('=============================================================');
        $this->command->info("\n");

        foreach ($this->getRoles() as $role)
        {
            // $findRole = Role::where('name',$role['name'])
            //     ->where('guard_name',$role['guard_name'])
            //     ->first();
            $findRole = $this->roleRepository->findBy([
                'name'       => $role['name'],
                'guard_name' => $role['guard_name']
            ]);

            if ($findRole)
            {
                $this->command->info('THIS ROLE << ' . $role['name'] .'['. $role['guard_name'] . '] >> EXISTED! UPDATING DATA ...');

                $this->roleRepository->update($findRole->id,[
                    'name'          => $role['name'],
                    'display_name'  => $role['display_name'],
                    'guard_name'    => $role['guard_name'],
                    'description'   => isset($role['description']) ? $role['description'] : null,
                ]);
                // $findRole->update([
                //     'name'          => $role['name'],
                //     'display_name'  => $role['display_name'],
                //     'guard_name'    => $role['guard_name'],
                //     'description'   => isset($role['description']) ? $role['description'] : null,
                // ]);

                continue;
            }

            $this->command->info('CREATING THIS ROLE <<' . $role['name'] .'['. $role['guard_name'] . '] >> ...');

            $this->roleRepository->store([
                'name'          => $role['name'],
                'display_name'  => $role['display_name'],
                'guard_name'    => $role['guard_name'],
                'description'   => isset($role['description']) ? $role['description'] : null,
            ]);
            // Role::create([
            //     'name'          => $role['name'],
            //     'display_name'  => $role['display_name'],
            //     'guard_name'    => $role['guard_name'],
            //     'description'   => isset($role['description']) ? $role['description'] : null,
            // ]);

        }

        $this->command->info("\n");
        $this->command->info('=============================================================');
        $this->command->info('              INSERTING ROLES FINALIZED!');
        $this->command->info('=============================================================');
        $this->command->info("\n");

    }

}
