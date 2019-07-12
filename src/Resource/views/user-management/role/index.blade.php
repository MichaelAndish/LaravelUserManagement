@extends('user-management.master')

@section('header')
    @parent

@endsection

@section('breadcrumb')
    @include('mekaeils-package.layouts.breadcrumb',[
        'pageTitle' => 'Roles',
        'lists' => [
            [
                'link'  => '#',
                'name'  => 'User Management',
            ],
            [
                'link'  => '#',
                'name'  => 'Roles',
            ]
        ]
    ])
@endsection

@section('content')
    <p>Roles</p>
@endsection


@section('footer')
    @parent
    
@endsection