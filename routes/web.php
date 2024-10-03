<?php

use App\Http\Controllers\MascotaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('mascota', MascotaController::class)->parameters(['mascota' => 'mascota']);