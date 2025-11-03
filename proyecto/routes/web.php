<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlergiaController;
use App\Http\Controllers\DashboardController; // 👈 Ojo: D mayúscula

Route::get('/', function () {
    return view('welcome');
});

Route::get('/medico', function () {
    return view('medico');
});

Route::get('/dashboard', [DashboardController::class, 'index']); // 👈 así se llama al método index

Route::get('/alergia', [AlergiaController::class, 'index']);
