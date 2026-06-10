<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/a', function () {
    return view('home.index');
});

use App\Http\Controllers\RegistroController;

Route::get('/registro', [RegistroController::class, 'index'])
    ->name('registro');

Route::get('/index', [RegistroController::class, 'registro'])
    ->name('index');

Route::post('/registro', [RegistroController::class, 'store'])
    ->name('registro.guardar');