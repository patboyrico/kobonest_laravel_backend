<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WithdrawalController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin.registered');
    }

    public function index()
    {
        return view('agent.withdrawals.index');
    }
}
