<?php

namespace Mekaeil\LaravelUserManagement\Repository\Eloquents;

use App\Entities\Department;
use Mekaeil\LaravelUserManagement\Repository\Eloquents\BaseEloquentRepository;
use Mekaeil\LaravelUserManagement\Repository\Contracts\DepartmentRepositoryInterface;

class DepartmentRepository extends BaseEloquentRepository implements DepartmentRepositoryInterface
{
    protected $model = Department::class;

    public function syncDepartment($owner, $method = 'sync', $userID = null)
    {
        return $owner->users()->{$method}($userID);
    }


}