<?php

namespace App\Http\Controllers\Admin;

use App\Loan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;

class LoansController extends BaseController
{

    public function __construct()
    {
        $this->middleware('admin.registered');
    }

    public function index()
    {
        $this->loans = Loan::all();
        return view('admin.loans.index', $this->data);
    }
}
