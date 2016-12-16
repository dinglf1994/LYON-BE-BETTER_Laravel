<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
//use App\Employees;

class BetterController extends Controller
{
    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function index()
    {
//        var_dump($this->request);//太恐怖了
    }
}
