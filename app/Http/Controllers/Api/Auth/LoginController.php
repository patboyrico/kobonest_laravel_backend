<?php

namespace App\Http\Controllers\Api\Auth;

use Auth;
use User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Http\Resources\UserResource;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if($validator->fails()){
            return response()->json(['errors', $validator->errors()], 402);
        }

        if(Auth::attempt(['email' => $request->get('email'), 'password' => $request->get('password'), 'role' => 'user'])){
            $user = Auth::user();
            $success['token'] =  $user->createToken('AppName')->accessToken;
            $success['user'] = new UserResource($user);
            return response()->json(['success' => $success], 200);
        }  else {
            return response()->json(['errors'], 402);
        }
    }
}
