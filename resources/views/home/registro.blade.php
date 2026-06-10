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
    
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
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
                <li class="nav-item"><a class="nav-link" href="../pages/inicio.php">Iniciar Sesión</a></li>
                <li class="nav-item"><a class="nav-link" href="../Index.html">¡Regresar al sitio!</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar End -->

    <!-- CONTENIDO -->


<div class="container my-5">
    <div class="row align-items-center">

        <!-- COLUMNA IZQUIERDA (IMAGEN) -->
        <div class="col-lg-6 d-none d-lg-block">
            <a href="https://www.uadec.mx/medicina/" class="box-link">
                <div class="box-img" style="background-image: url('../images/Registro.png');"></div>
            </a>
        </div>

        <!-- COLUMNA DERECHA (FORMULARIO) -->
        <div class="col-lg-6">
            <h1 class="text-center mb-4">
            ¡Registra Tus Datos!
            </h1>

            <div class="formulario">
                <form action="{{ route('registro.guardar') }}"
                    method="POST">

                    @csrf
                    <!-- TU FORMULARIO IGUAL -->
                    <div>
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Escribir nombre completo">
                    </div>
                    <div>
                        <label for="nombre">Profesión:</label>
                        <input type="text" id="matricula" name="matricula" class="form-control" placeholder="Profesión o especialidad">
                    </div>
                    <div>
                        <label for="rfc">Teléfono:</label>
                        <input type="text" id="telefono" name="telefono" class="form-control" placeholder="Número de teléfono">
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email" class="form-control" placeholder="Correo electrónico válido">
                    </div>
                    <div class="password-container">
                        <input type="password"
                            id="password1"
                            name="password1"
                            class="form-control password-input"
                            placeholder="Crear contraseña 8 dígitos">

                        <span class="toggle-password" onclick="togglePassword('password1', this)">
                            👁️
                        </span>
                    </div>
                    <div class="password-container">
                        <input type="password"
                            id="password2"
                            name="password2"
                            class="form-control password-input"
                            placeholder="Confirmar contraseña">
                    </div>
                    <button type="submit" class="boton">Registrar</button>
                </form>
            </div>
        </div>

    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
toastr.options = {
    closeButton: true,
    progressBar: true,
    positionClass: "toast-top-right",
    timeOut: "2000"
};

function mostrarToastr(tipo, mensaje, titulo) {
    if ($('.toast').length > 0) return;

    toastr[tipo](mensaje, titulo);
}

$('#registerForm').submit(function(event) {
    event.preventDefault(); 

    var isValid = true;
    var firstEmptyField = null; 
    var hasFilledField = false; 

    $('#registerForm input').each(function() {
        if ($(this).val() === '') {
            if (!firstEmptyField) {
                firstEmptyField = $(this); 
            }
            isValid = false;
        } else {
            hasFilledField = true; 
        }
    });

    if (!hasFilledField) {
        mostrarToastr('warning', 'Completa todos los campos', 'Advertencia');
        return; 
    }

    if (!isValid) {
        mostrarToastr('info', 'Por favor, completa el siguiente campo.', 'Advertencia');
        firstEmptyField.focus(); 
        return; 
    }

    var password1 = $('#password1').val();
    var password2 = $('#password2').val();

     if (password1.length < 8) {
    mostrarToastr('warning', 'La contraseña debe tener al menos 8 caracteres', 'Advertencia');
    return;
    }

    if (password1 !== password2) {
        mostrarToastr('error', 'Las contraseñas no coinciden', 'Error');
        return;
    }

    var email = $('#email').val();

    if (faltaArroba(email)) {
        mostrarToastr('warning', 'Incluye una dirección de correo válida con @', 'Advertencia');
        return;
    }

    $.post('', $(this).serialize())
        .done(function(response) {
            mostrarToastr('success', 'Registro Exitoso', 'Bienvenido');
            $('#registerForm')[0].reset();
        });
});

</script>

<script>
const inputNombre = document.getElementById('nombre');

inputNombre.addEventListener('input', function () {
    // Solo letras y espacios (incluye acentos)
    let valor = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ\s]/g, '');

    // Convertir todo a minúsculas primero
    valor = valor.toLowerCase();

    // Capitalizar SOLO la primera letra de cada palabra
    valor = valor
        .split(' ')
        .map(palabra => {
            if (palabra.length === 0) return '';
            return palabra.charAt(0).toUpperCase() + palabra.slice(1);
        })
        .join(' ');

    this.value = valor;
});
</script>

<script>
const inputTelefono = document.getElementById('telefono');

inputTelefono.addEventListener('input', function () {
    // Permitir solo números y espacios
    let valor = this.value.replace(/[^0-9 ]/g, '');

    // Quitar espacios para procesar
    let numeros = valor.replace(/\s/g, '');

    // Limitar a 10 dígitos (México)
    numeros = numeros.substring(0, 10);

    let formateado = '';

    // LADA (3)
    if (numeros.length > 0) {
        formateado = numeros.substring(0, 3);
    }

    // Número local (3)
    if (numeros.length > 3) {
        formateado += ' ' + numeros.substring(3, 6);
    }

    // Número local (4)
    if (numeros.length > 6) {
        formateado += ' ' + numeros.substring(6, 10);
    }

    this.value = formateado.trim();
});
</script>

<script>
const inputEmail = document.getElementById('email');

inputEmail.addEventListener('input', function () {
    // Convertir todo a minúsculas automáticamente
    this.value = this.value.toLowerCase();
});
function faltaArroba(email) {
    return !email.includes('@');
}
</script>


<script>
function togglePassword(id, icon) {
    const input = document.getElementById(id);

    if (input.type === "password") {
        input.type = "text";
        icon.textContent = "---";
    } else {
        input.type = "password";
        icon.textContent = "👁️";
    }
}
</script>

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