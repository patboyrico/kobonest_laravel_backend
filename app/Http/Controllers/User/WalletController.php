<?php

namespace App\Http\Controllers\User;

use App\Wallet;
use App\Transaction;
use GladePay\GladePay;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Helpers\GladepayPayments;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Validator;

class WalletController extends BaseController
{
    public function fundWalletPage()
    {
        return view('user.wallet.fund');
    }

}
