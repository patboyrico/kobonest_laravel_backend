<?php

namespace App\Http\Controllers\Agent;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WithdrawalController extends Controller
{
    public function __construct()
    {
        $this->middleware('agent.registered');
    }

    public function index()
    {
        // $this->withdrawals = Withdrawal::orderBy('created_at')->get();
        return view('agent.withdrawals.index', $this->data);
    }

    public function makeWithdrawalPage()
    {
        return view('agent.withdrawals.make');
    }

    public function makeWithdrawal(Request $request)
    {
        # code...
    }

}
