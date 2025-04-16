<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterDolgozoRequest;
use App\Models\Dolgozo;
use Illuminate\Http\Request;

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
}
