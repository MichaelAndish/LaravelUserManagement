<?php

namespace Mekaeil\LaravelUserManagement\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Mekaeil\LaravelUserManagement\Repository\Contracts\PermissionRepositoryInterface;

class PermissionsController extends Controller
{
    protected $permissionRepository;

    public function __construct(PermissionRepositoryInterface $permission)
    {
        $this->permissionRepository = $permission;
    }

    public function index(){
        return view('user-management.permission.index');
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
