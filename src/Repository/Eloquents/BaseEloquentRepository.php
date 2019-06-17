<?php

namespace Mekaeil\LaravelUserManagement\Repository\Eloquents;

use Modules\Base\Repository\Contracts\BaseRepositoryInterface;

class BaseEloquentRepository implements BaseRepositoryInterface
{
    protected $model;

    public function all(array $columns = null, array $relations = [])
    {
        $query = $this->model::query();

        if (!empty($relations)) 
        {
            $query->with($relations);
        }

        if (!is_null($columns)) 
        {
            return $query->get($columns);
        }

        return $query->get();
    }

    public function find(int $ID, array $columns = null)
    {
        return $this->model::find($ID);
    }

    public function store(array $item)
    {
        return $this->model::create($item);
    }

    public function update(int $ID, array $data)
    {
        $item = $this->find($ID);

        if ($item) 
        {
            return $item->update($data);
        }

        return null;
    }

    public function delete(int $ID)
    {
        if (intval($ID) > 0) 
        {
            return $this->model::destroy($ID);
        }

        return null;
    }

    public function findBy(array $criteria, array $columns = [], bool $single = true)
    {
        $query = $this->model::query();

        foreach ($criteria as $key => $item) 
        {
            $query->where($key, $item);
        }

        $method = $single ? 'first' : 'get';

        return empty($columns) ? $query->{$method}() : $query->{$method}($columns);
    }

    public function updateBy(array $criteria, array $data)
    {
        $query = $this->model::query();

        foreach ($criteria as $key => $value) 
        {
            $query->where($key, $value);
        }

        return $query->update($data);
    }


}
