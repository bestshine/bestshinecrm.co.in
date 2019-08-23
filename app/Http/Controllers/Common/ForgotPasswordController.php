<?php

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Common\ForgotFormRequest;
use App\Repositories\Account\AccountInterface as AccountInterface;

class ForgotPasswordController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AccountInterface $account)
    {	
    	$this->account = $account;
        $this->middleware('guest');
    }

    /**
     * Show the forgot password page.
     *
     * @return \Illuminate\Http\Response
     */
    public function showForgotPasswordForm()
    {	
        return view('auth.forgot.forgot');
    } 

    /**
     * Forgot password form data.
     *
     * @param $request array
     * @return \Illuminate\Http\Response
     */
    public function postForgotPassword(ForgotFormRequest $request)
    {
    	$input = $request->all();
        $response = $this->account->postForgotPassword($input);
        return response()->json($response); 
    }           
}
