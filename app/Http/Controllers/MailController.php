<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use DB;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send()
    {
            $email=session('email');
            $data=collect(DB::select( 'SELECT first_name,last_name,email  FROM customer where email="'.$email.'"'));
            $data1=$this->call();
            $i=0;
                    foreach($data1 as $d){
                    if($d->qty!=0)
                        $val[$i]=$d->price*$d->qty;
                    else
                        $val[$i]=$d->price;
                    $i++;
                  }
             $bill=$this->show_bill($val);
             $final_bill=$bill+20;
             Mail::send(['text'=>'mail'],['name','ABC'],function($message){
             $email=session('email');
             $message->to($email,'To')->subject('Goonj-Product Purchase');
             $message->from("",'Goonj');
        });
            if(!empty($data))
                return view('checkout',array('data'=>$data))->with('bill',$bill)->with('final_bill',$final_bill);
            else
                return view('checkout');return view('checkout',array('data',$data))->with('success','Message delivered successfully');
    }
     public function call(){
            $email=session('email');
            $query=collect(DB::select( 'SELECT cid FROM customer where email= "'.$email.'" limit 1'));
            $cid=$query[0]->cid;
            $data=collect(DB::select('SELECT i.item_id,item_name,price,qty FROM cart as c,item as i Where i.item_id=c.item_id and cid="'.$cid.'" order by item_id desc'));
            return $data;
    }
    public function show_bill($val)
    {
        $sum=0;
        for($i=0;$i<count($val);$i++){
            $sum=$sum+$val[$i];
        }
        return $sum;
    }

   
}
