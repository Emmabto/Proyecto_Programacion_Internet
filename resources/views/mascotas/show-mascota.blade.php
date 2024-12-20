<x-layout>
    @section('title', 'Mostrar Mascota')

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Mostrar mascota</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Mostrar detalles de la mascota -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="bg-light rounded p-4 shadow">
                        <h2 class="mb-3">Detalles de la Mascota</h2>

                        <hr>
                        @foreach ($mascota->archivos as $archivo)
                        <img src="{{ asset('/storage/'.$archivo->ruta) }}" alt="prueba" width="400">
                        @endforeach
                        @foreach ($mascota->archivos as $archivo)
                        <li>
                            <a href="{{ route('descargar', $archivo) }}">
                                Descargar imagen
                            </a>
                        </li>
                        @endforeach

                        <hr>

                        <p><strong>Nombre:</strong> {{ $mascota->nombre }}</p>
                        <p><strong>Tipo de animal:</strong> {{ $mascota->tipo }}</p>
                        <p><strong>Sexo:</strong> {{ $mascota->sexo }}</p>
                        <p><strong>Edad:</strong> {{ $mascota->edad }} años</p>
                        <p><strong>Vacunas:</strong>
                            @foreach($mascota->vacunas as $vacunas)
                            {{ $vacunas->vacunas }},
                            @endforeach
                        </p>
                        <p><strong>Padecimientos:</strong> {{ $mascota->padecimientos }}</p>
                        <div class="d-flex justify-content-center mt-4">
                            @can('update', $mascota)
                            <a href="{{ route('mascota.edit', $mascota) }}" class="btn btn-warning me-2">Editar</a>
                            @endcan

                            @if ($mascota->user_id === auth()->id())
                            <form action="{{ route('mascota.destroy', $mascota) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Borrar</button>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mostrar detalles de la mascota End -->

</x-layout>