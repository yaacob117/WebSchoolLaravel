<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\SuperheroController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\UniverseApiController;
use App\Http\Controllers\GenderApiController;
use App\Http\Controllers\SuperheroApiController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('universes', UniverseController::class);

Route::resource('superheroes', SuperheroController::class);

Route::resource('genders', GenderController::class);

Route::get('/apiuniverses', [UniverseApiController::class, 'index']);
Route::get('/apiuniverses/{name}', [UniverseApiController::class, 'show']);
Route::get('/apigenders', [GenderApiController::class, 'index']);
Route::get('/apigenders/{name}', [GenderApiController::class, 'show']);
Route::delete('/apiuniverses/{name}', [UniverseApiController::class, 'destroy']);
Route::delete('/apigenders/{name}', [GenderApiController::class, 'destroy']);
Route::get('/apisuperheroes', [SuperheroApiController::class, 'index']);
Route::get('/apisuperheroes/{name}', [SuperheroApiController::class, 'show']);
Route::delete('/apisuperheroes/{id}', [SuperheroApiController::class, 'destroy']);


require __DIR__.'/auth.php';
