<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function orders()
    {
        $uid=collect(DB::select('Select cid from customer where email="'.session('email').'"'));
        $order=collect(DB::select('Select * from orders where cid="'.$uid[0]->cid.'"'));
        
        return View::make('orders')->with('order',$order);
    }
}
