<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/medico', function () {
    return view('medico');
});

Route::get('/enfermera', function () {
    return view('enfermera');
});
