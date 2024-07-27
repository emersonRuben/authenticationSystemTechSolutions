<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TechSolutions</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>
<body class="font-sans antialiased bg-light">
    <header class="bg-primary text-white py-3">
        <nav class="navbar navbar-expand-sm container navbar-light">
            <a class="navbar-brand text-white" href="#">TechSolutions</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="btn btn-outline-light me-2" href="{{ route('login') }}">Iniciar Sesión</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-outline-light" href="{{ route('register') }}">Registrarse</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </nav>
    </header>

    <main class="container my-5">
        <div class="text-center mb-4">
            <h1 class="display-4">Bienvenido a TechSolutions</h1>
            <p class="lead">Innovación en desarrollo de software para empresas y organizaciones.</p>
        </div>
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('img/softwareMedida.jpg') }}" class="card-img-top" alt="Feature 1">
                    <div class="card-body">
                        <h5 class="card-title">Desarrollo de Software a Medida</h5>
                        <p class="card-text">Creamos soluciones personalizadas para tus necesidades empresariales y organizacionales.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('img/appsMoviles.jpg') }}" class="card-img-top" alt="Feature 2">
                    <div class="card-body">
                        <h5 class="card-title">Aplicaciones Móviles</h5>
                        <p class="card-text">Desarrollamos aplicaciones móviles para plataformas iOS y Android, adaptadas a tu negocio.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset('img/consultoriaTI.jpg') }}" class="card-img-top" alt="Feature 3">
                    <div class="card-body">
                        <h5 class="card-title">Consultoría en TI</h5>
                        <p class="card-text">Ofrecemos asesoramiento experto para optimizar tus procesos tecnológicos y mejorar la eficiencia.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer bg-light text-center text-lg-start">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Grid row -->
            <div class="row">
                <!-- Grid column -->
                <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Sobre TechSolutions</h5>
                    <p>
                        En TechSolutions, nos especializamos en desarrollar soluciones de software innovadoras para empresas y organizaciones. Desde aplicaciones móviles hasta sistemas de gestión empresarial, transformamos tus ideas en realidades tecnológicas.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Enlaces Rápidos</h5>
                    <ul class="list-unstyled">
                        <li><a href="#!" class="text-dark">Inicio</a></li>
                        <li><a href="#!" class="text-dark">Servicios</a></li>
                        <li><a href="#!" class="text-dark">Portafolio</a></li>
                        <li><a href="#!" class="text-dark">Contacto</a></li>
                    </ul>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Contacto</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-house-door"></i> Avenida Ejemplo, 456, Ciudad</li>
                        <li><i class="bi bi-envelope"></i> contacto@techsolutions.com</li>
                        <li><i class="bi bi-phone"></i> +987 654 321</li>
                    </ul>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3 bg-dark text-light">
            © 2024 TechSolutions. Todos los derechos reservados.
        </div>
        <!-- Copyright -->
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
