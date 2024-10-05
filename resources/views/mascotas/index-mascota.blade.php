<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Índice de Mascotas</title>
</head>
<body>
    <h1>Mascotas</h1>

    <!-- <p>
        <a href="{{ route('mascota.create') }}">Registrar mascota</a>
    </p> -->

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Sexo</th>
                <th>Edad</th>
                <th>Vacunas</th>
                <th>Padecimientos</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mascotas as $mascota)
            <tr>
                <td>{{ $mascota->id }}</td>
                <td>
                    <a href="{{ route('mascota.show', $mascota) }}">
                        {{ $mascota->nombre }}
                    </a>
                </td>
                <td>{{ $mascota->tipo }}</td>
                <td>{{ $mascota->sexo }}</td>
                <td>{{ $mascota->edad }}</td>
                <td>{{ $mascota->vacunas }}</td>
                <td>{{ $mascota->padecimientos }}</td>
                <!-- <td>
                    <a href="{{ route('mascota.edit', $mascota) }}">Editar</a>
                </td> -->
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>