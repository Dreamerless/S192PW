<?php

namespace App\Http\Controllers;
use App\Http\Requests\validarCliente;


class VistaController extends Controller
{
    public function resgistrarCliente(validarCliente $peticionValidada){
        $cliente = $peticionValidada->input('txtcorreo');

        session()->flash('exito','libro'.$cliente.'Guardado');
        return redirect()->route('registrar');
    }
}
