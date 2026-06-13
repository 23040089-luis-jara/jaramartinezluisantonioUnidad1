<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Index Humanidades" name="keywords">
    <meta content="Medicina Investigación" name="description">

    <title>Página Facultad Medicina U A de C</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/Icon.jpg') }}" type="image/png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>

<div class="top-line"></div>

<nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/UAdeC.png') }}" alt="Logo" height="60">
            <span class="brand-text">
                Comité de Ética en Investigación
            </span>
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

            <ul class="navbar-nav me-5">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                        Iniciar Sesión
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('registro') }}">
                        Registrarse Ahora
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>

<div class="container">

    <div class="box-img">
    <img src="{{ asset('images/Icon.jpg') }}"
         alt="Imagen"
         style="width:100%;height:100%;object-fit:contain;">
</div>

    <div class="content-center">
        <h1>
            Bienvenido a la Facultad de Medicina
            <br><br>
            Universidad Autónoma de Coahuila Campus Saltillo
            <br><br>
            Formación profesional de excelencia,
            compromiso con la salud y la comunidad. 
        </h1>
    </div>

    <div class="box-img">
    <img src="{{ asset('images/UAdeC.png') }}"
         alt="Imagen"
         style="width:100%;height:100%;object-fit:contain;">
</div>

</div>

<footer>

    <div class="footer-content">

        <div class="footer-section">
            <h4>Contacto</h4>
            <p>WhatsApp: 844-000-0000</p>
            <p>Correo electrónico: contacto@uadec.edu.mx</p>
            <p>Teléfono: 844-412-0000</p>
        </div>

        <div class="footer-section">
            <h4>Dirección</h4>
            <p>Facultad de Medicina, Campus Saltillo</p>
            <p>Universidad Autónoma de Coahuila</p>
            <p>Blvd. Venustiano Carranza S/N, Saltillo, Coahuila</p>
        </div>

        <div class="footer-section">
            <h4>Atención a derechos</h4>
            <p>Teléfonos: 844-000-0000</p>
            <p>Horario: Lunes a viernes de 9:00 a 17:00 h</p>
            <p>Correo: derechos@uadec.edu.mx</p>
        </div>

    </div>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>