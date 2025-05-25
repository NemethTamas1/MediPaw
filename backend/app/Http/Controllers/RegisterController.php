<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterDolgozoRequest;
use App\Http\Requests\RegisterGazdiRequest;
use App\Http\Requests\RegisterOwnerRequest;
use App\Http\Requests\RegisterWorkerRequest;
use App\Models\Dolgozo;
use App\Models\Gazdi;
use App\Models\Owner;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(RegisterWorkerRequest $request){
        $data = $request->validated();

        $dolgozo = Worker::create($data);

        return response()->json([
            "data" => [
                "message" => "A(z) $dolgozo->email sikeresen regisztrált."
            ]
        ]);
    }

    public function storeOwner(RegisterOwnerRequest $request) {
        $data = $request->validated();

        $data['password'] = Hash::make($data['password']);

        $owner = Owner::create($data);

        return response()->json([
            "data" => [
                'message' => "A(z) {$owner->email} sikeresen regisztrált gazdaként."
            ]
        ]);
    }
}
