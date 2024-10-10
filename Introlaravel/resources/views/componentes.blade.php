@extends('layouts.plantilla1')

@section('titulo','Registrarse')

@section('contenido')
    


    <x-Card encabezado="Componente" titulo="Dinamico" textoBoton="Enviar"> 
        Soy el texto de el primer componente 
    </x-Card>

    <x-Card encabezado="Componente2" titulo="Dinamico2" textoBoton="No Enviar"> 
        Soy el texto de el Segundo componente
    </x-Card>

    <x-Alert tipo="success"> </x-Alert>
    <x-Alert tipo="primary"> </x-Alert>
    <x-Alert tipo="danger"> </x-Alert>
    @endsection