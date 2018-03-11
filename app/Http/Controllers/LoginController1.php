<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\CustShop;
use DB;


class LoginController1 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     

    /**
     * Obtain the user information from google.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        try{
        $user = Socialite::driver('google')->stateless()->user();
        }catch(Exception $e){      
            return redirect('auth/google');
        }
        //dd($user);
       $userEmail=$user->email;
       $userName=$user->name;
       $firstchar="cu".''.$this->handle();
       $pieces = explode(" ", $userName);   //retrieve first name and last name
       $first=$pieces[0];
       $last=$pieces[1];
       //$data=DB::select( 'SELECT email FROM customer where email<>"'.$email.'"');
       //if()
       $cust=DB::table('customer')->insert(['first_name' => $first,'last_name' => $last,'cid' => $firstchar,'email' => $userEmail]);
       if($cust==true){
          session(['email' => $userEmail]);
          return redirect('/')->with('success','Login Successfull !');
        }
        else{
            return redirect('/')->with('error','Something went wrong !');
        }
    }
    public function handle(){
        $data=collect(DB::select( "SELECT cid FROM customer order by cid desc limit 1"));
        $cidCust=$data[0]->cid;
        $val= intval(substr($cidCust,2));   //primary key generation
        return $val+1;
    }
    
}