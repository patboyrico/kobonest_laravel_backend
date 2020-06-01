<?php

namespace App\Http\Controllers\User\Auth;

use App\User;
use App\Wallet;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('user.guest')->except('logout');;
    }

    public function showRegistrationForm()
    {
        return view('user.auth.register');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'phone_number' => $data['phone_number'],
            // 'account_number' => $this->createAcctNo(),
            'role' => 'user',
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

     /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
         $user->wallet()->create([
            'account_number' => $this->createAcctNo(),
            'balance' => 0.00,
            'deposit_balance' => 0.00,
            'savings_balance' => 0.00,
        ]);



    }

    protected function createAcctNo()
    {
        $acct_no = 55 . rand(100000, 999999);
        $acct_numbers = Wallet::select('account_number')->get()->toArray();
        if(in_array($acct_no, $acct_numbers)){
            return $this->createAcctNo();
        }
        return $acct_no;
    }

}
