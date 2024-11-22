<x-layout>
    @section('title', 'Inicio')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <!-- Carousel 1 -->
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('material/img/carousel-1.jpg') }}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Nuestra filosofía</h5>
                                <h1 class="display-3 text-white animated slideInDown">No solo rescatamos animales, creamos familias</h1>
                                <p class="fs-5 text-white mb-4 pb-2">La compasión comienza con una decisión: adoptar a un compañero leal.</p>
                                @guest
                                <a href="{{ route('login')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Iniciar sesión</a>
                                <a href="{{ route('register')}}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Registrarse</a>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel 2 -->
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="{{ asset('material/img/carousel-2.jpg') }}" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Nuestra filosofía</h5>
                                <h1 class="display-3 text-white animated slideInDown">Cada rescate es un nuevo comienzo</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Juntos, podemos hacer la diferencia salvando vidas.</p>
                                @guest
                                <a href="{{ route('login')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Iniciar sesión</a>
                                <a href="{{ route('register')}}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Registrarse</a>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('material/img/about-us.png') }}" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Quienes somos</h6>
                    <h1 class="mb-4">Bienvenidos a nuestro refugio</h1>
                    <p class="mb-4">Somos una organización caritativa, no lucrativa, encargada de cuidar de los animales más desafortunados mientras buscamos un hogar para ellos.</p><br>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Cuidamos de cientos de mascotas</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Ayudamos con mucho amor</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Tenemos varios refugios por el país</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Buscamos devolver sonrisas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Mascotas</h6>
                <h1 class="mb-5">Mascotas que cuidamos</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset('material/img/mascota-1.jpg') }}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 3px;">
                                    <h5 class="m-0">Perros</h5>
                                    <small class="text-primary">Más de 150</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset('material/img/mascota-2.jpg') }}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 3px;">
                                    <h5 class="m-0">Gatos</h5>
                                    <small class="text-primary">Más de 80</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="{{ asset('material/img/mascota-3.jpg') }}" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 3px;">
                                    <h5 class="m-0">Aves</h5>
                                    <small class="text-primary">Más de 50</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('material/img/mascota-4.jpg') }}" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  3px;">
                            <h5 class="m-0">Reptiles</h5>
                            <small class="text-primary">Y más animales</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Start -->



    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Personal</h6>
                <h1 class="mb-5">Nuestros cuidadores expertos</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('material/img/team-1.jpg') }}" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">César</h5>
                            <small>Cuidador de perros y gatos</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('material/img/team-2.jpg') }}" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Paula</h5>
                            <small>Cuidadora de aves</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('material/img/team-3.jpg') }}" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Rafael</h5>
                            <small>Cuidador de reptiles</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="{{ asset('material/img/team-4.jpg') }}" alt="">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Miriam</h5>
                            <small>Cuidadora general</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Reseñas</h6>
                <h1 class="mb-5">Personas que han adoptado</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('material/img/testimonial-1.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Ana</h5><br>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Cuando vi a Benji, mi hurón, no dudé en traerlo a casa. Ahora somos inseparables.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('material/img/testimonial-2.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Cris</h5><br>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Siempre he sido un amante de las aves, adoptarlas me ha hecho muy feliz.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('material/img/testimonial-3.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Marcos</h5><br>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">En este refugio adoptamos a nuestro perro Max y solo nos ha traído alegrías.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('material/img/testimonial-4.jpg') }}" style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Angélica</h5><br>
                    <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0">Ya he adoptado a tres preciosos gatos, estoy muy agradecida por tenerlos en mi vida.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    
</x-layout>