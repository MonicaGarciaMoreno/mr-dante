<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Señor Dante</title>

    <link rel="icon" href="{{ asset('images/logo-cat.png') }}" type="image/png">

    {{-- Estilos --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    {{-- Fuente --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    {{-- Vite --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <!-- NAVBAR -->
    <div class="navbar">

        <div class="brand">

            <a href="{{ url('/') }}" class="brand-link">

                <img src="{{ asset('images/logo-cat.png') }}" alt="logo">

                <span class="brand-name">
                    Señor Dante
                </span>

            </a>

        </div>

        <div class="search-bar" style="visibility: hidden;">

            <input
                type="text"
                id="search-input"
                placeholder="Buscar productos...">

            <div id="search-results" class="search-results"></div>

        </div>

        <div class="nav-right">

            @guest
            <a href="{{ route('login') }}" class="login-btn">
                Iniciar sesión
            </a>

            <a href="{{ route('register') }}" class="login-btn">
                Registrarse
            </a>
            @endguest

            @auth
            <a href="{{ route('dashboard') }}" class="login-btn">
                Mi cuenta
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="login-btn">
                    Cerrar sesión
                </button>
            </form>
            @endauth

            <span class="cart">🛒</span>

        </div>

    </div>

    <!-- CONTENIDO LOGIN / REGISTRO -->
    <div style="padding:40px; min-height:60vh;">

        <div class="w-full sm:max-w-md mx-auto bg-white shadow-md overflow-hidden sm:rounded-lg p-6">
            {{ $slot }}
        </div>

    </div>

    <!-- FOOTER -->
    <footer class="footer">

        <div class="footer-container">

            <div class="footer-logo">

                <a href="{{ url('/') }}">
                    <img src="{{ asset('images/paw-footer.png') }}" alt="paw">
                </a>

            </div>

            <div class="footer-contact">

                <h3>CONTACTO</h3>

                <p>Correo electrónico: contacto@mrdante.com</p>

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