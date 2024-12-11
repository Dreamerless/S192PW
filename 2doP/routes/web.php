<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VistaController;

Route::get('/', function () {return view('formUsuarios');});

Route::post('/registrarCliente', [VistaController::class, 'registrarCliente'])->name('registrar');