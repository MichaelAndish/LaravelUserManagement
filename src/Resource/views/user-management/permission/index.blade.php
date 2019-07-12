@extends('user-management.master')

@section('header')
    @parent

@endsection

@section('breadcrumb')
    @include('mekaeils-package.layouts.breadcrumb',[
        'pageTitle' => 'Permissions',
        'lists' => [
            [
                'link'  => '#',
                'name'  => 'User Management',
            ],
            [
                'link'  => '#',
                'name'  => 'Permissions',
            ]
        ]
    ])
@endsection

@section('content')
    <p>Permissions</p>
@endsection


@section('footer')
    @parent
    
@endsection