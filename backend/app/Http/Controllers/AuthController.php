<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticateRequest;
use App\Models\Dolgozo;
use App\Models\Gazdi;
use App\Models\Owner;
use App\Models\Worker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\alert;

class AuthController extends Controller
{
    public function authenticate(AuthenticateRequest $request)
    {
        $credentials = $request->validated();
        $email = $credentials['email'];

        // Első próba gazdiként
        $owner = Owner::where('email', $email)->first();
        if ($owner && Hash::check($credentials['password'], $owner->password)) {
            $token = $owner->createToken('ownerToken')->plainTextToken;

            return response()->json([
                'ownerToken' => $token,
                'owner' => [
                    'id' => $owner->id,
                    'email' => $owner->email,
                    'nev' => $owner->nev,
                    'role' => 'owner',
                    'beosztas' => null
                ]
            ]);
        }
    }
}
