<?php

use App\Http\Controllers\AllatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DolgozoController;
use App\Http\Controllers\GazdiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RendeloController;
use App\Http\Requests\RegisterGazdiRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;

// API resource végpontok
Route::apiResource("/allatok", AllatController::class); 
Route::apiResource("/gazdik", GazdiController::class);
Route::apiResource("/rendelok", RendeloController::class);
Route::apiResource("/dolgozok", DolgozoController::class);

// Regisztráció
Route::post("/register/dolgozo", [RegisterController::class, "store"])->name("register.store");
Route::post('/register/gazdi', [RegisterController::class, "storeGazdi"])->name('register.registerGazdi');

// Autentikáció
Route::post("/authenticate/dolgozo", [AuthController::class, "authenticateDolgozo"]);
Route::post("/authenticate/gazdi", [AuthController::class, "authenticateGazdi"]);
