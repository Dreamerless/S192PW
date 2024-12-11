<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorFormulario;
use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function Home(){
        return view('homeContacto');
    }

    public function formularioContacto(){
        return view('formContacto');  
    }

    public function listadoContactos(){
        return view('listContacto');
    }


    public function procesarCliente(validadorFormulario $peticionValidada){

        // Redireción con valores en session
        $usuario = $peticionValidada->input('nombre');
    
        return to_route('formContacto');
       }

}

