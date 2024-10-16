<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <h1>Conversor MB a GB / GB a MB</h1>

    <form action="{{ route('calculadora.convert') }}" method="POST">
        @csrf
        <label for="value">Valor:</label>
        <input type="number" step="any" name="value" required>
        
        <br><br>
        
        <label for="conversion_type">Tipo de Conversión:</label>
        <select name="conversion_type" required>
            <option value="mb_to_gb">MB a GB</option>
            <option value="gb_to_mb">GB a MB</option>
        </select>
        
        <br><br>
        
        <button type="submit">Convertir</button>
    </form>

    @if(isset($resultText))
        <h2>Resultado:</h2>
        <p>{{ $resultText }}</p>
    @endif
</body>
</html>