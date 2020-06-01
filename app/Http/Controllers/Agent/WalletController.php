<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;

class WalletController extends BaseController
{
    public function fundWalletPage()
    {
        return view('agent.wallet.fund');
    }

    public function fundWallet(Request $request)
    {
        # code...
    }


}
