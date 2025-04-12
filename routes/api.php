<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniverseApiController;
use App\Http\Controllers\GenderApiController;
use App\Http\Controllers\SuperheroApiController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/apiuniverses', [UniverseApiController::class, 'index']);
Route::get('/apiuniverses/{name}', [UniverseApiController::class, 'show']);
Route::delete('/apiuniverses/{name}', [UniverseApiController::class, 'destroy']);


Route::get('/apigenders', [GenderApiController::class, 'index']);
Route::get('/apigenders/{name}', [GenderApiController::class, 'show']);
Route::delete('/apigenders/{name}', [GenderApiController::class, 'destroy']);



Route::get('/apisuperheroes', [SuperheroApiController::class, 'index']);
Route::get('/apisuperheroes/{name}', [SuperheroApiController::class, 'show']);
Route::delete('/apisuperheroes/{id}', [SuperheroApiController::class, 'destroy']);