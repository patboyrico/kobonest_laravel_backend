<?php

namespace App\Http\Controllers\User;

use App\Ticket;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController;

class TicketController extends BaseController
{
    public function __construct()
    {
        $this->middleware('user.registered');
    }

    public function index()
    {
        $this->tickets = Ticket::orderBy('created_at')->get();
        return view('user.tickets.index', $this->data);
    }

    public function createTicketPage()
    {
        return view('user.tickets.create');
    }
}
