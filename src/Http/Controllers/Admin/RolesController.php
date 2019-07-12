<?php

namespace Mekaeil\LaravelUserManagement\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Mekaeil\LaravelUserManagement\Repository\Contracts\PermissionRepositoryInterface;
use Mekaeil\LaravelUserManagement\Repository\Contracts\RoleRepositoryInterface;

class RolesController extends Controller
{
    protected $permissionRepository;
    protected $roleRepository;

    public function __construct(
        PermissionRepositoryInterface $permission,
        RoleRepositoryInterface $role)
    {
        $this->permissionRepository = $permission;
        $this->roleRepository       = $role;
    }

    public function index(){
        return view('user-management.role.index');
    }

    public function create(){
        
    }

    public function store(){
        
    }

    public function update(){
        
    }

    public function delete()
    {

    }
}
