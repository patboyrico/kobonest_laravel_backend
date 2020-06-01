<?php

namespace App\Http\Controllers\User;

use App\User;
use App\Wallet;
use App\Transfer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Validator;

class TransferController extends BaseController
{

    public function __construct()
    {
        $this->middleware('user.registered');
    }

    public function index()
    {
        $this->transfers = Transfer::all();
        return view('user.transfers.index', $this->data);
    }

    public function makeTransferPage()
    {
        return view('user.transfers.make');
    }

    public function makeTransfer(Request $request)
    {
        $auth_user = auth()->user();

        $validator = Validator::make($request->all(), [
            'amount' => ['required', 'numeric'],
            'account_no' => ['required'],
            'account_holder' => ['required']
         ]);

         if($validator->fails()){
             return redirect()->back()->with('errors', $validator->errors());
         }

        //  dd( int $auth_user->wallet->balance);

        if(Wallet::where([
             ['user_id', $auth_user->id],
             ['balance', '<' ,$request->amount]
            ])->exists()
        ){
            return redirect()->back()->with('balance_error', 'You do not have sufficient funds to complete this transfer');
         }

         $transfer = new Transfer();
         $transfer->to = $request->account_no;
         $transfer->amount= $request->amount;
         $transfer->from = $auth_user->wallet->account_number;
         $transfer->save();

         $wallet = Wallet::where('account_number',$auth_user->wallet->account_number)->decrement('balance', $request->amount);
         $wallet_2 = Wallet::where('account_number',$request->account_no)->increment('balance', $request->amount);

         return redirect()->route('user.dashboard')->with('success', 'Funds Transferred Successfully');

    }

    public function getAccountName(Request $request)
    {
        $wallet = Wallet::where([
            ['account_number', '!=' ,auth()->user()->wallet->account_number],
            ['account_number', request('account_no')]
            ])->first();

        if (!$wallet) {
            $response_user = '';
        }else {
            $response_user = [$wallet->user->full_name, $wallet->user->id];
        }


        return response()->json($response_user);
    }
}
