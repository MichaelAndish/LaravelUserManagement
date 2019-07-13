<?php

/*
|--------------------------------------------------------------------------
| LARAVEL USER MANAGEMENT ROUTE
|--------------------------------------------------------------------------
|
|
*/

    Route::group([
        'namespace'     => 'App\Http\Controllers\UserManagement',
        'prefix'        => 'admin/user-management',
        'as'            => 'admin.user_management.',
        'middleware'    => ['web']
    ], 
    function () {

        ////    USER ROUTES
        ///////////////////////////////////////////////////////////////////
        Route::group([
            'prefix' => 'user',
            'as'     => 'user.'
        ], 
        function () {

            // admin.user_management.user.index
            route::get('/', 'UsersController@index')->name('index');

            // admin.user_management.user.create
            route::get('/create', 'UsersController@create')->name('create');

            // admin.user_management.user.create
            route::post('/store', 'UsersController@store')->name('store');

            // admin.user_management.user.edit
            route::get('/edit/{ID}', 'UsersController@edit')->name('edit');

            // admin.user_management.user.update
            route::put('/update/{ID}', 'UsersController@update')->name('update');

            // admin.user_management.user.delete
            route::delete('/delete/{ID}', 'UsersController@delete')->name('delete');
        });

        ////    ROLE ROUTES
        ///////////////////////////////////////////////////////////////////
        Route::group([
            'prefix' => 'role',
            'as'     => 'role.'
        ], 
        function () {

            // admin.user_management.role.index
            route::get('/', 'RolesController@index')->name('index');

            // admin.user_management.role.create
            route::get('/create', 'RolesController@create')->name('create');

            // admin.user_management.role.create
            route::post('/store', 'RolesController@store')->name('store');

            // admin.user_management.role.edit
            route::get('/edit/{ID}', 'RolesController@edit')->name('edit');

            // admin.user_management.role.update
            route::put('/update/{ID}', 'RolesController@update')->name('update');

            // admin.user_management.role.delete
            route::delete('/delete/{ID}', 'RolesController@delete')->name('delete');
        });

        ////    PERMISSION ROUTES
        ///////////////////////////////////////////////////////////////////
        Route::group([
            'prefix' => 'permission',
            'as'     => 'permission.'
        ], 
        function () {

            // admin.user_management.permission.index
            route::get('/', 'PermissionsController@index')->name('index');

            // admin.user_management.permission.create
            route::get('/create', 'PermissionsController@create')->name('create');

            // admin.user_management.permission.store
            route::post('/store', 'PermissionsController@store')->name('store');

            // admin.user_management.permission.edit
            route::get('/edit/{ID}', 'PermissionsController@edit')->name('edit');

            // admin.user_management.permission.update
            route::put('/update/{ID}', 'PermissionsController@update')->name('update');

            // admin.user_management.permission.delete
            route::delete('/delete/{ID}', 'PermissionsController@delete')->name('delete');
        });

        ////    DEPARTMENT ROUTES
        ///////////////////////////////////////////////////////////////////
        Route::group([
            'prefix' => 'department',
            'as'     => 'department.'
        ], 
        function () {

            // admin.user_management.department.index
            route::get('/', 'DepartmentsController@index')->name('index');

            // admin.user_management.department.create
            route::get('/create', 'DepartmentsController@create')->name('create');

            // admin.user_management.department.create
            route::post('/store', 'DepartmentsController@store')->name('store');

            // admin.user_management.department.edit
            route::get('/edit/{ID}', 'DepartmentsController@edit')->name('edit');

            // admin.user_management.department.update
            route::put('/update/{ID}', 'DepartmentsController@update')->name('update');

            // admin.user_management.department.delete
            route::delete('/delete/{ID}', 'DepartmentsController@delete')->name('delete');
        });


    });