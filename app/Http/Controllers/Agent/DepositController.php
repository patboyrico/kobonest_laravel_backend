<?php

namespace App\Http\Controllers\Agent;

use App\Wallet;
use App\Deposit;
use App\DepositCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Validator;

class DepositController extends BaseController
{
    public function __construct()
    {
        $this->middleware('agent.registered');
    }

    public function index()
    {
        // $this->deposits = Deposit::orderBy('created_at')->get();
        return view('agent.deposit.index', $this->data);
    }

    public function makeDepositPage()
    {
        $this->categories = DepositCategory::orderBy('created_at')->get();
        return view('agent.deposit.make', $this->data);
    }

    public function makeDeposit(Request $request)
    {
        $auth_user = auth()->user();

        $validator = Validator::make($request->all(), [
            'amount' => ['required'],
            'deposit_type' => ['required'],
            'maturity_period' => ['required', 'numeric'],
            'deposit_category' => ['required']
        ]);

        if($validator->fails()){
            return redirect()->back()->with('errors', $validator->errors());
        }

        if(Wallet::where([
            ['user_id', $auth_user->id],
            ['balance', '<' ,$request->amount]
           ])->exists()
       ){
           return redirect()->back()->with('balance_error', 'You do not have sufficient funds to complete this transaction');
        }

        $deposit = new Deposit();
        $deposit->amount = $request->amount;
        $deposit->deposit_type = $request->deposit_type;
        $deposit->category_id = $request->deposit_category;
        $deposit->maturity_period = $request->maturity_period;
        $deposit->save();

        Wallet::where('account_number', $auth_user->wallet->account_number)->decrement('balance', $request->amount);
        Wallet::where('account_number', $auth_user->wallet->account_number)->increment('deposit_balance', $request->amount);

        return redirect()->route('agent.dashboard')->with('success', 'Deposit Set Up Successfully');
    }

}
