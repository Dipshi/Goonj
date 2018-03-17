<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\item;
use App\cart;
use App\customer;
use Illuminate\Pagination\Paginator;


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
       
       
        if(!empty(session('email')))
        {
            $uname=session('email');
            $uid = collect(DB::select('select cid from customer where email="'.$uname.'"'));
            $count =collect(DB::select('select * from cart where cid="'.$uid[0]->cid.'"'));
            session(['cart'=>count($count)]);
        }
        // return $count;
        $item=collect(DB::select( 'SELECT * FROM item limit 10 '));

        return View::make('index')->with('item', $item);   
    }  
    public function return_category(Request $request,$category)
    {
        $items=item::select('*')->where('category',$category)->paginate(10);
        // return $items;
        return View::make('shop')->with('items', $items)->with('category',$category);   

    }    
    public function range(Request $request,$category,$range)
    {
        // $range=split("-",$range);
        $range = explode('-', $range);

        $items=collect(DB::select( 'SELECT * FROM item where category= "'.$category.'" And price between '.$range[0].' AND '.$range[1].'')->paginate(10));

        // $items=item::select('*')->where('category',$category)->get();
        // return $items;
        return View::make('shop')->with('items', $items)->with('category',$category);   


    }      
    public function search(Request $request){
        $searchData= $request->searchData;
  
        //start query for search
        $data = DB::table('item')
        // ->join('cats','cats.id','products.cat_id')
        ->where('category', 'like', '%' . $searchData . '%')
        ->get();

        // return view('shop',[
        //   'data' => $data, 'catByUser' => $searchData
        // ]);
        return View::make('shop')->with('items', $data)->with('category',$searchData);   

      }  
}