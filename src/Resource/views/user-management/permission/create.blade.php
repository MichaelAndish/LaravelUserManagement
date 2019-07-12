@extends('user-management.master')

@section('header')
    @parent

@endsection

@section('breadcrumb')
    @include('mekaeils-package.layouts.breadcrumb',[
        'pageTitle' => 'Create Permission',
        'lists' => [
            [
                'link'  => '#',
                'name'  => 'User Management',
            ],
            [
                'link'  => 'admin.user_management.permission.index',
                'name'  => 'Permission',
            ],
            [
                'link'  => '#',
                'name'  => 'New permission', 
            ]
        ]
    ])
@endsection

@section('content')
    <p>New Permission</p>
@endsection


@section('footer')
    @parent
    
@endsection