<?php

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Account\AccountInterface as AccountInterface;
use App\Http\Requests\Common\Account\UserEditFormRequest;
use App\Http\Requests\Common\Account\ChangePasswordFormRequest;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AccountInterface $account)
    {   
        $this->account = $account;
        $this->middleware('auth');
    }

    /* ------------------- Edit Users Page --------------------------- */

    /**
     * Edit user data.
     *
     * @return $user object
     */
    public function editUser(){
        $edit = $this->account->editUser();
        return view('account.profile',compact('edit'));
    }

    /**
     * Update user form data.
     *
     * @param $input array
     * @return $response json
     */
    public function updateUser(UserEditFormRequest $request){
        $input = $request->all();
        $response = $this->account->updateUser($input);
        return response()->json($response); 
    }

    /**
     * change user current password.
     *
     * @param array $input
     * @return string
     */  
    public function changePassword(ChangePasswordFormRequest $request)
    {   
    	$input = $request->all();
        $response = $this->account->changePassword($input);
        return response()->json($response);        
    }              
}
