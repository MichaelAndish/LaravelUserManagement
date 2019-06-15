<?php

namespace Mekaeil\LaravelUserManagement\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable,HasRoles;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable(config('permission.table_names.users_table'));
    }

    protected $fillable = config('laravel-user-management.fillables_column');

    public function set{ucfirst(config('laravel-user-management.user_password_coumn_name'))}Attribute($password)
    {
        $this->attributes[config('laravel-user-management.user_password_coumn_name')] = bcrypt($password);
    }

}