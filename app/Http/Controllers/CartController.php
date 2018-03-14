<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(!empty(session('email'))){
            $email=session('email');
            $data=$this->call();
           // return $data;
            foreach($data as $d){
               if($d->qty!=0)
                 $val[$d->item_id]=$d->price*$d->qty;
             else
                $val[$d->item_id]=$d->price;
           }
            if(!empty($data))
                return view('cart',array('data'=>$data,'val'=>$val));
            else
                return view('cart');
        }
        else
          return view('cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function call(){
            $email=session('email');
            $query=collect(DB::select('SELECT cid FROM customer where email= "'.$email.'" limit 1'));
            $cid=$query[0]->cid;
            $data=collect(DB::select('SELECT i.item_id,item_name,price,qty FROM cart as c,item as i Where i.item_id=c.item_id and cid="'.$cid.'" order by item_id desc'));
            return $data;
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $song =  Cart::where('item_id', $id)->delete();
        $data=$this->call();
        //dd($data);
         foreach($data as $d){
               if($d->qty!=0)
                 $val[$d->item_id]=$d->price*$d->qty;
             else
                $val[$d->item_id]=$d->price;
           }
        if(!empty($val))
        {
            session(['cart'=>session('cart')-1]);
           return view('cart',array('data'=>$data,'val'=>$val))->with('success', 'Remark Deleted Successfully');
        }
        else
        {
            session(['cart'=>session('cart')-1]);

            return view('cart',array('data'=>$data))->with('success', 'Remark Deleted Successfully');

        }
    }
    
}
