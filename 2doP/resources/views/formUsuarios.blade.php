<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro de Usuarios</title>
    <!-- Integración de recursos de Vite -->
    @vite(['resources/app.js'])
    <!-- SweetAlert2 desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Bootstrap (opcional si usas estilos propios, puedes omitirlo) -->
    
</head>
<body>
    <h1 class="text-center text-primary mt-5 mb-4">Registro de usuarios</h1>

    <div class="container col-md-4">
        <form>
            <div class="mb-3">
                <label class="form-label">Correo:</label>
                <input type="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Contraseña:</label>
                <input type="password" class="form-control" required>
            </div>                
            <div class="mb-3">
                <label class="form-label">Edad:</label>
                <input type="number" class="form-control" required>
            </div>
            <!-- Botón con id -->
            <button id="guardar-usuario" type="button" class="btn btn-danger">Guardar Usuario</button>
        </form>
    </div>

    <script>
        // Vincular el evento click al botón
        document.getElementById('guardar-usuario').addEventListener('click', function () {
            Swal.fire({
                title: '¡Usuario Guardado!',
                text: 'El usuario se ha guardado exitosamente.',
                icon: 'success',
                confirmButtonText: 'Aceptar'
            });
        });
    </script>
</body>
</html>
