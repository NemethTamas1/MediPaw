<?php

use App\Http\Controllers\AllatController;
use App\Http\Controllers\GazdiController;
use App\Http\Controllers\TartozkodikController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::apiResource("/allatok", AllatController::class);
Route::apiResource("/gazdik", GazdiController::class);
Route::apiResource("/tartozkodik", TartozkodikController::class);