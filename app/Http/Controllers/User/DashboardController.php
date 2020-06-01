<?php

namespace App\Http\Controllers\User;

use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;

class DashboardController extends BaseController
{

    public function __construct()
    {
        $this->middleware('user.registered');
    }

    public function index()
    {
        $this->user = auth()->user();
        $this->transactions = $this->user->transactions;
        $this->recent_transactions = $this->user->transactions()->orderBy('created_at')->paginate(5);
        return view('user.dashboard.index', $this->data);
    }
}
