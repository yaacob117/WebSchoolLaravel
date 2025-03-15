<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\SuperheroController;

Route::get('/', function () {


    return view('welcome');
});
    

Route::resource('universe', UniverseController::class);
Route::resource('superhero', SuperheroController::class);
Route::resource('gender', GenderController::class);