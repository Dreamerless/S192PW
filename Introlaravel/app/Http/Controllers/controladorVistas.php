<?php

namespace App\Http\Controllers;

use App\Http\Requests\validadorClientes;
use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function component(){
        return view('componentes');
    }

    public function procesarCliente(validadorClientes $peticionValidada){

        //return 'La información del cliente llegó al controlador';

        //Devuelve todo lo que contiene la petición
        //return $peticion->all();

        //Envía la ruta desde donde se hizo la petición
        //return $peticion->path(); 

        //Devulve la URL completa desde donde se hizo la petición
        //return $peticion->url(); 

        //Devuelve la ip desde dónde se hizo la petición
        //return $peticion->ip();
        
        //return $peticion->ip();

        // respuestas de redirección

        //return redirect('/')
        //return redirect()->route('rutaclientes');

        //Redirección añ origen
        //return back();

        //Redirección con valores en session

        //$validate=$peticion->validate([

        //]);

        $usuario = $peticionValidada->input('txtnombre');
        
        session()->Flash('exito','Se guardó el usuario '.$usuario);
        return to_route('rutaform');
    }
}