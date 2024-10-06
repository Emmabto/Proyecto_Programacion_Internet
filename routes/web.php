<?php

use App\Http\Controllers\MascotaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::resource('mascota', MascotaController::class)->parameters(['mascota' => 'mascota']);