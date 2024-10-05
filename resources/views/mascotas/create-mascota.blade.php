<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Mascotas</title>
</head>
<body>
    <h1>Registrar Mascota</h1>

    <form action="{{ route('mascota.store') }}" method="POST">
        @csrf

        <label for="nombre">Nombre:</label><br>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"><br>

        <label for="tipo">Tipo de animal:</label><br>
        
        <!-- <select name="tipo" id="tipo" value="{{ old('tipo') }}"> -->
        <select name="tipo" id="tipo">
            <option value="Perro">Perro</option>
            <option value="Gato">Gato</option>
            <option value="Raton">Ratón</option>
            <option value="Huron">Hurón</option>
            <option value="Reptil">Reptil</option>
            <option value="Tortuga">Tortuga</option>
            <option value="Pez">Pez</option>
        </select>
       

        <label for="sexo">Sexo:</label><br> 

        <label for="macho">Macho</label>
        <input type="radio" id="macho" name="sexo" value="{{old('macho') }}"><br>

        <label for="Hembra">Hembra</label>
        <input type="radio" id="Hembra" name="sexo" value="{{old('Hembra') }}"><br>

        <label for="edad">Edad:</label><br>
        <input type="text" name="edad" id="edad" value="{{ old('edad') }}"><br>

        <label for="vacunas">Vacunas:</label><br>
        <textarea name="vacunas" id="vacunas" cols="30" rows="4">{{ old('vacunas') }}</textarea><br>

        <label for="padecimientos">Padecimientos:</label><br>
        <textarea name="padecimientos" id="padecimientos" cols="30" rows="4">{{ old('padecimientos') }}</textarea><br>

        <input type="submit" value="Enviar">
    </form>
    
</body>
</html>