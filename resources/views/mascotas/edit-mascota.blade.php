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
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="bg-light rounded p-4 shadow">
                        <form action="{{ route('mascota.update',  $mascota) }}" method="POST">
                            @csrf
                            @method('PATCH')

                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre:</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre') ?? $mascota->nombre }}">
                                @error('nombre')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="tipo" class="form-label">Tipo de animal:</label>
                                <select name="tipo" id="tipo" class="form-select">
                                    <option value="Perro" @selected($mascota->tipo == 'Perro')>Perro</option>
                                    <option value="Gato" @selected($mascota->tipo == 'Gato')>Gato</option>
                                    <option value="Raton" @selected($mascota->tipo == 'Raton')>Ratón</option>
                                    <option value="Huron" @selected($mascota->tipo == 'Huron')>Hurón</option>
                                    <option value="Reptil" @selected($mascota->tipo == 'Reptil')>Reptil</option>
                                    <option value="Pez" @selected($mascota->tipo == 'Pez')>Pez</option>
                                </select>
                                @error('tipo')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="sexo">Sexo:</label><br> 
                                <div class="form-check form-check-inline">
                                <input type="radio" id="macho" name="sexo" class="form-check-input" value="Macho" 
                                    {{ old('sexo', $mascota->sexo) == 'Macho' ? 'checked' : '' }}>
                                <label for="macho" class="form-check-label">Macho</label>
                                </div>
                                
                                <div class="form-check form-check-inline">
                                <input type="radio" id="hembra" name="sexo" class="form-check-input" value="Hembra" 
                                    {{ old('sexo', $mascota->sexo) == 'Hembra' ? 'checked' : '' }}>
                                <label for="hembra" class="form-check-label">Hembra</label>
                                </div>
                                @error('sexo')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

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