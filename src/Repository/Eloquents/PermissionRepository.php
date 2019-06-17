<?php

namespace Modules\Base\Repository\Eloquents\User;


use Modules\Base\Repository\Contracts\EloquentBaseRepository;
use Modules\Base\Repository\Contracts\PermissionRepositoryInterface;
use Modules\User\Entities\Permission;
use Modules\User\Entities\Role;
use Nwidart\Modules\Facades\Module;


class PermissionRepository extends EloquentBaseRepository implements PermissionRepositoryInterface
{
    protected $model = Permission::class;


    /**
     * @param Role $role
     * @param $permission
     * @param bool $give
     * @return Role
     */
    public function setPermissionToRole(Role $role, $permission, $give = true)
    {
        if ($give)
        {
            return $role->givePermissionTo($permission);
        }

        return $role->revokePermissionTo($permission);
    }

    /**
     * @return array
     */
    public function getModulesName()
    {
        $modules = Module::all();
        $listOfModules = array();
        foreach ($modules as $m)
        {
            $listOfModules["{$m->getName()}"] = $m->getName();
        }
        return $listOfModules;
    }

    /**
     * @return mixed
     */
    public function getPermissionsBaseModule($guard=null)
    {
        $permissions = $this->model::query();
        return $permissions
            ->when($guard, function ($q) use($guard){
                $q->where('guard_name',$guard);
            })
            ->get()
            ->groupBy('module');
    }


    public function SyncPermToRole(Role $role, array $permissions){

        return $role->syncPermissions($permissions);

    }



}