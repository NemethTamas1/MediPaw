<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterDolgozoRequest;
use App\Http\Requests\RegisterGazdiRequest;
use App\Models\Dolgozo;
use App\Models\Gazdi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(RegisterDolgozoRequest $request){
        $data = $request->validated();

        $dolgozo = Dolgozo::create($data);

        return response()->json([
            "data" => [
                "message" => "A(z) $dolgozo->email sikeresen regisztrált."
            ]
        ]);
    }

    public function storeGazdi(RegisterGazdiRequest $request) {
        $data = $request->validated();

        $data['password'] = Hash::make($data['password']);

        $gazdi = Gazdi::create($data);

        return response()->json([
            "data" => [
                'message' => "A(z) {$gazdi->email} sikeresen regisztrált gazdaként."
            ]
        ]);
    }
}
