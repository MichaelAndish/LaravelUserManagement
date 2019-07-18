<?php

namespace Mekaeil\LaravelUserManagement\Repository\Eloquents;

use App\Entities\User;
use Mekaeil\LaravelUserManagement\Repository\Eloquents\BaseEloquentRepository;
use Mekaeil\LaravelUserManagement\Repository\Contracts\UserRepositoryInterface;

class UserRepository extends BaseEloquentRepository implements UserRepositoryInterface
{
    protected $model = User::class;

    public function getUserBaseRole($roleRequest)
    {
        $query = $this->model::query();

        return $query->when($roleRequest, function ($q) use($roleRequest){

            $q->whereHas('roles', function ($q) use ($roleRequest) {
                $q->where('name', $roleRequest->name);
            });

        })
            ->orderBy('created_at','DESC')
            ->paginate();

    }


}