<?php

use Illuminate\Support\Facades\Route;
USE App\Http\Controllers\controladorVistas;


Route::get('/', [ControladorVistas::class, 'home'])->name('inicio');

Route::get('/form', [ControladorVistas::class, 'formulario'])->name('formulario');

Route::get('/clientes', [ControladorVistas::class, 'consulta'])->name('clientes');

Route::view('componentes','componentes')->name('componentes');

Route::post('/enviarCliente', [controladorVistas::class, 'procesarCliente'])->name('rutaEnviar');




// Ruta de tipo GET
// Route::get('/', function () {
//     return view('welcome');
// });

/* // Ruta de tipo vista
Route::view('/', 'inicio')->name('inicio');

Route::view('/formulario', 'formulario')->name('formulario');

Route::view('/clientes', 'clientes')->name('clientes');

 */