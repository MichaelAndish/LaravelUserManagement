<?php

namespace Mekaeil\LaravelUserManagement\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Mekaeil\LaravelUserManagement\Repository\Contracts\DepartmentRepositoryInterface;
use Mekaeil\LaravelUserManagement\Repository\Contracts\UserRepositoryInterface;

class DepartmentsController extends Controller
{

    protected $departmentRepository;
    protected $userRepository;

    public function __construct(
        DepartmentRepositoryInterface $department, 
        UserRepositoryInterface $user)
    {
        $this->departmentRepository = $department;
        $this->userRepository       = $user;
    }

    public function index(){
        return view('user-management.department.index');
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
