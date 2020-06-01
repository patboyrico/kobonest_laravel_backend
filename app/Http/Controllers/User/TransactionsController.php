<?php

namespace App\Http\Controllers\User;

use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;

class TransactionsController extends BaseController
{

    public function __construct()
    {
        $this->middleware('user.registered');
    }

    public function index()
    {
        $this->transactions = Transaction::orderBy('created_at')->get();
        return view('user.transactions.index', $this->data);
    }
}
