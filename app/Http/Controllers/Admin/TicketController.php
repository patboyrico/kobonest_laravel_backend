<?php

namespace App\Http\Controllers\Admin;

use App\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BaseController;

class TicketController extends BaseController
{

    public function __construct()
    {
        $this->middleware('admin.registered');
    }

    public function index()
    {
        $this->tickets = Ticket::all();
        return view('admin.tickets.index', $this->data);
    }
}
