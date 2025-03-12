<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\UniverseController;


Route::get('/', function () {


    return view('welcome');
});
    
Route::get('/gender', [GenderController::class, 'index']);
// Route::get('/universe', [UniverseController::class, 'index']);

Route::resource('universe', UniverseController::class);