<?php

namespace App\Entities;
use Mekaeil\LaravelUserManagement\Entities\User as UserManagement;

class User extends UserManagement
{
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

    
}