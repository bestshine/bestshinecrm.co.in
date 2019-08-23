<?php

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use App\Http\Requests\Common\LoginFormRequest;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the login page.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {	
        return view('auth.login');
    } 

    /**
     * Validate post login data.
     *
     * @param $request array
     * @return \Illuminate\Http\Response
     */
    public function postLogin(LoginFormRequest $request)
    {	
    	$input = $request->all();
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials, $request->has('remember'))){
            if(Auth::user()->is_deleted == 0){
                if(Auth::user()->status == 1){

                    // login successfull
                    return response()->json(['status'=>1,'msg'=>'Authendicated Success...Please Wait Redirecting...','url'=>route('dashboard')]);
                }else{
                    // account blocked
                    Auth::logout();
                    // Session::flush();                    
                    return response()->json(['status'=>0,'msg'=>'Alert! Account Blocked.']);                    
                }                
            }else{
                // account deleted
                Auth::logout();
                // Session::flush();                   
                return response()->json(['status'=>0,'msg'=>'Alert! Account Deleted.']);
            }
        }else{
            // login failed
            return response()->json(['status'=>0,'msg'=>'Alert! Email or Password Incorrect.']);
        }
    }

    /**
     * logout user
     * @return Redirect
     */
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('login')->with('logout', 'You have been logged out from application');
    }              
}
