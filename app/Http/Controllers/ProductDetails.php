<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;
use App\review;
use DB;
class ProductDetails extends Controller
{
   
    public function show($item_id)
    {
        $details=item::select('*')->where('item_id',$item_id)->get();
        $review=review::select('*')->where('item_id',$item_id)->get();
        $query1=$this->featured($item_id);
        //dd($query1);
        // $item = DB::table('item')->get();
        // return $details;
        return view('product-details')->with('details',$details)->with('review',$review)->with('query1',$query1);
    }
    public function featured($item_id)
    {
        $query=collect(DB::select('Select category from item where item_id="'.$item_id.'"'));
        $cat=$query[0]->category;
        $query1=collect(DB::select('Select item_name,item_id,price,images from item where category="'.$cat.'" and is_stock=1 and item_id!="'.$item_id.'"'));
        $i=0;
        
        return $query1;
        

    }
   
   public function reviews()
   {
       dd("hello");
   }

    
}
