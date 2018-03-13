<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CheckoutController extends Controller
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
            $data=collect(DB::select( 'SELECT first_name,last_name,email  FROM customer where email="'.$email.'"'));
            $email=session('email');
            $query=collect(DB::select( 'SELECT cid FROM customer where email= "'.$email.'" limit 1'));
            $cid=$query[0]->cid;
            $data1=collect(DB::select('SELECT count(i.item_id) as value,i.item_id FROM cart as c,item as i Where i.item_id=c.item_id and cid="'.$cid.'" group by i.item_id'));
            foreach($data1 as $d){
                $dataFinal=collect(DB::select('SELECT * from item Where item_id="'.$d->item_id.'"'));
           }
          // return $dataFinal;
            if(!empty($dataFinal))
                return view('checkout',array('data'=>$data,'data1'=>$dataFinal));
            else
                return view('checkout',array('data'=>$data));
        }
        else
              return view('checkout');
      }
      //  return view('checkout',array('data'=>$data));
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

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
    public function update(Request $request)
    {
              dd(request()->add) ;  
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
