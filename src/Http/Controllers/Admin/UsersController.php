<?php

namespace Mekaeil\LaravelUserManagement\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Mekaeil\LaravelUserManagement\Repository\Contracts\PermissionRepositoryInterface;
use Mekaeil\LaravelUserManagement\Repository\Contracts\RoleRepositoryInterface;
use Mekaeil\LaravelUserManagement\Repository\Contracts\UserRepositoryInterface;

class UsersController extends Controller
{
    protected $userRepository;
    protected $permissionRepository;
    protected $roleRepository;

    public function __construct(
        UserRepositoryInterface $user,
        PermissionRepositoryInterface $permission,
        RoleRepositoryInterface $role)
    {
        $this->permissionRepository = $permission;
        $this->roleRepository       = $role;
        $this->userRepository       = $user;
    }

    public function index()
    {
        $users = $this->userRepository->all();

        return view('user-management.user.index', compact('users'));
    }

    public function create(){
        return view('user-management.user.create');
    }

    public function store(){
        
    }

    public function update(){
        
    }

    public function delete()
    {

    }
}
