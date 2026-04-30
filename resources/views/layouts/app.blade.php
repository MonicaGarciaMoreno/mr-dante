<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Señor Dante</title>
    <link rel="icon" href="{{ asset('images/logo-cat.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

    <!-- NAVBAR -->
    <div class="navbar">
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/logo-cat.png') }}" alt="logo">
        </a>

        <div class="nav-right">
            <a href="#" class="login-btn">Iniciar sesión</a>
            <span class="cart">🛒</span>
        </div>
    </div>


    <!-- BANNER -->

    <div class="banner">

        <div class="carousel">

            <div class="slide">
                <img src="{{ asset('images/cat-banner.png') }}" alt="gato">
                <div class="banner-text">
                    <h1>SEÑOR DANTE</h1>
                    <p>¡Todo lo que necesita tu mascota!</p>
                </div>
            </div>

            <div class="slide">
                <img src="{{ asset('images/payment-method.png') }}" alt="pago">
                <div class="banner-text">
                    <h1>Paga como prefieras</h1>
                    <p>Paga en línea o contraentrega al recibir tu pedido</p>
                </div>
            </div>

            <div class="slide">
                <img src="{{ asset('images/fast-delivery.png') }}" alt="domicilios">
                <div class="banner-text">
                    <h1>Domicilios en Cali</h1>
                    <p>Enviamos a toda la ciudad</p>
                </div>
            </div>

        </div>

    </div>



    <!-- CATEGORIAS -->

    <div class="categories">

        <a href="{{ url('/') }}">Inicio 🏠</a>

        <a href="{{ url('/home/dog') }}">
            Para tu perro 🐶
        </a>

        <a href="{{ url('/home/cat') }}">
            Para tu gato 🐱
        </a>

    </div>


    <!-- CONTENIDO DE CADA PAGINA -->

    <div style="padding:40px">

        @yield('content')

    </div>

    <footer class="footer">

        <div class="footer-container">

            <div class="footer-logo">
                <img src="{{ asset('images/paw-footer.png') }}" alt="paw">
            </div>

            <div class="footer-contact">
                <h3>CONTACTO</h3>
                <p>Email: contacto@mrdante.com</p>
                <p>Teléfono: +57 300 123 4567</p>
                <p>Dirección: Calle 59C # 56-71 / Cali, Valle del Cauca</p>
            </div>

            <div class="footer-links">
                <h3>ENLACES ÚTILES</h3>
                <p>Políticas de privacidad</p>
                <p>Políticas de envío</p>
            </div>

        </div>

        <div class="footer-bottom">
            © 2026 Señor Dante. Todos los derechos reservados.
        </div>

    </footer>


</body>

</html>