<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticateRequest;
use App\Models\Dolgozo;
use App\Models\Gazdi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function authenticateDolgozo(AuthenticateRequest $request)
    {
        $credentials = $request->validated();
        $email = $credentials['email'];

        // Próbálkozás dolgozóként
        $dolgozo = Dolgozo::where('email', $email)->first();

        if ($dolgozo && Hash::check($credentials['password'], $dolgozo->password)) {
            $token = $dolgozo->createToken('dolgozo_token')->plainTextToken;

            return response()->json([
                'token' => $token,
                'user' => [
                    'id' => $dolgozo->id,
                    'role' => $dolgozo->role,
                    'beosztas' => $dolgozo->beosztas
                ]
            ]);
        }

        return response()->json([
            'message' => 'Sikertelen belépés dolgozóként.'
        ], 401);
    }

    public function authenticateGazdi(AuthenticateRequest $request)
    {
        $credentials = $request->validated();
        $email = $credentials['email'];

        // Próbálkozás gazdiként
        $gazdi = Gazdi::where('email', $email)->first();

        if ($gazdi && Hash::check($credentials['password'], $gazdi->password)) {
            $token = $gazdi->createToken('gazdi_token')->plainTextToken;

            return response()->json([
                'token' => $token,
                'user' => [
                    'id' => $gazdi->id,
                    'email' => $gazdi->email,
                    'nev' => $gazdi->nev
                ]
            ]);
        }

        return response()->json([
            'message' => 'Sikertelen belépés gazdiként.'
        ], 401);
    }
    
}
