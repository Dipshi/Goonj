<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Controllers\Controller;

class ProductDetailsController extends Controller
{
    //
    public function product()
    {
        // $product_id;
        $query=collect(DB::select( "SELECT * FROM item limit 1"));
        return view('product-details')->with('query',$query);
    }
    public function addToCart(Request $request, $id){
        $email=session('email');
        $query=collect(DB::select( 'SELECT cid FROM customer where email= "'.$email.'" limit 1'));
        $cid=$query[0]->cid;
        $cust=DB::table('cart')->insert(['cid' => $cid,'item_id' => $id]);
        $data= $this->show_cart($id,$cid);
        return view('product-details')->with('success','Added successfully to cart');// array ( 'data' => $data));
       
    }
    public function show_cart()
    {
        
    }
}
