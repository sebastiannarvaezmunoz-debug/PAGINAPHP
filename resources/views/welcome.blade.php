<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Honda Motors - Vehículos</title>

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .hero-img {
            height: 600px;
            object-fit: cover;
            filter: brightness(65%);
        }

        .card-img-top {
            height: 220px;
            object-fit: cover;
        }

        .honda-red {
            background-color: #cc0000;
        }

        .text-honda {
            color: #cc0000;
        }

        .btn-honda {
            background-color: #cc0000;
            color: white;
            border: none;
        }

        .btn-honda:hover {
            background-color: #990000;
            color: white;
        }

        .section-title {
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: "";
            display: block;
            width: 60px;
            height: 4px;
            background-color: #cc0000;
            margin: 10px auto;
        }

        .vehicle-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .vehicle-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
        }

        footer {
            border-top: 4px solid #cc0000;
        }
    </style>
</head>

<body class="bg-light">

    <!-- ============================= -->
    <!-- BARRA DE NAVEGACIÓN -->
    <!-- ============================= -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

        <div class="container">

            <a class="navbar-brand fw-bold fs-4" href="#">
                🚗 HONDA MOTORS
            </a>

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
                        <a class="nav-link" href="#modelos">
                            Modelos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#vehiculos">
                            Vehículos
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


    <!-- ============================= -->
    <!-- CARRUSEL PRINCIPAL -->
    <!-- ============================= -->

    <header id="inicio">

        <div
            id="carouselHonda"
            class="carousel slide"
            data-bs-ride="carousel"
        >

            <div class="carousel-indicators">

                <button
                    type="button"
                    data-bs-target="#carouselHonda"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                ></button>

                <button
                    type="button"
                    data-bs-target="#carouselHonda"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"
                ></button>

                <button
                    type="button"
                    data-bs-target="#carouselHonda"
                    data-bs-slide-to="2"
                    aria-label="Slide 3"
                ></button>

            </div>


            <div class="carousel-inner">

                <!-- Slide 1 -->

                <div class="carousel-item active">

                    <img
                        src="https://images.unsplash.com/photo-1606664515524-ed2f786a0bd6?auto=format&fit=crop&w=1600&q=80"
                        class="d-block w-100 hero-img"
                        alt="Honda Civic"
                    >

                    <div class="carousel-caption">

                        <h1 class="display-4 fw-bold">
                            HONDA CIVIC
                        </h1>

                        <p class="fs-5">
                            Diseño, tecnología y rendimiento.
                        </p>

                        <a
                            href="#vehiculos"
                            class="btn btn-danger btn-lg"
                        >
                            Ver vehículo
                        </a>

                    </div>

                </div>


                <!-- Slide 2 -->

                <div class="carousel-item">

                    <img
                        src="https://images.unsplash.com/photo-1542282088-72c9c27ed0cd?auto=format&fit=crop&w=1600&q=80"
                        class="d-block w-100 hero-img"
                        alt="Honda SUV"
                    >

                    <div class="carousel-caption">

                        <h2 class="display-4 fw-bold">
                            HONDA SUV
                        </h2>

                        <p class="fs-5">
                            Espacio, seguridad y comodidad para toda la familia.
                        </p>

                        <a
                            href="#vehiculos"
                            class="btn btn-danger btn-lg"
                        >
                            Conocer modelos
                        </a>

                    </div>

                </div>


                <!-- Slide 3 -->

                <div class="carousel-item">

                    <img
                        src="https://images.unsplash.com/photo-1503736334956-4c8f8e92946d?auto=format&fit=crop&w=1600&q=80"
                        class="d-block w-100 hero-img"
                        alt="Honda deportivo"
                    >

                    <div class="carousel-caption">

                        <h2 class="display-4 fw-bold">
                            POTENCIA HONDA
                        </h2>

                        <p class="fs-5">
                            Vive la experiencia de conducir un Honda.
                        </p>

                        <a
                            href="#contacto"
                            class="btn btn-danger btn-lg"
                        >
                            Solicitar información
                        </a>

                    </div>

                </div>

            </div>


            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselHonda"
                data-bs-slide="prev"
            >

                <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                ></span>

                <span class="visually-hidden">
                    Anterior
                </span>

            </button>


            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselHonda"
                data-bs-slide="next"
            >

                <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                ></span>

                <span class="visually-hidden">
                    Siguiente
                </span>

            </button>

        </div>

    </header>


    <!-- ============================= -->
    <!-- PROMOCIÓN -->
    <!-- ============================= -->

    <div class="container mt-4">

        <div
            class="alert alert-danger text-center shadow-sm"
            role="alert"
        >

            <strong>🔥 Oferta especial Honda:</strong>

            Pregunta por nuestros planes de financiación
            y vehículos disponibles.

        </div>

    </div>


    <!-- ============================= -->
    <!-- MODELOS -->
    <!-- ============================= -->

    <section
        id="modelos"
        class="py-5"
    >

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold section-title">
                    Modelos Honda
                </h2>

                <p class="text-secondary">
                    Encuentra el vehículo ideal para ti.
                </p>

            </div>


            <div class="row g-4">

                <!-- Sedanes -->

                <div class="col-md-3">

                    <div
                        class="card text-center h-100 shadow-sm border-0"
                    >

                        <div class="card-body">

                            <div class="display-3">
                                🚘
                            </div>

                            <h3 class="h5 mt-3">
                                Sedanes
                            </h3>

                            <p class="text-secondary">
                                Elegancia, comodidad y excelente rendimiento.
                            </p>

                            <a
                                href="#vehiculos"
                                class="btn btn-outline-danger"
                            >
                                Ver modelos
                            </a>

                        </div>

                    </div>

                </div>


                <!-- SUV -->

                <div class="col-md-3">

                    <div
                        class="card text-center h-100 shadow-sm border-0"
                    >

                        <div class="card-body">

                            <div class="display-3">
                                🚙
                            </div>

                            <h3 class="h5 mt-3">
                                SUV
                            </h3>

                            <p class="text-secondary">
                                Espacio y versatilidad para cualquier aventura.
                            </p>

                            <a
                                href="#vehiculos"
                                class="btn btn-outline-danger"
                            >
                                Ver modelos
                            </a>

                        </div>

                    </div>

                </div>


                <!-- Híbridos -->

                <div class="col-md-3">

                    <div
                        class="card text-center h-100 shadow-sm border-0"
                    >

                        <div class="card-body">

                            <div class="display-3">
                                🔋
                            </div>

                            <h3 class="h5 mt-3">
                                Híbridos
                            </h3>

                            <p class="text-secondary">
                                Tecnología eficiente y menor consumo.
                            </p>

                            <a
                                href="#vehiculos"
                                class="btn btn-outline-danger"
                            >
                                Ver modelos
                            </a>

                        </div>

                    </div>

                </div>


                <!-- Deportivos -->

                <div class="col-md-3">

                    <div
                        class="card text-center h-100 shadow-sm border-0"
                    >

                        <div class="card-body">

                            <div class="display-3">
                                🏎️
                            </div>

                            <h3 class="h5 mt-3">
                                Deportivos
                            </h3>

                            <p class="text-secondary">
                                Potencia, diseño y emoción al conducir.
                            </p>

                            <a
                                href="#vehiculos"
                                class="btn btn-outline-danger"
                            >
                                Ver modelos
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ============================= -->
    <!-- VEHÍCULOS DESTACADOS -->
    <!-- ============================= -->

    <section
        id="vehiculos"
        class="py-5 bg-white"
    >

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold section-title">
                    Vehículos destacados
                </h2>

                <p class="text-secondary">
                    Conoce algunos de nuestros modelos.
                </p>

            </div>


            <div class="row g-4">

                <!-- VEHÍCULO 1 -->

                <div class="col-sm-6 col-lg-3">

                    <div
                        class="card h-100 border-0 shadow-sm vehicle-card"
                    >

                        <img
                            src="https://images.unsplash.com/photo-1550355291-bbee04a92027?auto=format&fit=crop&w=800&q=80"
                            class="card-img-top"
                            alt="Honda Civic"
                        >

                        <div class="card-body d-flex flex-column">

                            <span
                                class="badge bg-danger align-self-start mb-2"
                            >
                                DESTACADO
                            </span>

                            <h3 class="card-title h5">
                                Honda Civic
                            </h3>

                            <p class="card-text text-secondary">
                                Sedán moderno con excelente rendimiento,
                                tecnología y seguridad.
                            </p>

                            <div class="mt-auto">

                                <p class="fs-5 fw-bold text-danger">
                                    Desde $120.000.000
                                </p>

                                <button
                                    class="btn btn-honda w-100"
                                >
                                    🚗 Solicitar información
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- VEHÍCULO 2 -->

                <div class="col-sm-6 col-lg-3">

                    <div
                        class="card h-100 border-0 shadow-sm vehicle-card"
                    >

                        <img
                            src="https://images.unsplash.com/photo-1519641471654-76ce0107ad1b?auto=format&fit=crop&w=800&q=80"
                            class="card-img-top"
                            alt="Honda CR-V"
                        >

                        <div class="card-body d-flex flex-column">

                            <span
                                class="badge bg-warning text-dark align-self-start mb-2"
                            >
                                SUV
                            </span>

                            <h3 class="card-title h5">
                                Honda CR-V
                            </h3>

                            <p class="card-text text-secondary">
                                SUV espaciosa, cómoda y preparada para
                                viajes familiares.
                            </p>

                            <div class="mt-auto">

                                <p class="fs-5 fw-bold text-danger">
                                    Desde $160.000.000
                                </p>

                                <button
                                    class="btn btn-honda w-100"
                                >
                                    🚗 Solicitar información
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- VEHÍCULO 3 -->

                <div class="col-sm-6 col-lg-3">

                    <div
                        class="card h-100 border-0 shadow-sm vehicle-card"
                    >

                        <img
                            src="https://images.unsplash.com/photo-1553440569-bcc63803a83d?auto=format&fit=crop&w=800&q=80"
                            class="card-img-top"
                            alt="Honda Accord"
                        >

                        <div class="card-body d-flex flex-column">

                            <span
                                class="badge bg-success align-self-start mb-2"
                            >
                                CONFORT
                            </span>

                            <h3 class="card-title h5">
                                Honda Accord
                            </h3>

                            <p class="card-text text-secondary">
                                Elegancia, confort y tecnología para
                                disfrutar cada viaje.
                            </p>

                            <div class="mt-auto">

                                <p class="fs-5 fw-bold text-danger">
                                    Desde $150.000.000
                                </p>

                                <button
                                    class="btn btn-honda w-100"
                                >
                                    🚗 Solicitar información
                                </button>

                            </div>

                        </div>

                    </div>

                </div>


                <!-- VEHÍCULO 4 -->

                <div class="col-sm-6 col-lg-3">

                    <div
                        class="card h-100 border-0 shadow-sm vehicle-card"
                    >

                        <img
                            src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?auto=format&fit=crop&w=800&q=80"
                            class="card-img-top"
                            alt="Honda deportivo"
                        >

                        <div class="card-body d-flex flex-column">

                            <span
                                class="badge bg-dark align-self-start mb-2"
                            >
                                SPORT
                            </span>

                            <h3 class="card-title h5">
                                Honda Sport
                            </h3>

                            <p class="card-text text-secondary">
                                Diseño deportivo y una experiencia
                                emocionante al volante.
                            </p>

                            <div class="mt-auto">

                                <p class="fs-5 fw-bold text-danger">
                                    Consultar precio
                                </p>

                                <button
                                    class="btn btn-honda w-100"
                                >
                                    🚗 Solicitar información
                                </button>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ============================= -->
    <!-- BENEFICIOS -->
    <!-- ============================= -->

    <section
        class="py-5 honda-red text-white"
    >

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="fw-bold">
                    ¿Por qué elegir Honda?
                </h2>

                <p>
                    Calidad, innovación y confianza en cada vehículo.
                </p>

            </div>


            <div class="row text-center g-4">

                <div class="col-md-4">

                    <div class="fs-1">
                        🛡️
                    </div>

                    <h3 class="h5">
                        Seguridad
                    </h3>

                    <p>
                        Vehículos diseñados pensando en la seguridad
                        del conductor y los pasajeros.
                    </p>

                </div>


                <div class="col-md-4">

                    <div class="fs-1">
                        ⚙️
                    </div>

                    <h3 class="h5">
                        Tecnología
                    </h3>

                    <p>
                        Innovación y tecnología para mejorar
                        tu experiencia de conducción.
                    </p>

                </div>


                <div class="col-md-4">

                    <div class="fs-1">
                        🔧
                    </div>

                    <h3 class="h5">
                        Servicio
                    </h3>

                    <p>
                        Mantenimiento y atención especializada
                        para tu vehículo.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- ============================= -->
    <!-- NOSOTROS -->
    <!-- ============================= -->

    <section
        id="nosotros"
        class="bg-white py-5"
    >

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-md-6">

                    <img
                        src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?auto=format&fit=crop&w=1000&q=80"
                        class="img-fluid rounded shadow"
                        alt="Vehículos Honda"
                    >

                </div>


                <div class="col-md-6">

                    <h2 class="fw-bold">
                        Tu próximo Honda está aquí
                    </h2>

                    <p class="text-secondary">
                        Somos un concesionario especializado en vehículos
                        Honda, comprometido con ofrecer una excelente
                        experiencia de compra y servicio.
                    </p>

                    <p class="text-secondary">
                        Te ayudamos a encontrar el vehículo que mejor
                        se adapte a tus necesidades, presupuesto y estilo
                        de vida.
                    </p>

                    <a
                        href="#contacto"
                        class="btn btn-honda"
                    >
                        Contáctanos
                    </a>

                </div>

            </div>


            <!-- ¿POR QUÉ ELEGIRNOS? -->

            <div class="row mt-5">

                <div class="col-md-8 mx-auto">

                    <div
                        class="card border-0 bg-light shadow-sm"
                    >

                        <div class="card-body p-4">

                            <h3 class="h5 fw-bold text-center">
                                Ventajas de comprar con nosotros
                            </h3>

                            <ul class="list-group list-group-flush">

                                <li class="list-group-item bg-transparent">
                                    ✓ Vehículos de calidad
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Asesoría personalizada
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Opciones de financiación
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Servicio y mantenimiento
                                </li>

                                <li class="list-group-item bg-transparent">
                                    ✓ Atención especializada
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ============================= -->
    <!-- CONTACTO -->
    <!-- ============================= -->

    <section
        id="contacto"
        class="py-5"
    >

        <div class="container">

            <div class="text-center">

                <h2 class="fw-bold section-title">
                    Contáctanos
                </h2>

                <p class="text-secondary">
                    Estamos listos para ayudarte a encontrar tu próximo Honda.
                </p>

            </div>


            <div
                class="row justify-content-center mt-4 g-4"
            >

                <!-- DIRECCIÓN -->

                <div class="col-md-4">

                    <div
                        class="card border-0 shadow-sm h-100 text-center"
                    >

                        <div class="card-body">

                            <div class="fs-1">
                                📍
                            </div>

                            <h3 class="h5">
                                Concesionario
                            </h3>

                            <p class="mb-0">
                                San Juan de Pasto, Nariño
                            </p>

                        </div>

                    </div>

                </div>


                <!-- HORARIO -->

                <div class="col-md-4">

                    <div
                        class="card border-0 shadow-sm h-100 text-center"
                    >

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


                <!-- TELÉFONO -->

                <div class="col-md-4">

                    <div
                        class="card border-0 shadow-sm h-100 text-center"
                    >

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


            <!-- FORMULARIO -->

            <div class="row justify-content-center mt-5">

                <div class="col-md-8">

                    <div
                        class="card shadow-sm border-0"
                    >

                        <div class="card-body p-4">

                            <h3
                                class="h4 fw-bold mb-4 text-center"
                            >
                                Solicita información
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
                                        for="telefono"
                                        class="form-label"
                                    >
                                        Teléfono
                                    </label>

                                    <input
                                        type="tel"
                                        class="form-control"
                                        id="telefono"
                                        placeholder="300 000 0000"
                                    >

                                </div>


                                <div class="mb-3">

                                    <label
                                        for="modelo"
                                        class="form-label"
                                    >
                                        Modelo de interés
                                    </label>

                                    <select
                                        class="form-select"
                                        id="modelo"
                                    >

                                        <option selected>
                                            Selecciona un modelo
                                        </option>

                                        <option>
                                            Honda Civic
                                        </option>

                                        <option>
                                            Honda CR-V
                                        </option>

                                        <option>
                                            Honda Accord
                                        </option>

                                        <option>
                                            Otro modelo
                                        </option>

                                    </select>

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
                                        placeholder="¿Qué vehículo estás buscando?"
                                    ></textarea>

                                </div>


                                <button
                                    type="submit"
                                    class="btn btn-honda w-100"
                                >
                                    🚗 Enviar solicitud
                                </button>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ============================= -->
    <!-- FOOTER -->
    <!-- ============================= -->

    <footer
        class="bg-dark text-white text-center py-4"
    >

        <div class="container">

            <p class="mb-1 fw-bold fs-5">
                🚗 HONDA MOTORS
            </p>

            <p class="mb-0 text-white-50">
                Vehículos, tecnología y servicio automotriz.
            </p>

            <p class="mb-0 text-white-50 mt-2">
                © 2026 Honda Motors - Todos los derechos reservados.
            </p>

        </div>

    </footer>


    <!-- Bootstrap JavaScript -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
    </script>

</body>