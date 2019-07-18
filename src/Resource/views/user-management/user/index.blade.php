@extends('user-management.master')

@section('header')
    @parent

@endsection

@section('breadcrumb')
    @include('mekaeils-package.layouts.breadcrumb',[
        'pageTitle' => 'Users',
        'lists' => [
            [
                'link'  => '#',
                'name'  => 'User Management',
            ],
            [
                'link'  => '#',
                'name'  => 'Users',
            ]
        ]
    ])
@endsection

@section('content')
<div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.user_management.user.create') }}" class="btn btn-outline-primary btn-icon-text float-right btn-newInList">
                        <i class="mdi mdi-library-plus btn-icon-prepend"></i>
                        new user   
                    </a>
                    <h4 class="card-title">List of users</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Full Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Mobile
                                </th>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Register Date
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                                <tr>
                                    <td>
                                        {{ $item->id }}
                                    </td>
                                    <td>
                                        {{ $item->first_name . ' ' . $item->last_name }}
                                    </td>
                                    <td>
                                        {{ $item->email }}
                                    </td>
                                    <td>
                                        {{ $item->mobile }}
                                    </td>
                                    <td>
                                        {{ $item->status }}
                                    </td>
                                    <td>
                                        {{ $item->created_at }}
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.user_management.user.edit', $item->id) }}" class="btn btn-outline-dark btn-sm">Edit</a>

                                        <form action="{{ route('admin.user_management.user.delete', $item->id) }}" method="post" class="inline-block">
                                            @method('DELETE')
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('footer')
    @parent
    
@endsection