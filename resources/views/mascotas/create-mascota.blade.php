<!-- TERMINADO-->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Refugio de animales</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('material/img/huella.png') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('material/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('material/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('material/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('material/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{ route('home')}}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-paw me-3"></i>Refugio de mascotas</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('home')}}" class="nav-item nav-link">Inicio</a>
                <a href="{{ route('mascota.create')}}" class="nav-item nav-link">Registrar una mascota</a>
                <a href="{{ route('mascota.index')}}" class="nav-item nav-link">Ver Mascotas</a>
            </div>
            <a href="{{ route('register')}}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">REGISTRATE<i
                    class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


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
                    <form action="{{ route('mascota.store') }}" method="POST" class="p-4 bg-light rounded shadow">
                        @csrf

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" name="nombre" id="nombre" class="form-control"
                                value="{{ old('nombre') }}" placeholder="Ingresa el nombre">
                            @error('nombre')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

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
                            <textarea name="vacunas" id="vacunas" class="form-control" cols="30" rows="3"
                                placeholder="Lista de vacunas">{{ old('vacunas') }}</textarea>
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


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Enlaces frecuentes</h4>
                    <!-- Estos enlaces son temporales, seguramente cambien -->
                    <a class="btn btn-link" href="{{ route('mascota.create')}}">Registrar una mascota</a>
                    <a class="btn btn-link" href="{{ route('mascota.index')}}">Ver mascotas</a>
                    <a class="btn btn-link" href="{{ route('login')}}">Iniciar sesión</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contacto</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Blvd. Gral. Marcelino García Barragán 1421, Olímpica, 44430 Guadalajara, Jal.</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+52 33 123 0809</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>refugiocontacto@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <h4 class="text-white mb-3">Galería</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('material/img/galería-1.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('material/img/galería-2.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('material/img/galería-3.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('material/img/galería-4.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('material/img/galería-5.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('material/img/galería-6.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Refugio de mascotas</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a><br><br>
                        Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('material/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('material/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('material/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('material/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('material/js/main.js') }}"></script>
</body>

</html>