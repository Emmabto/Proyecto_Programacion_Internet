<?php

use App\Http\Controllers\MascotaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('mascota', MascotaController::class)->parameters(['mascota' => 'mascota'])->middleware('auth');
//Route::resource('mascota', MascotaController::class)->parameters(['mascota' => 'mascota']); Por ver si se mantiene así
