<?php

use App\Http\Controllers\AllatController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GazdiController;
use App\Http\Controllers\RegisterController;
use App\Http\Requests\RegisterUserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::apiResource("/allatok", AllatController::class);//->middleware("auth:sanctum");
Route::apiResource("/gazdik", GazdiController::class);


Route::post("/register", [RegisterController::class, "store"])->name("register.store");
Route::post("/authenticate", [AuthController::class, "authenticate"])->name("auth.authenticate");

