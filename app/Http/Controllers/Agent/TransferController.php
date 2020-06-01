<?php

namespace App\Http\Controllers\Agent;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;

class TransferController extends BaseController
{
    public function index()
    {
        return view('agent.transfer.index');
    }

    public function makeTransferPage()
    {
        return view('agent.transfer.make');
    }

}
