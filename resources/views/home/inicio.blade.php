<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Index Humanidades" name="keywords">
    <meta content="Medicina Investigación" name="description">
    <title>Facultad Medicina U A de C</title>
    <!-- Favicon -->
    <link rel="icon" href="../images/Icon.jpg" type="image/png">
    <!-- Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            padding-top: 70px; /* Espacio para el navbar fijo */
        }

        /* ===== NAVBAR ===== */
        .navbar-custom {
            background: linear-gradient(to right, #0784a3,  #003366) !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .top-line {
            background-color: #BF9B4C;
            height: 8px;
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1050;
        }

        .navbar-nav .nav-link {
            position: relative;
            color: #FFFFFF !important;
            font-weight: 500;
            padding: 8px 15px;
            border-radius: 5px;
            margin: 0 5px;
            transition: all 0.3s ease;
        }

        /* línea oculta */
.navbar-nav .nav-link::after {
    content: "";
    position: absolute;
    left: 15px;          /* respeta tu padding */
    bottom: 2px;         /* línea debajo del texto */
    width: 0;
    height: 2px;
    background-color: #ffffff;
    transition: width 0.3s ease;
}

/* aparece al hover */
.navbar-nav .nav-link:hover::after {
    width: calc(100% - 30px); /* ancho real del texto */
}

        .navbar-nav .nav-link:hover {
            
            color: #BF9B4C !important;
            transform: translateY(-2px);
        }

        .navbar-brand {
            margin-left: 20px;
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            height: 60px;
            max-width: 100%;
            object-fit: contain;
        }

        .navbar-toggler {
            border: none;
            outline: none;
        }

        .navbar-toggler-icon {
            background-image: url('data:image/svg+xml;charset=utf8,<svg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"><path stroke="%23FFFFFF" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" d="M4 7h22M4 15h22M4 23h22"/></svg>');
            width: 30px;
            height: 30px;
        }

        /* ===== FOOTER ===== */
        footer {
            background: linear-gradient(to bottom, #003366, #0784a3);
            color: white;
            padding: 40px 0 20px;
            border-top: 8px solid #BF9B4C;
            margin-top: 50px;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 30px;
            padding: 0 20px;
        }

        .footer-section {
            flex: 1;
            min-width: 250px;
        }

        .footer-section h4 {
            color: #BF9B4C;
            font-size: 18px;
            margin-bottom: 15px;
            border-bottom: 2px solid rgba(255, 204, 0, 0.3);
            padding-bottom: 5px;
        }

        .footer-section p {
            color: #E0E0E0;
            margin-bottom: 12px;
            font-size: 15px;
            line-height: 1.6;
            transition: color 0.3s ease;
        }

        .footer-section p:hover {
            color: #BF9B4C;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 14px;
            color: #B0B0B0;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 992px) {
            .container {
                flex-direction: column;
                padding: 40px 20px;
            }
            
            .box-img {
                width: 100%;
                height: 300px;
                margin-bottom: 20px;
            }
            
            .content-center {
                order: -1;
                margin-bottom: 30px;
                width: 100%;
            }
            
            .navbar-nav {
                background-color: rgba(0, 51, 102, 0.95);
                padding: 15px;
                border-radius: 0 0 10px 10px;
            }
            
            .navbar-nav .nav-link {
                text-align: center;
                margin: 5px 0;
            }
        }

        @media (max-width: 768px) {
            .content-center h1 {
                font-size: 26px;
            }
            
            .footer-content {
                flex-direction: column;
                text-align: center;
            }
        }

            .brand-text {
    margin-left: 12px;
    font-size: 18px;
    font-weight: 600;
    color: #FFFFFF;
    white-space: nowrap;
}



.container {
            max-width: 1100px;
            background: transparent;
            padding: 30px;
            border-radius: 2px;
            display: flex;
            align-items: center;
            margin-top: 20px;
        }
        .info-section {
            flex: 1;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 415px;
        }
        .info-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
        }
        .form-section {
            flex: 1;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.3);
        }
        .form-control {
            margin-bottom: 20px;
            padding: 12px;
            font-size: 1.1rem;
            border-radius: 50px;
            border: 1px solid #ced4da;
            transition: border-color 0.3s ease;
        }
        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }
        .btn-primary {
            width: auto;
            margin-top: 15px;
            padding: 8px 20px;
            font-size: 1rem;
            border-radius: 50px;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<div class="top-line"></div>
<nav class="navbar navbar-expand-lg navbar-custom fixed-top shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="../images/UAdeC.png" alt="Logo Universidad Autónoma de Coahuila"><span class="brand-text">Comité de Ética en Investigación</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav me-5"><!--class="navbar-nav ms-auto"-->
                <li class="nav-item"><a class="nav-link" href="../pages/registro.php">Registrarse Ahora</a></li>
                <li class="nav-item"><a class="nav-link" href="../Index.html">¡Regresar al sitio!</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->

<!-- CONTENIDO -->
<div class="container">
    <div class="info-section">
        <img src="{{ asset('images/Inicio.png') }}">
    </div>
    <div method="POST" action="" class="form-section">
        <h2 class="text-primary">¡Inicia Sesión!</h2>
        <p>Llena los siguientes campos para Iniciar Sesión y aplicar los formatos.</p>
        <form method="POST"
      action="{{ route('login.validar') }}">

    @csrf

    <input type="text"
           class="form-control"
           name="email"
           placeholder="Correo institucional">

    <input type="password"
           class="form-control"
           name="password"
           placeholder="Contraseña">

    <button type="submit"
            class="btn btn-primary">
            Ingresar
    </button>

</form>
    </div>
</div> 

<!-- Contenido -->

<!-- FOOTER -->    
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
        
        <div class="footer-bottom">
            <p>&copy; 2026 Universidad Autónoma de Coahuila - Facultad de Medicina, Campus Saltillo. Todos los derechos reservados.</p>
        </div>
    </footer>
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
    toastr.options = {
    "closeButton": true, 
    "progressBar": true, 
    "positionClass": "toast-top-right", 
    "timeOut": "3000", 
    "extendedTimeOut": "1000", 
    "showMethod": "fadeIn", 
    "hideMethod": "fadeOut" 
};
</script>

<script>
document.getElementById('email').addEventListener('input', function () {
    this.value = this.value.toLowerCase();
});
document.getElementById('email').addEventListener('input', function () {
    this.value = this.value.toLowerCase().replace(/\s/g,'');
});
</script>

@if(session('error'))
<script>
toastr.error("{{ session('error') }}");
</script>
@endif
</body>
</html>