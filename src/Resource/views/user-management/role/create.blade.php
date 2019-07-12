@extends('user-management.master')

@section('header')
    @parent

@endsection

@section('breadcrumb')
    @include('mekaeils-package.layouts.breadcrumb',[
        'pageTitle' => 'Create Role',
        'lists' => [
            [
                'link'  => '#',
                'name'  => 'User Management',
            ],
            [
                'link'  => 'admin.user_management.role.index',
                'name'  => 'Roles',
            ],
            [
                'link'  => '#',
                'name'  => 'New role', 
            ]
        ]
    ])
@endsection

@section('content')
    <p>New Role</p>
@endsection


@section('footer')
    @parent
    
@endsection