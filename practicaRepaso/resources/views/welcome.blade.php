<!DOCTYPE html>
<html lang="en">
<head>

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Cover Template for Bootstrap</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link href="cover.css" rel="stylesheet">

    @vite(['resources/js/app.js'])

    <title>Document</title>
</head>
<body>
    <body class="text-center">

        <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
          <header class="masthead mb-auto">
            <div class="inner">
              <h3 class="masthead-brand">Repaso</h3>
              <nav class="nav nav-masthead justify-content-center">
                <a class="nav-link active" href="#">IS192</a>
                <a class="nav-link" href="#">122043750</a>
                <a class="nav-link" href="#">Maximiliano Aosta Gonzalez </a>
              </nav>
            </div>
          </header>
    
          <main role="main" class="inner cover">
            <h1 class="cover-heading">Universidad Politecnica de Queretaro.</h1>
            <img src="{{asset('images/upq_logo.png')}}"alt="upq_logo"white="250"
            <br>
            <p class="lead">Ingeniería en Sistemas Computacionales  </p>
            <p class="lead">
              <a href="{{route('rep')}}" class="btn btn-lg btn-secondary">Repaso</a>
            </p>
          </main>
    
          <footer class="mastfoot mt-auto">
            <div class="inner">
              <p> <a href=" "> </a> <a href=" "> </a> </p>
            </div>
          </footer>
        </div>

</body>
</html>