<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Tecnologia Sureña</title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body class="bg-light">

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">

            <!-- Nombre de la página -->
            <a class="navbar-brand fw-bold" href="#">
                💻Tecnologia Sureña🖱️
            </a>

            <!-- Botón para dispositivos móviles -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuPrincipal"
                aria-controls="menuPrincipal"
                aria-expanded="false"
                aria-label="Mostrar menú"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Opciones del menú -->
            <div
                class="collapse navbar-collapse"
                id="menuPrincipal"
            >
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="#inicio">
                            Home 
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#productos">
                            Productos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#nosotros">
                            Nosotros
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">
                            Contacto
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- Sección de bienvenida -->
    <header
        id="inicio"
        class="bg-dark text-white py-5"
    >
        <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.elespectador.com/resizer/kleLiMLR6HJxMOXEbBDvoRAJ6bQ=/arc-anglerfish-arc2-prod-elespectador/public/MLK7W37IHFECFCJ6HVW4ZT2LAI.jpg" width="100"   class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>COMPUTADORES ULTIMA TECNOLOGIA</h5>
        <p>Distribuidores directos</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.digittecnic.com/wp-content/uploads/2024/10/Red-White-and-Black-Bold-Modern-Youtube-Thumbnail-5.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>CAMARAS DE SEGURIDAD</h5>
        <p>Mejor precio del mercado</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://www.eogsa.com/wp-content/uploads/2016/07/maxresdefault-1080x675.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>IMPRESORAS</h5>
        <p>Todo tipo de impresoras y scanners</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </header>

    <!-- Sección de productos -->
    <section id="productos" class="py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="fw-bold">
                    Nuestros cafés
                </h2>

                <p class="text-secondary">
                    Selecciona el café perfecto para acompañar tu día.
                </p>
            </div>

            <div class="row g-4">

                <!-- Tarjeta 1 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://co-media.hptiendaenlinea.com/catalog/product/cache/b3b166914d87ce343d4dc5ec5117b502/a/z/azure_6k887la_2.jpg"
                                class="card-img-top object-fit-cover"
                                alt="PORTATIL"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-danger align-self-start mb-2">
                                15% de descuento
                            </span>

                            <h3 class="card-title h5">
                                Portail HP DDS-343Q
                            </h3>

                            <p class="card-text text-secondary">
                                1TB de almacenamiento SSD, 8Gb de memoria Ram, WINDOWS 11 PRO, un año de office 365
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold text-success">
                                    $2.500.000
                                </p>

                                <button class="btn btn-dark w-100">
                                    agregar al carrito
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tarjeta 2 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTDl9tlwR-_ZMYwCMCYEWHnsW-KaoeILGXR2pcuvDXx6NQwbIkd1QrEVfwB-kZYled8MsEnMLdWK9hKocadVw9py8T4JcfxijqYHzowkhd61qET1kwEbLfFVkA"
                                class="card-img-top object-fit-cover"
                                alt="Taza de café capuchino"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-warning text-dark align-self-start mb-2">
                                20% de descuento
                            </span>

                            <h3 class="card-title h5">
                            Monitor Portátil De 15.6pulgadas
                            </h3>

                            <p class="card-text text-secondary">
                                Una combinación equilibrada de calidad y confort, pantalla super AMOLED
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold text-success">
                                    $690.000
                                </p>

                                <button class="btn btn-dark w-100">
                                    agregar al carrito
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tarjeta 3 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcT7ZYdwS6mlwhItmOh3p21YNwAMO-m4exzcmnVsmutE5RbDmmjH5QKOXoBsXsU6_2P77aN_jH7AAb_VF8MJzJ-GIVq7AAx_E5DQw-sV-WePmZnDwLQO-x762Q"
                                class="card-img-top object-fit-cover"
                                alt="Taza de café latte"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-info text-dark align-self-start mb-2">
                                5% DE DESCUENTO
                            </span>

                            <h3 class="card-title h5">
                                MOUSE LOGITECH 
                            </h3>

                            <p class="card-text text-secondary">
                                Logitech gaming retroiluminado, buen agarre y confort.
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold text-success">
                                    $90.000
                                </p>

                                <button class="btn btn-dark w-100">
                                    agregar al carrito
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Tarjeta 4 -->
                <div class="col-sm-6 col-lg-3">
                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">
                            <img
                                src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSAyzaNNoKDGlaeIfsL90JeSN9UlgdJl3_tuefMP0KcvJP-dl3WydJtlMbT_lHJxAoMYt91_UF69RHsC94XQLQuigQLJZ77VjlNdOjMhjWxzycwU-g2-eXKZQ"
                                class="card-img-top object-fit-cover"
                                alt="Vaso de café frío"
                            >
                        </div>

                        <div class="card-body d-flex flex-column">
                            <span class="badge bg-primary align-self-start mb-2">
                                40%de descuento
                            </span>

                            <h3 class="card-title h5">
                                Diademas Gaming
                            </h3>

                            <p class="card-text text-secondary">
                                Excelente acabado retroiluminado, ideal para juegos
                            </p>

                            <div class="mt-auto">
                                <p class="fs-5 fw-bold text-success">
                                    $35.000
                                </p>

                                <button class="btn btn-dark w-100">
                                    agregar al carrito
                                </button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sección nosotros -->
    <section id="nosotros" class="bg-white py-5">
        <div class="container">
            <div class="row align-items-center g-4">

                <div class="col-md-6">
                    <span class="display-1">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLd-NZxvh9t1QfCwE8EX2682_6J-yAuGAomO_FFsdgWhKXlPglNQbzFws&s=10 " width="500 " alt="">
                    </span>

                    <h2 class="fw-bold mt-3">
                        Importadores directos y soporte de confianza
                    </h2>

                    <p class="text-secondary">
                        Importamos todos nuestros equipos sin intermediarios y brindamos asesoria y soporte tecnico directo con nosotros
                    </p>
                </div>

                <div class="col-md-6">
                    <div class="card border-0 bg-warning-subtle">
                        <div class="card-body p-4">

                            <h3 class="h5 fw-bold">
                                ¿Por qué elegirnos?
                            </h3>

                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-transparent">
                                    ✓ Garantía directa
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Soporte Tecnico 
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Profesionalismo
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Experiencia certificada
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Sección de contacto -->
    <section id="contacto" class="py-5">
        <div class="container text-center">

            <h2 class="fw-bold">
                Visítanos
            </h2>

            <p class="text-secondary">
                Disfruta una buena conversación acompañada de una
                excelente taza de café.
            </p>

            <div class="row justify-content-center mt-4">

                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="fs-1">📍</div>
                            <h3 class="h5">Dirección</h3>
                            <p class="mb-0">San Juan de Pasto, Nariño</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="fs-1">🕐</div>
                            <h3 class="h5">Horario</h3>
                            <p class="mb-0">Lunes a sábado, 8:00 a. m.–8:00 p. m.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="fs-1">📞</div>
                            <h3 class="h5">Teléfono</h3>
                            <p class="mb-0">300 000 0000</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Pie de página -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p class="mb-1 fw-bold">
                ☕ Café Aroma
            </p>

            <p class="mb-0 text-white-50">
                Plantilla educativa desarrollada con HTML y Bootstrap.
            </p>
        </div>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>