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
           
             Mail::send(['text'=>'mail'],['name','ABC'],function($message){
             $email=session('email');
             $message->to($email,'To')->subject('Goonj-Product Purchase');
             $message->from("2015isha.shetty@ves.ac.in",'Goonj');
        });
                return redirect('/')->with('success','Transaction completed!');//,array('data'=>$data))->with('bill',$bill)->with('final_bill',$final_bill);
            
    }
    

   
}
