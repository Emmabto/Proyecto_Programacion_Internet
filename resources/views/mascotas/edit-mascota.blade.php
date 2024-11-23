<x-layout>
    @section('title', 'Editar Mascota')

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Editar Mascota</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Editar Mascota Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-light rounded p-4 shadow">
                        <form action="{{ route('mascota.update',  $mascota) }}" method="POST">
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
            <option value="Pez" @selected($mascota->tipo == 'Pez')>Pez</option>
        </select>

        <label for="sexo">Sexo:</label><br> 

        <label for="macho">Macho</label>
        <input type="radio" id="macho" name="sexo" value="{{old('macho') ?? $mascota->sexo }}"><br>

        <label for="hembra">Hembra</label>
        <input type="radio" id="hembra" name="sexo" value="{{old('hembra') ?? $mascota->sexo }}"><br>

                            <div class="mb-3">
                                <label for="edad" class="form-label">Edad:</label>
                                <input type="text" name="edad" id="edad" class="form-control"
                                    value="{{ old('edad') ?? $mascota->edad }}">
                                @error('edad')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="vacunas" class="form-label">Vacunas:</label>
                                <select name="vacunas[]" id="vacunas" class="form-select" multiple>
                                @foreach ($vacunas as $vacunas)
                                <option @selected(in_array($vacunas->id, $mascota->vacunas()->pluck('vacunas.id')->toArray())) value="{{ $vacunas->id }}">
                                    {{ $vacunas->vacunas }}
                                </option>
                                @endforeach
                            </select>
                                @error('vacunas')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="padecimientos" class="form-label">Padecimientos:</label>
                                <textarea name="padecimientos" id="padecimientos" class="form-control" cols="30" rows="4">{{ old('padecimientos') ?? $mascota->padecimientos }}</textarea>
                                @error('padecimientos')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Editar Mascota End -->

</x-layout>