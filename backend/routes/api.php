<?php

use App\Http\Controllers\AllatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DolgozoController;
use App\Http\Controllers\GazdiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RendeloController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;

// API resource végpontok
Route::apiResource("/allatok", AllatController::class); 
Route::apiResource("/gazdik", GazdiController::class);
Route::apiResource("/rendelok", RendeloController::class);
Route::apiResource("/dolgozok", DolgozoController::class);

// Regisztráció és authentikáció
Route::post("/register", [RegisterController::class, "store"])->name("register.store");
Route::post("/authenticate", [AuthController::class, "authenticate"])->name("auth.authenticate");

// Védett utak
Route::middleware(['auth:sanctum'])->group(function () { 

    // Doctor route
    Route::get('/doctor/', function() {
        if (Gate::allows('isDoctor', Auth::user())) {
            return response()->json(['message' => 'Doctor page'], 200);
        }

        return response()->json(['message' => 'Unauthorized'], 403);
    });

    // Assistant route
    Route::get('/assistant/', function() {
        if (Gate::allows('isAssistant', Auth::user()) && !Gate::allows('isDoctor', Auth::user())) {
            return response()->json(['message' => 'Assistant page'], 200);
        }
        return response()->json(['message' => 'Unauthorized'], 403);
    });

    // Cleaner route
    Route::get('/cleaner/', function() {
        if (Gate::allows('isCleaner', Auth::user())) {
            return response()->json(['message' => 'Cleaner page'], 200);
        }

        return response()->json(['message' => 'Unauthorized'], 403);
    });
});
