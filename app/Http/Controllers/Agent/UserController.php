<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;
use App\Http\Helpers\AccountNumber;

class UserController extends BaseController
{
    public function index()
    {
        return view('agent.users.index');
    }

    public function registerUserPage()
    {
        return view('agent.users.create');
    }

    public function registerUser(Request $request)
    {
        $auth_user = auth()->user();

        $validator = Validator::make($request->all(), [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'phone_number' => ['required'],
            'password' => ['required', 'confirmed']
        ]);

        if($validator->fails()){
            return redirect()->back()->with('errors', $validator->errors());
        }

        $user =  User::create([
            'first_name' =>$request->first_name,
            'last_name' =>$request->last_name,
            'phone_number' =>$request->phone_number,
            // 'account_number' => $this->createAcctNo(),
            'role' => 'user',
            'email' =>$request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->wallet()->create([
            'account_number' => AccountNumber::createAcctNo(),
            'balance' => 0.00,
            'deposit_balance' => 0.00,
            'savings_balance' => 0.00,
        ]);

        return redirect()->route('agent.dashboard')->with('success', 'User Created Successfully');


    }



}
