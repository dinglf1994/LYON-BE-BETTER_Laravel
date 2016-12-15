<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $name = 'Be Better';
        return view('user.index', ['name' => $name]);
    }
}
