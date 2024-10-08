<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Ruta de tipo GET
// Route::get('/', function () {
//     return view('welcome');
// });

// Ruta de tipo vista
Route::view('/', 'inicio')->name('rutainicio');

Route::view('/formulario', 'formulario')->name('rutaform');

Route::view('/clientes', 'clientes')->name('rutaclientes');

