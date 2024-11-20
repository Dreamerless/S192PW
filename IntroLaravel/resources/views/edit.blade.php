@extends('layouts.plantilla1')
@section('titulo', 'Editar Cliente')
@section('contenido')

{{-- Inicia Tarjeta con formulario --}}
<div class="container mt-5 col-md-6">

    {{-- Mensajes de éxito --}}
    @if (session('exito'))
        <x-Alert tipo="info"> {{ session('exito') }} </x-Alert>
    @endif

    @session('exito')
        <x-Alert tipo="success"> {{ $value }} </x-Alert>
    @endsession

    @session('exito')
        <script>
            Swal.fire({
                title: "Respuesta del servidor!",
                text: '{{ $value }}',
                icon: "success"
            });
        </script>
    @endsession

    {{-- Tarjeta con formulario --}}
    <div class="card font-monospace">

        <div class="card-header fs-5 text-center text-primary">
            {{ __('Editar Cliente') }}
        </div>

        <div class="card-body text-justify">

            {{-- Formulario para actualizar cliente --}}
            <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">

                @csrf
                @method('PUT')

                {{-- Campo Nombre --}}
                <div class="mb-3">
                    <label for="nombre" class="form-label">{{ __('Nombre:') }} </label>
                    <input type="text" class="form-control" name="txtnombre" value="{{ old('txtnombre', $cliente->nombre) }}">
                    <small class="fst-italic text-danger">{{ $errors->first('txtnombre') }}</small>
                </div>

                {{-- Campo Apellido --}}
                <div class="mb-3">
                    <label for="Apellido" class="form-label">{{ __('Apellido:') }} </label>
                    <input type="text" class="form-control" name="txtapellido" value="{{ old('txtapellido', $cliente->apellido) }}">
                    <small class="fst-italic text-danger">{{ $errors->first('txtapellido') }}</small>
                </div>

                {{-- Campo Correo --}}
                <div class="mb-3">
                    <label for="correo" class="form-label">{{ __('Correo:') }} </label>
                    <input type="text" class="form-control" name="txtcorreo" value="{{ old('txtcorreo', $cliente->correo) }}">
                    <small class="fst-italic text-danger">{{ $errors->first('txtcorreo') }}</small>
                </div>

                {{-- Campo Teléfono --}}
                <div class="mb-3">
                    <label for="telefono" class="form-label">{{ __('Teléfono:') }} </label>
                    <input type="text" class="form-control" name="txttelefono" value="{{ old('txttelefono', $cliente->telefono) }}">
                    <small class="fst-italic text-danger">{{ $errors->first('txttelefono') }}</small>
                </div>

        </div>

        {{-- Botón Actualizar --}}
        <div class="card-footer text-muted">
            <div class="d-grid gap-2 mt-2 mb-1">
                <button type="submit" class="btn btn-success btn-sm"> {{ __('Actualizar Cliente') }} </button>
            </div>
            </form>
        </div>
    </div>
</div> {{-- Div container --}}
{{-- Finaliza Tarjeta con formulario --}}

@endsection
