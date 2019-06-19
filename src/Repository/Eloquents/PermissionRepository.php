<?php

namespace Mekaeil\LaravelUserManagement\Repository\Eloquents;

use App\Entities\Permission;
use App\Entities\Role;
use Mekaeil\LaravelUserManagement\Repository\Eloquents\BaseEloquentRepository;
use Mekaeil\LaravelUserManagement\Repository\Contracts\PermissionRepositoryInterface;
class PermissionRepository extends BaseEloquentRepository implements PermissionRepositoryInterface
{
    protected $model = Permission::class;

    public function setPermissionToRole(Role $role, $permission, $give = true)
    {
        if ($give)
        {
            return $role->givePermissionTo($permission);
        }

        return $role->revokePermissionTo($permission);
    }

    public function SyncPermToRole(Role $role, array $permissions)
    {
        return $role->syncPermissions($permissions);
    }



}