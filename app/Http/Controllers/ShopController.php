<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ShopController extends Controller
{
    //
    public function index()
    {
        return view('shop');
    }

    public function returnitems()
    {
        // $users = DB::select('select * from item ');
        $users = DB::table('item')->get();
        return view('index', ['items' => $items]);
    }
}