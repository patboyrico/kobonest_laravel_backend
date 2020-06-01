<?php

namespace App\Http\Controllers\Admin;

use App\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;

class TransactionController extends BaseController
{
    public function __construct()
    {
        $this->middleware('admin.registered');
    }

    public function index()
    {
        $this->transactions = Transaction::all();
        return view('admin.transactions.index', $this->data);
    }
}
