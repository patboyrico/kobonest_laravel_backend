<?php

namespace App\Http\Controllers\User;

use App\Wallet;
use App\Withdrawal;
use App\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Helpers\GladepayPayments;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Validator;

class WithdrawalController extends BaseController
{
    public function __construct()
    {
        $this->middleware('user.registered');
    }

    public function index()
    {
        $this->withdrawals = Withdrawal::orderBy('created_at')->get();
        return view('user.withdrawals.index', $this->data);
    }

    public function makeWithdrawalPage()
    {
        return view('user.withdrawals.make');
    }

    public function makeWithdrawal(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'wallet' => ['required'],
            'amount' => ['required', 'numeric'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('errors', $validator->errors());
        }

        if(Wallet::where([
            ['user_id', auth()->user()->id],
            ['balance', '<' ,$request->amount]
           ])->exists()
       ){
           return redirect()->back()->with('balance_error', 'You do not have sufficient funds to complete this withdrawal');
        }

        $disbursed = GladepayPayments::disburseFunds();

        $transaction = new Transaction();
        $transaction->trasaction_code = Str::uuid();;
        $transaction->status = 'completed';
        $transaction->amount = $request->amount;
        $transaction->type = 'withdrawal';
        $transaction->user_id = auth()->user()->id;
        $transaction->save();

        $withdrawal = new Withdrawal();
        $withdrawal->amount = $request->amount;
        $withdrawal->transaction_id = $transaction->id;
        $withdrawal->save();

        Wallet::where('account_number',auth()->user()->wallet->account_number)->decrement('balance', $request->amount);

        return redirect()->route('user.dashboard')->with('success', 'Withdrawal Was Successful. You should get your funds soon');

    }

}
