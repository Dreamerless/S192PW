<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('Home');});

Route::get('/Contactos', function () {return view('Contact');});

Route::get('/Form', function () { return view('Form'); }); 
