<?php

namespace App\Http\Controllers\Admin;

use App\Agent;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;

class AgentsController extends BaseController
{
    public function index()
    {
        $this->agents = User::where('role', 'agent')->get();
        return view('admin.agents.index', $this->data);
    }
}
