<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function authenticated()
    {
        if(Auth::check())
        {

            if(Auth::user()->role_as == '1') // 1 = admin
            {

                return redirect ('/admin')->with('status', 'Welcome Back to Admin Dashboard!');;
            } 
            
            elseif(Auth::user()->role_as == '0') {

                return redirect ('/home')->with('status', 'Hey you!');

            }
        }
            
        
       }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
