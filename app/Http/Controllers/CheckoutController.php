<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;

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
            if(!empty($data))
                return view('checkout',array('data'=>$data))->with('bill',$bill)->with('final_bill',$final_bill);
            else
                return view('checkout');
        }
        else
              return view('checkout');
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
    public function showSummary(){
        
    }
//Update method is not working
    public function update(Request $request)
    {
           $name = $request->input('add'); 
           dd($name);    
        //     $user = new User;
        //     $user->name = $input['name'];
        //     $user->email = $input['email'];
        //    // $user->password = Hash::make($input['password']);
        //     $user->save();
            //dd($name);
             $email=session('email');
        $data=collect(DB::select( 'SELECT cid  FROM customer where email="'.$email.'"'));
        $cid=$data[0]->cid;
        $insert1=DB::table('customer')
            ->where('cid', $cid)
            ->update(['address' => $name]);
            return view('/Login');
     }

    
    public function destroy($id)
    {
        //
    }
}
