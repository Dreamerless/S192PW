@extends('layouts.plantilla1')
@section('titulo', 'Clientes Registrados')
@section('contenido')

@extends('layouts.plantilla1')
@section('titulo', 'Clientes Registrados')
@section('contenido')

<body>
    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">

        @foreach ($consultaClientes as $cliente)
            <div class="card text-justify font-monospace">
                <div class="card-header fs-5 text-primary">
                    {{ $cliente->nombre }} {{ $cliente->apellido }}
                </div>

                <div class="card-body">
                    <h5 class="fw-bold"> {{ $cliente->correo }}</h5>
                    <h5 class="fw-medium"> {{ $cliente->telefono }}</h5>
                    <p class="card-text fw-lighter"></p>
                </div>

                <div class="card-footer text-muted">
                    {{-- Botón Actualizar --}}
                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning btn-sm">
                        {{ __('Actualizar') }}
                    </a>

                    {{-- Botón Eliminar con Confirmación --}}
                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST" class="d-inline"
                        onsubmit="return confirm('¿Estás seguro de que deseas eliminar este cliente?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            {{ __('Eliminar') }}
                        </button>
                    </form>
                </div>
            </div>
        @endforeach

        {{-- Finaliza tarjeta Cliente --}}
    </div> {{-- divcontainer --}}
</body>
@endsection

@endsection

</html>