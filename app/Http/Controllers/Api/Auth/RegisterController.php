<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Helpers\AccountNumber;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'phone_number' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors', $validator->errors()], 402);
        }

        $user =  User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            // 'account_number' => $this->createAcctNo(),
            'role' => 'user',
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if (!$user) {
            return response()->json(['errors'], 402);
        }

        $user->wallet()->create([
            'account_number' => AccountNumber::createAcctNo(),
            'balance' => 0.00,
            'deposit_balance' => 0.00,
            'savings_balance' => 0.00,
        ]);

        $success['token'] = $user->createToken('AppName')->accessToken;
        $success['user'] = new UserResource($user);
        return response()->json(['success' => $success], 200);
    }
}
