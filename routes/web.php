<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('bootstrap/index', ['name' => 'Lyon']);
});
//
Route::get('error', function() {
    return view('errors.503');
});
//
Route::get('user/index', 'UserController@index');
//
Route::get('lyon/better', 'BetterController@index');
//
Route::get('employees', 'EmployeesController@employeesList');

