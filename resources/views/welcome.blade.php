<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Tecnología Sureña</title>

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
                💻 Tecnología Sureña 🖱️
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
                            Inicio
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#categorias">
                            Categorías
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
        class="bg-dark text-white"
    >

        <!-- TU CARRUSEL -->
        <div id="carouselExampleCaptions" class="carousel slide">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>

                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>

                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img
                        src="https://www.elespectador.com/resizer/kleLiMLR6HJxMOXEbBDvoRAJ6bQ=/arc-anglerfish-arc2-prod-elespectador/public/MLK7W37IHFECFCJ6HVW4ZT2LAI.jpg"
                        class="d-block w-100"
                        alt="Computadores"
                    >

                    <div class="carousel-caption d-none d-md-block">
                        <h5>COMPUTADORES ÚLTIMA TECNOLOGÍA</h5>
                        <p>Distribuidores directos y precios especiales.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img
                        src="https://www.digittecnic.com/wp-content/uploads/2024/10/Red-White-and-Black-Bold-Modern-Youtube-Thumbnail-5.png"
                        class="d-block w-100"
                        alt="Cámaras de seguridad"
                    >

                    <div class="carousel-caption d-none d-md-block">
                        <h5>CÁMARAS DE SEGURIDAD</h5>
                        <p>Protege tu hogar o negocio con nuestros equipos.</p>
                    </div>
                </div>

                <div class="carousel-item">
                    <img
                        src="https://www.eogsa.com/wp-content/uploads/2016/07/maxresdefault-1080x675.jpg"
                        class="d-block w-100"
                        alt="Impresoras"
                    >

                    <div class="carousel-caption d-none d-md-block">
                        <h5>IMPRESORAS</h5>
                        <p>Todo tipo de impresoras y scanners.</p>
                    </div>
                </div>

            </div>

            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>

            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>

        </div>

    </header>


    <!-- Mensaje de promoción -->
    <div class="container mt-4">

        <div class="alert alert-success text-center shadow-sm" role="alert">
            <strong>🔥 Oferta especial:</strong>
            Aprovecha nuestros descuentos en productos de tecnología.
        </div>

    </div>


    <!-- Categorías -->
    <section id="categorias" class="py-5">

        <div class="container">

            <div class="text-center mb-4">

                <h2 class="fw-bold">
                    Categorías
                </h2>

                <p class="text-secondary">
                    Encuentra los productos que necesitas.
                </p>

            </div>

            <div class="row g-4">

                <!-- Categoría 1 -->
                <div class="col-md-3">

                    <div class="card text-center h-100 shadow-sm border-0">

                        <div class="card-body">

                            <div class="display-4">
                                💻
                            </div>

                            <h3 class="h5 mt-3">
                                Computadores
                            </h3>

                            <p class="text-secondary">
                                Portátiles y computadores para trabajo y estudio.
                            </p>

                            <a href="#productos" class="btn btn-outline-dark">
                                Ver productos
                            </a>

                        </div>

                    </div>

                </div>


                <!-- Categoría 2 -->
                <div class="col-md-3">

                    <div class="card text-center h-100 shadow-sm border-0">

                        <div class="card-body">

                            <div class="display-4">
                                🖱️
                            </div>

                            <h3 class="h5 mt-3">
                                Accesorios
                            </h3>

                            <p class="text-secondary">
                                Mouse, teclados, diademas y más.
                            </p>

                            <a href="#productos" class="btn btn-outline-dark">
                                Ver productos
                            </a>

                        </div>

                    </div>

                </div>


                <!-- Categoría 3 -->
                <div class="col-md-3">

                    <div class="card text-center h-100 shadow-sm border-0">

                        <div class="card-body">

                            <div class="display-4">
                                📹
                            </div>

                            <h3 class="h5 mt-3">
                                Seguridad
                            </h3>

                            <p class="text-secondary">
                                Cámaras y equipos de vigilancia.
                            </p>

                            <a href="#productos" class="btn btn-outline-dark">
                                Ver productos
                            </a>

                        </div>

                    </div>

                </div>


                <!-- Categoría 4 -->
                <div class="col-md-3">

                    <div class="card text-center h-100 shadow-sm border-0">

                        <div class="card-body">

                            <div class="display-4">
                                🖨️
                            </div>

                            <h3 class="h5 mt-3">
                                Impresoras
                            </h3>

                            <p class="text-secondary">
                                Impresoras y scanners para tu hogar o negocio.
                            </p>

                            <a href="#productos" class="btn btn-outline-dark">
                                Ver productos
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- Sección de productos -->
    <section id="productos" class="py-5 bg-white">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold">
                    Productos destacados
                </h2>

                <p class="text-secondary">
                    Tecnología de calidad al mejor precio.
                </p>

            </div>


            <div class="row g-4">

                <!-- Producto 1 -->
                <div class="col-sm-6 col-lg-3">

                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">

                            <img
                                src="https://co-media.hptiendaenlinea.com/catalog/product/cache/b3b166914d87ce343d4dc5ec5117b502/a/z/azure_6k887la_2.jpg"
                                class="card-img-top object-fit-cover"
                                alt="Portátil HP"
                            >

                        </div>

                        <div class="card-body d-flex flex-column">

                            <span class="badge bg-danger align-self-start mb-2">
                                15% de descuento
                            </span>

                            <h3 class="card-title h5">
                                Portátil HP DDS-343Q
                            </h3>

                            <p class="card-text text-secondary">
                                1TB SSD, 8GB de memoria RAM, Windows 11 Pro
                                y un año de Office 365.
                            </p>

                            <div class="mt-auto">

                                <p class="fs-5 fw-bold text-success">
                                    $2.500.000
                                </p>

                                <button class="btn btn-dark w-100">
                                    🛒 Agregar al carrito
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Producto 2 -->
                <div class="col-sm-6 col-lg-3">

                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">

                            <img
                                src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcTDl9tlwR-_ZMYwCMCYEWHnsW-KaoeILGXR2pcuvDXx6NQwbIkd1QrEVfwB-kZYled8MsEnMLdWK9hKocadVw9py8T4JcfxijqYHzowkhd61qET1kwEbLfFVkA"
                                class="card-img-top object-fit-cover"
                                alt="Monitor portátil"
                            >

                        </div>

                        <div class="card-body d-flex flex-column">

                            <span class="badge bg-warning text-dark align-self-start mb-2">
                                20% de descuento
                            </span>

                            <h3 class="card-title h5">
                                Monitor portátil 15.6"
                            </h3>

                            <p class="card-text text-secondary">
                                Pantalla portátil de alta calidad, ideal para
                                trabajo, estudio y entretenimiento.
                            </p>

                            <div class="mt-auto">

                                <p class="fs-5 fw-bold text-success">
                                    $690.000
                                </p>

                                <button class="btn btn-dark w-100">
                                    🛒 Agregar al carrito
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Producto 3 -->
                <div class="col-sm-6 col-lg-3">

                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">

                            <img
                                src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcT7ZYdwS6mlwhItmOh3p21YNwAMO-m4exzcmnVsmutE5RbDmmjH5QKOXoBsXsU6_2P77aN_jH7AAb_VF8MJzJ-GIVq7AAx_E5DQw-sV-WePmZnDwLQO-x762Q"
                                class="card-img-top object-fit-cover"
                                alt="Mouse Logitech"
                            >

                        </div>

                        <div class="card-body d-flex flex-column">

                            <span class="badge bg-info text-dark align-self-start mb-2">
                                5% DE DESCUENTO
                            </span>

                            <h3 class="card-title h5">
                                Mouse Logitech Gaming
                            </h3>

                            <p class="card-text text-secondary">
                                Mouse gaming con retroiluminación, buen agarre
                                y excelente comodidad.
                            </p>

                            <div class="mt-auto">

                                <p class="fs-5 fw-bold text-success">
                                    $90.000
                                </p>

                                <button class="btn btn-dark w-100">
                                    🛒 Agregar al carrito
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- Producto 4 -->
                <div class="col-sm-6 col-lg-3">

                    <div class="card h-100 shadow-sm border-0">

                        <div class="ratio ratio-4x3">

                            <img
                                src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSAyzaNNoKDGlaeIfsL90JeSN9UlgdJl3_tuefMP0KcvJP-dl3WydJtlMbT_lHJxAoMYt91_UF69RHsC94XQLQuigQLJZ77VjlNdOjMhjWxzycwU-g2-eXKZQ"
                                class="card-img-top object-fit-cover"
                                alt="Diadema Gaming"
                            >

                        </div>

                        <div class="card-body d-flex flex-column">

                            <span class="badge bg-primary align-self-start mb-2">
                                40% DE DESCUENTO
                            </span>

                            <h3 class="card-title h5">
                                Diadema Gaming
                            </h3>

                            <p class="card-text text-secondary">
                                Excelente acabado, sonido de calidad y
                                retroiluminación.
                            </p>

                            <div class="mt-auto">

                                <p class="fs-5 fw-bold text-success">
                                    $35.000
                                </p>

                                <button class="btn btn-dark w-100">
                                    🛒 Agregar al carrito
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- Sección de beneficios -->
    <section class="py-5 bg-primary text-white">

        <div class="container">

            <div class="text-center mb-4">

                <h2 class="fw-bold">
                    Compra con confianza
                </h2>

                <p>
                    Te ofrecemos productos y servicio de calidad.
                </p>

            </div>

            <div class="row text-center g-4">

                <div class="col-md-4">

                    <div class="fs-1">
                        🚚
                    </div>

                    <h3 class="h5">
                        Envíos
                    </h3>

                    <p>
                        Enviamos tus productos de forma rápida y segura.
                    </p>

                </div>

                <div class="col-md-4">

                    <div class="fs-1">
                        🛡️
                    </div>

                    <h3 class="h5">
                        Garantía
                    </h3>

                    <p>
                        Contamos con garantía y soporte para nuestros equipos.
                    </p>

                </div>

                <div class="col-md-4">

                    <div class="fs-1">
                        👨‍💻
                    </div>

                    <h3 class="h5">
                        Soporte técnico
                    </h3>

                    <p>
                        Te ayudamos a elegir y configurar tus equipos.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- Sección nosotros -->
    <section id="nosotros" class="bg-white py-5">

        <div class="container">

            <div class="row align-items-center g-4">

                <div class="col-md-6">

                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLd-NZxvh9t1QfCwE8EX2682_6J-yAuGAomO_FFsdgWhKXlPglNQbzFws&s=10"
                        class="img-fluid rounded shadow"
                        alt="Tecnología Sureña"
                    >

                </div>

                <div class="col-md-6">

                    <h2 class="fw-bold">
                        Importadores directos y soporte de confianza
                    </h2>

                    <p class="text-secondary">
                        En Tecnología Sureña ofrecemos computadores,
                        accesorios, cámaras de seguridad, impresoras y
                        diferentes productos tecnológicos.
                    </p>

                    <p class="text-secondary">
                        Trabajamos para ofrecer buenos precios, productos
                        de calidad y atención personalizada a nuestros
                        clientes.
                    </p>

                    <button class="btn btn-primary">
                        Conoce nuestros productos
                    </button>

                </div>

            </div>


            <!-- Por qué elegirnos -->
            <div class="row mt-5">

                <div class="col-md-8 mx-auto">

                    <div class="card border-0 bg-warning-subtle shadow-sm">

                        <div class="card-body p-4">

                            <h3 class="h5 fw-bold text-center">
                                ¿Por qué elegirnos?
                            </h3>

                            <ul class="list-group list-group-flush">

                                <li class="list-group-item bg-transparent">
                                    ✓ Garantía directa
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Soporte técnico
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Precios competitivos
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Atención personalizada
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Experiencia en tecnología
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- Sección contacto -->
    <section id="contacto" class="py-5">

        <div class="container">

            <div class="text-center">

                <h2 class="fw-bold">
                    Contáctanos
                </h2>

                <p class="text-secondary">
                    ¿Tienes alguna pregunta? Estamos para ayudarte.
                </p>

            </div>


            <div class="row justify-content-center mt-4 g-4">

                <!-- Dirección -->
                <div class="col-md-4">

                    <div class="card border-0 shadow-sm h-100 text-center">

                        <div class="card-body">

                            <div class="fs-1">
                                📍
                            </div>

                            <h3 class="h5">
                                Dirección
                            </h3>

                            <p class="mb-0">
                                San Juan de Pasto, Nariño
                            </p>

                        </div>

                    </div>

                </div>


                <!-- Horario -->
                <div class="col-md-4">

                    <div class="card border-0 shadow-sm h-100 text-center">

                        <div class="card-body">

                            <div class="fs-1">
                                🕐
                            </div>

                            <h3 class="h5">
                                Horario
                            </h3>

                            <p class="mb-0">
                                Lunes a sábado
                            </p>

                            <p class="mb-0">
                                8:00 a. m. – 8:00 p. m.
                            </p>

                        </div>

                    </div>

                </div>


                <!-- Teléfono -->
                <div class="col-md-4">

                    <div class="card border-0 shadow-sm h-100 text-center">

                        <div class="card-body">

                            <div class="fs-1">
                                📞
                            </div>

                            <h3 class="h5">
                                Teléfono
                            </h3>

                            <p class="mb-0">
                                300 000 0000
                            </p>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Formulario -->
            <div class="row justify-content-center mt-5">

                <div class="col-md-8">

                    <div class="card shadow-sm border-0">

                        <div class="card-body p-4">

                            <h3 class="h4 fw-bold mb-4 text-center">
                                Envíanos un mensaje
                            </h3>

                            <form>

                                <div class="mb-3">

                                    <label
                                        for="nombre"
                                        class="form-label"
                                    >
                                        Nombre
                                    </label>

                                    <input
                                        type="text"
                                        class="form-control"
                                        id="nombre"
                                        placeholder="Escribe tu nombre"
                                    >

                                </div>


                                <div class="mb-3">

                                    <label
                                        for="correo"
                                        class="form-label"
                                    >
                                        Correo electrónico
                                    </label>

                                    <input
                                        type="email"
                                        class="form-control"
                                        id="correo"
                                        placeholder="ejemplo@correo.com"
                                    >

                                </div>


                                <div class="mb-3">

                                    <label
                                        for="mensaje"
                                        class="form-label"
                                    >
                                        Mensaje
                                    </label>

                                    <textarea
                                        class="form-control"
                                        id="mensaje"
                                        rows="4"
                                        placeholder="Escribe tu mensaje"
                                    ></textarea>

                                </div>


                                <button
                                    type="submit"
                                    class="btn btn-primary w-100"
                                >
                                    Enviar mensaje
                                </button>

                            </form>

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
                💻 Tecnología Sureña
            </p>

            <p class="mb-0 text-white-50">
                Productos de informática, tecnología y soporte técnico.
            </p>

            <p class="mb-0 text-white-50 mt-2">
                © 2026 Tecnología Sureña - Todos los derechos reservados.
            </p>

        </div>

    </footer>


    <!-- Bootstrap JavaScript -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>
