<?php

use App\Http\Controllers\controladorVistas;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controller;
use App\Http\Controllers\RepasoController;


route::get('/',[controladorVistas::class, 'home'])->name('inicio');

route::get('/repaso1',[controladorVistas::class, 'repaso'])->name('rep');

Route::post('/convertir', [RepasoController::class, 'convert'])->name('calculadora.convert');


