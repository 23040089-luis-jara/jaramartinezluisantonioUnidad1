<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Index Humanidades" name="keywords">
    <meta content="Medicina Investigación" name="description">
    <title>Página Facultad Medicina U A de C</title>
    <!-- Favicon -->
    <link rel="icon" href="../images/Icon.jpg" type="image/png">
    <!-- Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<?php if (!empty($_SESSION['login_success'])): ?>
<script>
$(document).ready(function () {
    toastr.success("Sesión iniciada correctamente", "Bienvenido");
});
</script>
<?php unset($_SESSION['login_success']); endif; ?>

<script>
let tiempoInactividad = 600000; // 10 minutos en ms

let timer = setTimeout(() => {
    window.location.href = "logout.php";
}, tiempoInactividad);

// Reinicia el timer si el usuario mueve el mouse o presiona una tecla
document.onmousemove = document.onkeypress = () => {
    clearTimeout(timer);
    timer = setTimeout(() => {
        window.location.href = "logout.php";
    }, tiempoInactividad);
};
</script>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f4f4f4;
            padding-top: 70px; /* Espacio para el navbar fijo */
        }

        /* ===== NAVBAR ===== */
        .navbar-custom {
            background: linear-gradient(to right, #0784a3,  #333536) !important;
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
            background: linear-gradient(to bottom, #333536, #0784a3);
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

.titulo-formatos {
    color: #003366; /* azul institucional */
    font-weight: bold;
    margin-top: 40px;
    text-transform: uppercase;
}

.container .card {
    border: 2px solid #BF9B4C;
    border-radius: 10px;
}


    </style>
</head>
<body>

<!-- Navbar -->
<div class="top-line"></div>
<nav class="navbar navbar-expand-lg navbar-custom fixed-top shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="{{ asset('images/UAdeC.png') }}">
        <span class="brand-text">Comité de Ética en Investigación</span>
        <span class="brand-text ms-3">
    {{ session('nombre') }}
    |
    {{ session('matricula') }}
</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav me-5"><!--class="navbar-nav ms-auto"-->
                <li class="nav-item"><a class="nav-link" href="misdoc.php">Mis Enviados</a></li>
                <li class="nav-item"><a class="nav-link" href="enviarpdf.php">¡Enviar Formato!</a></li>
                <li class="nav-item"><form method="POST"
                                        action="{{ route('logout') }}">

                                        @csrf

                                        <button
                                            type="submit"
                                            class="nav-link border-0 bg-transparent">

                                            Cerrar Sesión

                                        </button>

                                    </form></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->

<!-- CONTENIDO -->

<h2 class="text-center mb-4 titulo-formatos">
    ¡Lista de Formatos!
</h2>


<div class="container mt-4">
    <div class="row">
        @foreach($formatos as $r)
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">{{ $r->telefono }}</h5>
                        <p class="card-text">
                            
                        </p>

                        <!-- Descargar -->
                       
                        </a>

                    </div>
                </div>
            </div>
        @endforeach
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>