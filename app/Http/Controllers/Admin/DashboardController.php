<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;
use App\Http\Helpers\MoneyHelper;
use App\Transaction;

class DashboardController extends BaseController
{

    public function __construct()
    {
        $this->middleware('admin.registered');
    }

    public function index()
    {
        $this->users = User::where('role', 'user')->get();
        $this->agents = User::where('role', 'agent')->get();

        $this->total_income = MoneyHelper::convert(Transaction::where('type', 'fund')->pluck('amount')->sum());
        $this->paid_out = MoneyHelper::convert(Transaction::where('type', 'withdrawal')->pluck('amount')->sum());

        $this->recent_users = User::where('role', 'user')->orderBy('created_at')->paginate(5);


        return view('admin.dashboard.index', $this->data);
    }

    public function users()
    {
        $users = User::orderBy('created_at')->get();
        return view('admin.dashboard.index');
    }

}
