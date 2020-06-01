<?php

namespace App\Http\Controllers\Api\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function getUser(Request $request)
    {
        $user = new UserResource($request->user());
        return response()->json(['user' => $user], 200);
    }

}
