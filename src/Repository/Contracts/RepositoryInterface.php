<?php

namespace Mekaeil\LaravelUserManagement\Repository\Contracts;


interface RepositoryInterface
{

    public function find(int $ID);

    public function findMany(array $Lists);

    public function delete(int $ID);

    public function deleteMany(array $Lists);

}