<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;
use App\review;

class ProductDetails extends Controller
{
    //
    public function product()
    {
        return view('product-details');
    }
    public function show($item_id)
    {
        $details=item::select('*')->where('item_id',$item_id)->get();
        // $item = DB::table('item')->get();
        // return $details;
        return view('product-details')->with('details',$details);
    }
    public function get_reviews($item_id)
    {
        $review=review::select('*')->where('item_id',$item_id)->get();
        // $item = DB::table('item')->get();
        // return $review;
        return view('product-details')->with('review',$review);
    }
    
}
