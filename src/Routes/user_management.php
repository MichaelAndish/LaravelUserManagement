<?php

/*
|--------------------------------------------------------------------------
| LARAVEL USER MANAGEMENT ROUTE
|--------------------------------------------------------------------------
|
|
*/

Route::group([
    'prefix' => 'admin',
], 
function () {
    route::get('/', function(){
        return view('index');
    });
});