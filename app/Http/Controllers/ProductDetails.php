<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;
use App\review;

class ProductDetails extends Controller
{
   
    public function show($item_id)
    {
        $details=item::select('*')->where('item_id',$item_id)->get();
        $review=review::select('*')->where('item_id',$item_id)->get();

        // $item = DB::table('item')->get();
        // return $details;
        return view('product-details')->with('details',$details)->with('review',$review);
    }

   

    
}
