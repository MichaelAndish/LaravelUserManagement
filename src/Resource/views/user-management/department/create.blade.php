@extends('user-management.master')

@section('header')
    @parent

@endsection

@section('breadcrumb')
    @include('mekaeils-package.layouts.breadcrumb',[
        'pageTitle' => 'Create Department',
        'lists' => [
            [
                'link'  => '#',
                'name'  => 'User Management',
            ],
            [
                'link'  => 'admin.user_management.department.index',
                'name'  => 'Departments',
            ],
            [
                'link'  => '#',
                'name'  => 'New Department', 
            ]
        ]
    ])
@endsection

@section('content')
    <p>New Department</p>
@endsection


@section('footer')
    @parent
    
@endsection