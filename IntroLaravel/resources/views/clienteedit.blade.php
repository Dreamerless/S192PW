@extends('layouts.plantilla1')
@section('titulo', 'Editar Cliente')
@section('contenido')

    {{-- Inicia Tarjeta con formulario --}}
    <div class="container mt-5 col-md-6">



        {{-- Tarjeta con formulario --}}
        <div class="card font-monospace">

            <div class="card-header fs-5 text-center text-primary">
                {{ __('Editar Cliente') }}
            </div>

            <div class="card-body text-justify">

                {{-- Formulario para actualizar cliente --}}
                <form action="{{ route('cliente.update', ['id' => $cliente->id]) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- Especifica que el método es PUT -->

                    <div class="mb-3">
                        <label for="nombre" class="form-label">{{ __('Nombre:') }} </label>
                        <input type="text" class="form-control" name="txtnombre" value="{{ $cliente->nombre }}">
                        <small class="fst-italic text-danger">{{ $errors->first('txtnombre') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="Apellido" class="form-label">{{ __('Apellido:') }} </label>
                        <input type="text" class="form-control" name="txtapellido" value="{{ $cliente->apellido }}">
                        <small class="fst-italic text-danger">{{ $errors->first('txtapellido') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">{{ __('Correo:') }} </label>
                        <input type="text" class="form-control" name="txtcorreo" value="{{ $cliente->correo }}">
                        <small class="fst-italic text-danger">{{ $errors->first('txtcorreo') }}</small>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">{{ __('Telefono:') }} </label>
                        <input type="text" class="form-control" name="txttelefono" value="{{ $cliente->telefono }}">
                        <small class="fst-italic text-danger">{{ $errors->first('txttelefono') }}</small>
                    </div>

                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>


            </div>
        </div>
    </div> {{-- Div container --}}
    {{-- Finaliza Tarjeta con formulario --}}

@endsection
