<?php

namespace App\Http\Controllers;
// use App\Http\Controllers\Carbon\Carbon;
use Illuminate\Http\Request;
use App\item;
use App\review;
use App\customer;
use DB;
class ProductDetails extends Controller
{
   
    public function show($item_id)
    {
        $details=item::select('*')->where('item_id',$item_id)->get();
        $review=review::select('*')->where('item_id',$item_id)->get();
        if(!empty(session('item_id')))
        {
            session(['item_id'=>$item_id]);
        }
        else
        {
            session()->forget('item_id');
            session(['item_id'=>$item_id]);
        }
       
        return view('product-details')->with('details',$details)->with('review',$review);
    }
    //adding review
    public function add_review(Request $request,$item_id)
    {
        // dd("$item_id");
        $name=$request->username;
        $email=$request->email;
        $reviews=$request->review;
        $rating=$request->rating;
        $cid=collect(DB::select('Select cid from customer where email="'.$email.'"')) ;
        $cust=DB::table('review')->insert(['item_id' => $item_id,'review' => $reviews,'rating' => $rating,'cid' => $cid[0]->cid,'name'=>$name]);
        $rat=DB::select('Select avg(rating) as avg from review where item_id="'.$item_id.'"');
        $add=DB::update('Update item set rating='.$rat[0]->avg.' where item_id="'.$item_id.'"');
        $details=item::select('*')->where('item_id',$item_id)->get();
        $review=review::select('*')->where('item_id',$item_id)->get();
    
        // return view('product-details')->with('details',$details)->with('review',$review);
        $query1=$this->featured($item_id);
        //dd($query1);
        // $item = DB::table('item')->get();
        // return $details;
        return view('product-details')->with('details',$details)->with('review',$review)->with('query1',$query1)->with("success","Review added successfully");
    }
    public function featured($item_id)
    {
        $query=collect(DB::select('Select category from item where item_id="'.$item_id.'"'));
        $cat=$query[0]->category;
        $query1=collect(DB::select('Select item_name,item_id,price,images from item where category="'.$cat.'" and is_stock=1 and item_id!="'.$item_id.'" order by rating desc'));
        
        
        return $query1;
    }
    
    
}
