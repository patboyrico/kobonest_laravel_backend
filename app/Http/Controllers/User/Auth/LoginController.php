<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('user.guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('user.auth.login');
    }

    protected function attemptLogin(Request $request)
    {
        return $this->guard()->attempt(['email' => $request->get('email'), 'password' => $request->get('password'), 'role' => 'user']);
    }
}
