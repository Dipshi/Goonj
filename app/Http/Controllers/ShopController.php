<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\item;
use View;


class ShopController extends Controller
{
    //
    public function index()
    {
        return view('shop');
    }

    public function returnitems()
    {
        $item = item::all();
        
        return View::make('index')->with('item', $item);   
    }  
    public function return_category($name)
    {
        $items=item::select('*')->where('category',$name)->get();
        return View::make('shop')->with('items', $items);   


    }        
}