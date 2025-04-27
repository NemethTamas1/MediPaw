<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticateRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function authenticate(AuthenticateRequest $request)
    {
        if (Auth::attempt($request->validated())) {

            $user = Auth::user();
            $token = Auth::user()->createToken('auth_token')->plainTextToken;

            return response()->json([
                "data" => [
                    "token" => $token,
                    "user" => [
                        "id" => $user->id,
                        "role" => $user->role,
                        "beosztas" => $user->beosztas
                    ]
                ]
            ], 200);
            
        } else {
            return response()->json([
                "data" => ["message" => "Sikeretelen belépés",]
            ], 401);
        }
    }
}
