@extends('layouts.plantilla1')

@section('titulo','Componenetes')

@section('contenido')

<x-Card encabezado="Componenete" titulo="Dinámico" textoBoton="Enviar"> 
    Soy un texto 1
</x-Cardx>

<x-Card encabezado="Componenete2" titulo="Dinámico2" textoBoton="Enviar2">
    Soy un texto 2
</x-Cardx>


<x-Alert tipo="alert-success">Verde</x-Alert>
<x-Alert tipo="alert-primary">Azul</x-Alert>
<x-Alert tipo="alert-danger">Rojo</x-Alert>

@endsection