@extends('user-management.master')

@section('header')
    @parent

@endsection

@section('breadcrumb')
    @include('mekaeils-package.layouts.breadcrumb',[
        'pageTitle' => 'Create User',
        'lists' => [
            [
                'link'  => '#',
                'name'  => 'User Management',
            ],
            [
                'link'  => 'admin.user_management.user.index',
                'name'  => 'Users',
            ],
            [
                'link'  => '#',
                'name'  => 'New user', 
            ]
        ]
    ])
@endsection

@section('content')
    <p>New User</p>
@endsection


@section('footer')
    @parent
    
@endsection