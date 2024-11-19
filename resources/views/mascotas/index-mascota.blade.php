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
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="bg-light rounded p-4 shadow">
                        <table class="table table-striped">
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
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mostrar lista de mascotas End -->

</x-layout>