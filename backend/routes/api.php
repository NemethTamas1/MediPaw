<?php

use App\Http\Controllers\AllatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DolgozoController;
use App\Http\Controllers\GazdiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RendeloController;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Requests\RegisterGazdiRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;

// Nyílvános API resource végpontok
Route::apiResource("/allatok", AllatController::class);
Route::apiResource("/gazdik", GazdiController::class);
Route::apiResource("/rendelok", RendeloController::class);
Route::apiResource("/dolgozok", DolgozoController::class);

// Regisztráció és authentikáció
Route::post("/register/dolgozo", [RegisterController::class, "store"])->name("register.store");
Route::post('/register/gazdi', [RegisterController::class, "storeGazdi"])->name('register.registerGazdi');
Route::post("/authenticate", [AuthController::class, "authenticate"])->name("auth.authenticate");

// Szerepkör alapú védett útvonalak
Route::middleware(['auth:sanctum', RoleMiddleware::class . ':admin:orvos'])
    ->get('/doctor', fn() => response()->json(['message' => 'Doctor page']));

Route::middleware(['auth:sanctum', RoleMiddleware::class . ':admin:asszisztens'])
    ->get('/assistant', fn() => response()->json(['message' => 'Assistant page']));

Route::middleware(['auth:sanctum', RoleMiddleware::class . ':user:takarito'])
    ->get('/cleaner', fn() => response()->json(['message' => 'Cleaner page']));

Route::middleware(['auth:sanctum', RoleMiddleware::class . ':gazdi'])
    ->get('/gazdi/dashboard', fn() => response()->json(['message' => 'Gazdi page']));
