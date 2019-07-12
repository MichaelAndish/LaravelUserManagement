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

    public function index(Request $request)
    {
        // $keyword = $request->keyword ?? null;
        $permissions = $this->permissionRepository->all();

        return view('user-management.permission.index', compact('permissions'));
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
