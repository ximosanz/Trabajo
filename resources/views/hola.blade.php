<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>
</head>
<body>
    <h1>Primera vista en laravel</h1>
    <p>{{ $saludo }}</p>
    <ul>
    <h3>Array</h3>
    @forelse($sal as $s)

    <li>
        {{ $s }}
    </li>

    @empty
    No hay saludo:-(
        @endforelse
    </ul>
</body>
</html>