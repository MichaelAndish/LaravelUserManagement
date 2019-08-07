<?php

namespace Mekaeil\LaravelUserManagement\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Mekaeil\LaravelUserManagement\Repository\Contracts\UserRepositoryInterface;
use Mekaeil\LaravelUserManagement\Repository\Contracts\RoleRepositoryInterface;
use Mekaeil\LaravelUserManagement\Http\Requests\Auth\UserLogin;
use Mekaeil\LaravelUserManagement\Http\Requests\Auth\UserRegistration;

class AuthController extends Controller
{

    protected $RoleRepository;
    protected $userRepository;

    public function __construct(
        UserRepositoryInterface $user,
        RoleRepositoryInterface $role)
    {
        $this->userRepository = $user;
        $this->RoleRepository = $role;
    }

    public function loginForm()
    {
        return view('user-management.auth.login');
    }

    public function registerForm()
    {
        return view('user-management.auth.register');
    }

    public function login(UserLogin $request)
    {
        return $request->all();
    }

    public function register(UserRegistration $request)
    {
        return $request->all();
    }


}
