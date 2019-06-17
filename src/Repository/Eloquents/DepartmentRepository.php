<?php

namespace Mekaeil\LaravelUserManagement\Repository\Eloquents;

class DepartmentRepository extends EloquentBaseRepository implements DepartmentRepositoryInterface
{
    protected $model;


    /**
     * @param $owner
     * @param string $method
     * @param null $roles
     * @return null
     */
    public function syncDepartment($owner, $method = 'sync', $userID = null)
    {
        return $owner->users()->{$method}($userID);
    }


}