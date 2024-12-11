@extends('layouts.plantilla1')


@section('title', 'Gestión de Productos')

@section('content')

    <div class="container">

        <h1 class="display-1 text-prmiary text-center">Contactos </h1>

    
        <form action="/formEnviar" method="POST">
            @csrf
            <div  class="mb-3" >
                <label for="nombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="{{ old('nombre') }}">
                <small class="first-italic text-danger">{{ $errors->first('nombre') }}</small>
            </div>
    
            <div  class="mb-3" >
                <label for="correo" class="form-label" >Correo:</label>
                <input type="text" class="form-control" name="correo" value="{{ old('correo') }}">
                <small class="first-italic text-danger">{{ $errors->first('correo') }}</small>
            </div>
    
            <div class="mb-3" >
                <label for="telefono" class="form-label" >Telefono:</label>
                <input type="text" class="form-control" name="telefono" value="{{ old('telefono') }}">
                <small class="first-italic text-danger">{{ $errors->first('telefono') }}</small>
            </div>
    
            <button type="submit" class="btn btn-danger">Agregar Contacto</button>
        </form>
    
    </div>
    


@endsection