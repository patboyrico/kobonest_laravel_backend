<?php

namespace App\Http\Controllers\Agent\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/agent/dashboard';

    public function __construct()
    {
        $this->middleware('agent.guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('agent.auth.login');
    }

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(['email' => $request->get('email'), 'password' => $request->get('password'), 'role' => 'agent ']);
    }
}
