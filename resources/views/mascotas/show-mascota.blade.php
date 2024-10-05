<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar mascota</title>
</head>
<body>
<h1>{{ $mascota->nombre }}</h1>
    <p>
        {{ $mascota->tipo }}
        {{ $mascota->sexo }}
        {{ $mascota->edad }}
        {{ $mascota->vacunas }}
        {{ $mascota->padecimientos }}
    </p>
    
    <!-- <a href="{{ route('mascota.edit', $mascota) }}">Editar</a><br>

    <form action="{{ route('mascota.destroy', $mascota) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Borrar"> -->
    </form>
    
</body>
</html>