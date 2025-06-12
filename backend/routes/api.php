<?php
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClinicController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Route;

// Nyílvános API resource végpontok
Route::apiResource("/animals", AnimalController::class);
Route::apiResource("/owners", OwnerController::class);
Route::apiResource("/clinics", ClinicController::class);
Route::apiResource("/users", UserController::class);

// Regisztráció és authentikáció
Route::post("/register/worker", [RegisterController::class, "store"])->name("register.store");
Route::post('/register/owner', [RegisterController::class, "storeOwner"])->name('register.registerOwner');
Route::post("/authenticate", [AuthController::class, "authenticate"])->name("auth.authenticate");
