<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Inicio</title>
    <style>
        body, html {
          height: 100%;
        }
        .full-height{
          height: 100vh;
        }
      </style>    
</head>

<body>
  <div class="d-flex flex-column justify-content-center align-items-center text-center full-height">
    <h1 class="display-1">¡Bienvenido Turista!</h1>
    <p>Presiona el botón para iniciar...</p>


    {{-- Ruta cruda -> utilizando el nombre de la vista, SIN SEGURIDAD! --}}
    {{-- <a href="/formulario" class="btn btn-danger"> Ir al registro </a> --}}

    {{-- Ruta por apodo SEGURA, EVITA INYECCIONES SQL <a href="{{route('rutaformulario')}}" class="btn btn-primary"> Ir al Registro </a> --}}
    <a href="{{route('rutaform')}}" class="btn btn-danger"> Ir al registro </a>

  </div>

</body>
</html>