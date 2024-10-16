<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function repaso(){
        return view('repaso1');
    }
}
