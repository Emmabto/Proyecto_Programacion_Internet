<x-layout>
    @section('title', 'Registrar Mascota')

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Registrar Mascotas</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Formulario de registro de mascotas -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <!-- Aquí va el formulario -->
                    <form action="{{ route('mascota.store') }}" method="POST" enctype='multipart/form-data' class="p-4 bg-light rounded shadow">
                        @csrf

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" name="nombre" id="nombre" class="form-control"
                                value="{{ old('nombre') }}" placeholder="Ingresa el nombre">
                            @error('nombre')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <label for="archivo">Imagen</label><br>
                        <input type="file" name="archivo" id="imagen" accept="image/*"><br>
                        @error('archivo')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label for="tipo" class="form-label">Tipo de animal:</label>
                            <select name="tipo" id="tipo" class="form-select">
                                <option value="" disabled selected>Seleccione un tipo</option>
                                <option value="Perro">Perro</option>
                                <option value="Gato">Gato</option>
                                <option value="Raton">Ratón</option>
                                <option value="Huron">Hurón</option>
                                <option value="Reptil">Reptil</option>
                                <option value="Tortuga">Tortuga</option>
                                <option value="Pez">Pez</option>
                            </select>
                            @error('tipo')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sexo:</label><br>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="macho" name="sexo" value="Macho" class="form-check-input" {{
                                    old('sexo')=='Macho' ? 'checked' : '' }}>
                                <label for="macho" class="form-check-label">Macho</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="hembra" name="sexo" value="Hembra" class="form-check-input" {{
                                    old('sexo')=='Hembra' ? 'checked' : '' }}>
                                <label for="hembra" class="form-check-label">Hembra</label>
                            </div>
                            @error('sexo')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="edad" class="form-label">Edad:</label>
                            <input type="text" name="edad" id="edad" class="form-control" value="{{ old('edad') }}"
                                placeholder="Ingresa la edad">
                            @error('edad')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="vacunas" class="form-label">Vacunas:</label>
                            <select name="vacunas[]" id="vacunas" class="form-select" multiple>
                                @foreach ($vacunas as $vacunas)
                                <option value="{{ $vacunas->id }}">
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
                            <textarea name="padecimientos" id="padecimientos" class="form-control" cols="30" rows="3"
                                placeholder="Lista de padecimientos">{{ old('padecimientos') }}</textarea>
                            @error('padecimientos')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Registrar Mascota</button>
                        </div>
                    </form>
                    <!-- Fin del formulario -->
                </div>
            </div>
        </div>
    </div>
    <!-- Formulario de registro de mascotas End -->


</x-layout>