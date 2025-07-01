<?php

use App\Http\Controllers\ArtistController;
use App\Http\Controllers\MerchController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//Route::apiResource("/users", UserController::class);

Route::apiResource("/merches", MerchController::class);
Route::apiResource("/artists", ArtistController::class);
Route::apiResource("/musics", MusicController::class);

