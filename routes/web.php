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

// 响应多个HTTP请求 ---- match或any方法
Route::match(['get', 'post'], '/match', function (){
//    return csrf_field(); exit;
    return 'route for match';
});

Route::any('/any', function (){
    return 'route for any';
});
// END

// 可选参数
Route::get('/User/{name?}', function ($name = 'lyon'){
    return 'User '. $name;
});
// END

// http中间件
Route::get('/middle/{foo?}', function ($foo = null){
    $test = new App\Http\Controllers\Admin\TestController;
    $fun = $foo == null ? 'index' : $foo;
    $test->$fun();
})->middleware('role:editor');

// 命名路由
Route::get('/free/lyon', function (){
    $url = route('jim');
    return '<a href="'.$url.'">'. $url. '</a>';
})->name('jim');

Route::get('/', function () {
    return view('bootstrap/index', ['name' => 'Lyon']);
});
//
Route::get('/error', function() {
    return view('errors.503');
});
//
Route::get('/user/index', 'UserController@index');
//
Route::get('/lyon/better', 'BetterController@index');
//
Route::get('/employees', 'EmployeesController@employeesList');
//
Route::get('/lyon', 'IntroduceController@lyon');
//应用软件
Route::get('/application', 'ApplicationController@index');

// admin.test
Route::get('/admin/test', 'Admin\TestController@index');


// 闭包路由
Route::get('/date', function (){
    return date('Y-m-d H:i:s');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
