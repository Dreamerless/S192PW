@extends('layouts.plantilla1')
@section('titulo', 'Clientes Registrados')
@section('contenido')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <body>

        {{-- Inicia tarjetaCliente --}}
        <div class="container mt-5 col-md-8">

            @session('exito')
                <script>
                    Swal.fire({
                        title: "Actualizado Correctamente...",
                        text: '{{ $value }}',
                        icon: "success",
                    });
                </script>
            @endsession

            @foreach ($consultaClientes as $cliente)
                <div class="card text-justify font-monospace">
                    <div class="card-header fs-5 text-primary">
                        {{ $cliente->nombre }} {{ $cliente->apellido }}
                    </div>

                    <div class="card-body">
                        <h5 class="fw-bold"> {{ $cliente->correo }}</h5>
                        <h5 class="fw-medium"> {{ $cliente->telefono }}</h5>
                        <p class="card-text fw-lighter">{{ $cliente->id }}</p>
                    </div>

                    <div class="card-footer text-muted">
                        {{-- Botón Actualizar --}}
                        <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-warning btn-sm">
                            {{ __('Actualizar') }}
                        </a>

                        {{-- Botón Eliminar con Confirmación --}}
                        <form id="abajo{{ $cliente->id }}" action="{{ route('clientes.destroy', $cliente->id) }}"
                            method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-danger btn-sm" onclick="confirmardestoy({{ $cliente->id }})">
                                {{ __('Eliminar') }}
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach

            <script>
                function confirmardestoy(delete1) {
                    Swal.fire({
                        title: "¿Seguro que quieres borrar?",
                        showDenyButton: true,
                        showCancelButton: false,  // Mostrar el botón de cancelación
                        confirmButtonText: "Continuar",
                        denyButtonText: "Cancelar",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Si el usuario hace clic en "Continuar", enviamos el formulario
                            document.getElementById(`abajo${delete1}`).submit();
                        } else if (result.isDenied) {
                            // Si el usuario hace clic en "Cancelar", no hacemos nada
                            Swal.fire('Acción cancelada', '', 'info');
                        }
                    });
                }
            </script>
            

        </div> {{-- div container --}}

    </body>
@endsection
