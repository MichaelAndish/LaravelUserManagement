<?php

namespace Mekaeil\LaravelUserManagement\Entities;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable,HasRoles;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'mobile',
        'password',
        'status',
        'email_verified',
        'mobile_verified',        
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable(config("laravel_user_management.users_table"));
    }

}