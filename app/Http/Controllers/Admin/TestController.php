<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index()
    {
        echo '<code>中间件测试->进入<b>index</b>方法</code><br>';
        echo '<font color="red">路由定义为:' , 'Route::get(\'/middle/{foo?}\', function ($foo = null){
    $test = new App\Http\Controllers\Admin\TestController;
    $fun = $foo == null ? \'index\' : $foo;
    $test->$fun();
})->middleware(\'role:editor\');</font>', '<br>';
    }

    public function test()
    {
        echo '<code>中间件测试->进入<b>test</b>方法</code><br>';
        echo '<font  color="red">路由定义为:' , 'Route::get(\'/middle/{foo?}\', function ($foo = null){
    $test = new App\Http\Controllers\Admin\TestController;
    $fun = $foo == null ? \'index\' : $foo;
    $test->$fun();
})->middleware(\'role:editor\');</font>', '<br>';
    }
}
