<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
     public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

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
       //$staff = Customer::where('email', '=', $userEmail)->first();
       //Auth::login($authUser,true);
       //if(isset($staff))
          session(['email' => $userEmail]);
          return redirect('/')->with('success','Login Successfull !');
       // return $user->token;
    //    else {
    //         $auth_url = $client->createAuthUrl();
    //         return redirect($auth_url);
    //     }
    }
    


}