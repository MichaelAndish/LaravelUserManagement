<?php

namespace Mekaeil\LaravelUserManagement\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Mekaeil\LaravelUserManagement\Repository\Contracts\PermissionRepositoryInterface;
use Mekaeil\LaravelUserManagement\Repository\Contracts\RoleRepositoryInterface;
use Mekaeil\LaravelUserManagement\Repository\Contracts\UserRepositoryInterface;
use Mekaeil\LaravelUserManagement\Repository\Eloquents\DepartmentRepository;
use Mekaeil\LaravelUserManagement\Http\Requests\Admin\StoreUser;
use Mekaeil\LaravelUserManagement\Http\Requests\Admin\UpdateUser;

class UsersController extends Controller
{
    protected $userRepository;
    protected $permissionRepository;
    protected $roleRepository;
    protected $departmentRepository;

    public function __construct(
        UserRepositoryInterface $user,
        PermissionRepositoryInterface $permission,
        RoleRepositoryInterface $role,
        DepartmentRepository $department)
    {
        $this->permissionRepository = $permission;
        $this->roleRepository       = $role;
        $this->userRepository       = $user;
        $this->departmentRepository = $department;
    }

    public function index()
    {
        $users          = $this->userRepository->all();

        return view('user-management.user.index', compact('users'));
    }

    public function create()
    {
        $roles       = $this->roleRepository->all();
        $departments = $this->departmentRepository->all();

        return view('user-management.user.create', compact('roles', 'departments'));
    }

    public function edit($ID)
    {
        $roles              = $this->roleRepository->all();
        $departments        = $this->departmentRepository->all();
        $user               = $this->userRepository->find($ID);
        $userHasRoles       = $user->roles ? array_column(json_decode($user->roles, true), 'id') : [];
        $userHasDepartments = $user->departments ? array_column(json_decode($user->departments, true), 'id') : [];

        return view('user-management.user.edit', compact('roles', 'departments', 'user', 'userHasRoles', 'userHasDepartments'));
    }

    public function store(StoreUser $request)
    {
        return $request->all();
    }

    public function update(UpdateUser $request)
    {
        
    }

    public function delete()
    {

    }
}
