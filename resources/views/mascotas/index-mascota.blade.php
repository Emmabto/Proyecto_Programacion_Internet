<x-layout>
    @section('title', 'Índice de Mascotas')

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Lista de Mascotas</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Mostrar lista de mascotas -->
    <div class="container py-5">
        <div class="row">
            @foreach ($mascotas as $mascota)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <!-- Imagen de la mascota -->
                    @if ($mascota->archivos()->exists())
                    <img src="{{ asset('storage/' . $mascota->archivos->first()->ruta) }}" class="card-img-top" alt="Imagen de la mascota" style="object-fit: contain; width: 100%; height: 200px;">
                    @else
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Imagen de la mascota" style="object-fit: contain; width: 100%; height: 200px;">
                    @endif
                    <div class="card-body d-flex flex-column">
                        <!-- Nombre de la mascota -->
                        <h5 class="card-title">{{ $mascota->nombre }}</h5>
                        <!-- Información adicional -->
                        <p class="card-text flex-grow-1">
                            <strong>Sexo:</strong> {{ $mascota->sexo }}<br>
                            <strong>Edad:</strong> {{ $mascota->edad }}<br>
                            <strong>Usuario:</strong> {{ $mascota->user->name }}
                        </p>
                        <!-- Botón para ver detalles -->
                        <a href="{{ route('mascota.show', $mascota) }}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Mostrar lista de mascotas End -->

</x-layout>