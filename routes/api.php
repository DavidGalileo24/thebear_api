<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\SeasonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test-mail', [CharacterController::class, 'testMail']);

Route::apiResource('/characters', CharacterController::class);

Route::apiResource('/seasons', SeasonController::class);
