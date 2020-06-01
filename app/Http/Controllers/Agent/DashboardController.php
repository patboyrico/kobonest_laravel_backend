<?php

namespace App\Http\Controllers\Agent;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;

class DashboardController extends BaseController
{

    public function __construct()
    {
        $this->middleware('agent.registered');
    }

    public function index()
    {
        $this->agent = auth()->user();
        $this->registered_users = User::where('registered_by', $this->agent->agent->id)->get();
        return view('agent.dashboard.index', $this->data);
    }
}
