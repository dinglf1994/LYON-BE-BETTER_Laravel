<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BetterController extends Controller
{
    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function index()
    {
        $user = DB::select('SELECT * FROM weibo_fuckoil WHERE id = ?', [1]);
        var_dump($user);
//        var_dump($this->request);//太恐怖了
    }
}
