<?php

namespace Modules\Base\Repository\Eloquents\User;

use Modules\Base\Repository\Contracts\EloquentBaseRepository;
use Modules\Base\Repository\Contracts\RoleRepositoryInterface;
use Modules\User\Entities\Role;


class RoleRepository extends EloquentBaseRepository implements RoleRepositoryInterface
{
    protected $model = Role::class;

    /**
     * @param $owner
     * @param string $method
     * @param null $roles
     * @return null
     */
    public function syncRole($owner, $method = 'syncRoles', $roles = null)
    {

        if ($method == 'syncRoles' && $roles)
        {
            return $owner->{$method}($roles);
        }

        if ($roles)
        {
            return $owner->roles()->{$method}($roles);
        }

        if (!$roles && $method == 'detach')
        {
            return $owner->roles()->detach();
        }

        return null;
    }

    /**
     * @param $owner
     * @param Role $role
     * @param bool $assign
     * @return mixed
     */
    public function setRoleToMember($owner, $role , $assign = true)
    {
        if ($assign)
        {
            return $owner->assignRole($role);
        }

        return $owner->removeRole($role);
    }


    public function getAllRolePermissions(Role $role, $method = 'get')
    {
        if ($method == 'pluck'){
            return $role->getAllPermissions()->pluck('id','id')->toArray();
        }

        return $role->getAllPermissions();
    }

}