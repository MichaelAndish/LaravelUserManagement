<?php

namespace Modules\Base\Repository\Eloquents\User;


use Modules\Base\Repository\Contracts\EloquentBaseRepository;
use Modules\Base\Repository\Contracts\UserRepositoryInterface;
use Modules\User\Entities\User;


class UserRepository extends EloquentBaseRepository implements UserRepositoryInterface
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

    /**
     * @param array|null $columns
     * @param array $relations
     * @param int|null $perPage
     * @param array $condition
     * @param array $method
     * @return mixed
     * @desc RETURN ALL DATA OR RETURN SELECTED COLUMNS OR WITH RELATIONS
     */
    public function userList(
        array $columns = [],
        array $relations = [],
        int $perPage = null,
        array $condition = [],
        array $method = []
    )
    {

        $query = $this->model::query();

        if (!empty($relations))
        {
            $query->with($relations);
        }

        if (!empty($columns))
        {
            return $query->get($columns);
        }

        $whereLike = '';
        if (!empty($condition))
        {
            foreach ($condition as $key => $value){

                if ( is_array($value)){
                    $whereLike .= '( ';
                    foreach ($value as $k => $v){
                        $whereLike .= "$v[0] like '%$v[1]%' or ";
                    }
                    $whereLike = substr($whereLike, 0, -3);
                    $whereLike .= ' ) and ';
//                    $query->where($value[0],$value[1],$value[2]);
                }else{
                    $query->where($key,$value);
                }
            }
            $whereLike = substr($whereLike, 0, -4);
        }
        if(!empty($whereLike)) {
            $query->whereRaw($whereLike);
        }

        if (!empty($method))
        {
            foreach( $method as $item )
            {
                $query->{$item['method']}($item['key'],$item['value']);
            }
        }

        if (!is_null($perPage))
        {

            return $query->paginate($perPage);
        }

        return $query->get();

    }

}