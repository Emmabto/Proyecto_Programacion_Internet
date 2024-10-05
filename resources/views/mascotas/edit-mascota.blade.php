<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar registro de Mascotas</title>
</head>
<body>
    <h1>Editar Mascota</h1>

    <form action="{{ route('mascota.update') }}" method="POST">
        @csrf
        @method('PATCH')

        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') ?? $mascota->nombre }}"><br>

        <label for="tipo">Tipo de animal:</label><br>
        <select name="tipo" id="tipo">
            <option value="Perro" @selected($mascota->tipo == 'Perro')>Perro</option>
            <option value="Gato" @selected($mascota->tipo == 'Gato')>Gato</option>
            <option value="Raton" @selected($mascota->tipo == 'Raton')>Ratón</option>
            <option value="Huron" @selected($mascota->tipo == 'Huron')>Hurón</option>
            <option value="Reptil" @selected($mascota->tipo == 'Reptil')>Reptil</option>
            <option value="Tortuga" @selected($mascota->tipo == 'Tortuga')>Tortuga</option>
            <option value="Pez" @selected($mascota->tipo == 'Pez')>Pez</option>
        </select>

        <label for="sexo">Sexo:</label><br> 

        <label for="macho">Macho</label>
        <input type="radio" id="macho" name="sexo" value="{{old('macho') ?? $mascota->sexo }}"><br>

        <!-- no se si en los radiobutton también se ponga ?? $mascota->nombre  -->

        <label for="hembra">Hembra</label>
        <input type="radio" id="hembra" name="sexo" value="{{old('hembra') ?? $mascota->sexo }}"><br>

        <label for="edad">Edad:</label><br>
        <input type="text" name="edad" id="edad" value="{{ old('edad') ?? $mascota->edad }}"><br>

        <label for="vacunas">Vacunas:</label><br>
        <textarea name="vacunas" id="vacunas" cols="30" rows="4">{{ old('vacunas') ?? $mascota->vacunas }}</textarea><br>

        <label for="padecimientos">Padecimientos:</label><br>
        <textarea name="padecimientos" id="padecimientos" cols="30" rows="4">{{ old('padecimientos') ?? $mascota->padecimientos }}</textarea><br>

        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>