@extends('user-management.master')

@section('header')
    @parent

@endsection

@section('breadcrumb')
    @include('mekaeils-package.layouts.breadcrumb',[
        'pageTitle' => 'Departments',
        'lists' => [
            [
                'link'  => '#',
                'name'  => 'User Management',
            ],
            [
                'link'  => '#',
                'name'  => 'Departments',
            ]
        ]
    ])
@endsection

@section('content')
    <p>Departments</p>
@endsection


@section('footer')
    @parent
    
@endsection