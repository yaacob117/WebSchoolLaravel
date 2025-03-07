<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gender', [GenderController::class, 'index']);