<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Wallet;
use Illuminate\Http\Request;
use App\Http\Helpers\AccountNumber;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Validator;

class UsersController extends BaseController
{

    public function __construct()
    {
        $this->middleware('admin.registered');
    }

    public function index()
    {
        $this->users = User::where('role', 'user')->get();
        return view('admin.users.index', $this->data);
    }

    public function agentIndex()
    {
        $this->agents = User::where('role', 'agent')->get();
        return view('admin.agents.index', $this->data);
    }

    public function view($id)
    {
        $this->user = User::find($id);
        return view('admin.users.view', $this->data);
    }

    public function createUser()
    {
        return view('admin.users.create');
    }

    public function postCreateUser(Request $request)
    {
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

        return redirect()->route('admin.dashboard')->with('success', 'User Created Successfully');
    }

    public function createAgent()
    {
        return view('admin.agents.create');
    }

    public function postCreateAgent(Request $request)
    {
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
            'role' => 'agent',
            'email' =>$request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->wallet()->create([
            'account_number' => AccountNumber::createAcctNo(),
            'balance' => 0.00,
            'deposit_balance' => 0.00,
            'savings_balance' => 0.00,
        ]);

        $user->agent()->create([
            'earnings' => 0.00
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Agent Created Successfully');
    }



}
