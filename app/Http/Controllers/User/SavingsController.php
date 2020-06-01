<?php

namespace App\Http\Controllers\User;

use App\Saving;
use App\Wallet;
use App\LoanCategory;
use App\SavingsCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Validator;

class SavingsController extends BaseController
{

    public function __construct()
    {
        $this->middleware('user.registered');
    }

    public function index()
    {
        $this->savings = Saving::orderBy('created_at')->get();
        return view('user.savings.index', $this->data);
    }

    public function makeSavingsPage()
    {
        $this->categories = SavingsCategory::all();
        return view('user.savings.make', $this->data);
    }

    public function makeSaving(Request $request)
    {
        $auth_user = auth()->user();

        $validator = Validator::make($request->all(), [
            'amount' => ['required'],
            'save_category' => ['required'],
            'savings_type' => ['required'],
            'maturity_period' => ['required', 'numeric']
        ]);

        if($validator->fails()){
            return redirect()->back()->with('errors', $validator->errors());
        }

        if(Wallet::where([
            ['user_id', $auth_user->id],
            ['balance', '<' ,$request->amount]
           ])->exists()
       ){
           return redirect()->back()->with('balance_error', 'You do not have sufficient funds to complete this transfer');
        }

        $saving = new Saving();
        $saving->amount = $request->amount;
        $saving->savings_type = $request->savings_type;
        $saving->category_id = $request->save_category;
        $saving->maturity_period = $request->maturity_period;
        $saving->save();

        Wallet::where('account_number', $auth_user->wallet->account_number)->decrement('balance', $request->amount);
        Wallet::where('account_number', $auth_user->wallet->account_number)->increment('savings_balance', $request->amount);

        return redirect()->route('user.dashboard')->with('success', 'Savings Set Up Successfully');

    }
}
