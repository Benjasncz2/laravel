<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/medico', function () {
    return view('medico');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
