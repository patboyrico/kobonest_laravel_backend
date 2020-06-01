<?php

namespace App\Http\Controllers;

use App\Loan;
use App\Wallet;
use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Helpers\GladepayPayments;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return redirect()->route('user.login');
    }

    public function fundWallet(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'wallet' => ['required'],
            'amount' => ['required', 'numeric'],
            'card_number' => ['required'],
            'expiry_date' => ['required'],
            'cvv' => ['required'],
            'pin' => ['required', 'numeric']
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('errors', $validator->errors());
        }

        $returned = GladepayPayments::validateOTP($request->transaction_id, $request->otp);

        $transaction = new Transaction();
        $transaction->trasaction_code = $request->transaction_id;
        $transaction->status = 'completed';
        $transaction->amount = $request->amount;
        $transaction->type = 'fund';
        $transaction->user_id = auth()->user()->id;
        $transaction->save();

        $auth_user = auth()->user();

        switch ($request->wallet) {
            case 'main':
                Wallet::where('account_number',$auth_user->wallet->account_number)->increment('balance', $request->amount);
                break;

            case 'savings':
                Wallet::where('account_number',$auth_user->wallet->account_number)->increment('savings_balance', $request->amount);
                break;
            default:
            Wallet::where('account_number',$auth_user->wallet->account_number)->increment('deposit_balance', $request->amount);
                break;
        }

        switch (Request::url()) {
            case '/wallet/fund':
                return redirect()->route('user.dashboard')->with('success', 'Wallet Funded Successfully');
                break;

            default:
            return redirect()->route('agent.dashboard')->with('success', 'Wallet Funded Successfully');
                break;
        }

    }








    public function getOTP(Request $request)
    {
        $json_initiate = '
            {
                "action":"initiate",
                "paymentType":"card",
                "user": {
                    "firstname":"Abubakar",
                    "lastname":"Ango",
                    "email":"test@gladepay.com",
                    "ip":"192.168.33.10",
                    "fingerprint": "cccvxbxbxb"
                },
                "card":{
                    "card_no":"5438898014560229",
                    "expiry_month":"09",
                    "expiry_year":"19",
                    "ccv":"789",
                    "pin":"3310"
                },
                "amount":"10000",
                "country": "NG",
                "currency": "NGN"
            }
        ';
       $returned = GladepayPayments::makePayment($json_initiate);

       return response()->json($returned);
    }

}
