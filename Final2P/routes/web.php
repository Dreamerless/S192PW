<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Requests\validadorFormulario;

Route::get('/', [controladorVistas::class, 'Home'])->name('inicio');
Route::get('/formularioContacto', [controladorVistas::class, 'formularioContacto'])->name('formContacto');
Route::get('/listadoContactos', [controladorVistas::class, 'listadoContactos'])->name('listContacto');


Route::post('/formEnviar', [controladorVistas::class, 'procesarCLiente'])->name('formEnviar');
