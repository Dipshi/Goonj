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
            $query=collect(DB::select( 'SELECT cid FROM customer where email= "'.$email.'" limit 1'));
            $cid=$query[0]->cid;
            $data=collect(DB::select('SELECT count(i.item_id) as value,i.item_id FROM cart as c,item as i Where i.item_id=c.item_id and cid="'.$cid.'" group by i.item_id'));
            foreach($data as $d){
                $dataFinal=collect(DB::select('SELECT * from item Where item_id="'.$d->item_id.'"'));
           }
            if(!empty($dataFinal))
                return view('cart',array('data'=>$dataFinal));
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
    public function create()
    {
        //
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
       return view('cart')->with('success', 'Remark Deleted Successfully');
    }
}
