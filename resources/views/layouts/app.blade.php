<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Señor Dante</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        /* NAVBAR */

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            background: #f3f3f3;
        }

        .navbar img {
            height: 40px;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .login-btn {
            background: #2d0c57;
            color: white;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
        }

        .cart {
            font-size: 22px;
        }

        /* BANNER */

        .banner {
            background: #8e79c6;
            padding: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 40px;
        }

        .banner img {
            height: 140px;
        }

        .banner-text {
            text-align: center;
        }

        .banner-text h1 {
            margin: 0;
            font-size: 32px;
        }

        .banner-text p {
            margin-top: 10px;
            font-size: 18px;
        }

        /* CATEGORIAS */

        .categories {
            display: flex;
            justify-content: center;
            gap: 80px;
            padding: 20px;
            background: #e5e5e5;
        }

        .categories div {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 18px;
        }

        .footer {
            background: #0b1325;
            color: white;
            padding-top: 50px;
        }

        .footer-container {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            padding: 0 60px 40px 60px;
        }

        .footer-logo img {
            width: 140px;
        }

        .footer-contact h3,
        .footer-links h3 {
            color: #b48cf2;
            margin-bottom: 10px;
        }

        .footer-contact p,
        .footer-links p {
            margin: 5px 0;
            font-size: 15px;
        }

        .footer-bottom {
            text-align: center;
            color: #b48cf2;
            padding: 20px;
            font-size: 14px;
        }

        /* HOME CATEGORIAS */

        .home-categorias {
            padding: 60px 10%;
            text-align: center;
        }

        .home-categorias h2 {
            margin-bottom: 40px;
        }

        .categorias-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }

        .categoria-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .categoria-card img {
            width: 80px;
        }

        .categoria-card p {
            margin-top: 10px;
            font-weight: bold;
        }

        /* PRODUCTOS DESTACADOS */

        .home-destacados {
            padding: 60px 10%;
            background: #f5f5f5;
        }

        .home-destacados h2 {
            text-align: center;
            margin-bottom: 40px;
        }

        .productos-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
        }

        .producto-card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
        }

        .producto-card img {
            width: 140px;
            margin-bottom: 15px;
        }

        .precio {
            font-weight: bold;
            margin: 10px 0;
        }

        .producto-card button {
            background: #2d0c57;
            color: white;
            border: none;
            padding: 10px 18px;
            border-radius: 6px;
            cursor: pointer;
        }

        .producto-card button:hover {
            background: #1e083b;
        }

        .home-blog {
            padding: 60px 10%;
        }

        .blog-header {
            text-align: center;
        }

        .blog-icon {
            width: 140px;
            margin-bottom: 10px;
        }

        .blog-subtitulo {
            color: #666;
            margin-top: 10px;
        }
    </style>

</head>

<body>

    <!-- NAVBAR -->
    <div class="navbar">

        <img src="{{ asset('images/logo-cat.png') }}" alt="logo">

        <div class="nav-right">
            <a href="#" class="login-btn">Iniciar sesión</a>
            <span class="cart">🛒</span>
        </div>

    </div>


    <!-- BANNER -->

    <div class="banner">

        <img src="{{ asset('images/cat-banner.png') }}" alt="gato">

        <div class="banner-text">
            <h1>SEÑOR DANTE</h1>
            <p>¡Todo lo que necesita tu mascota!</p>
        </div>

    </div>


    <!-- CATEGORIAS -->

    <div class="categories">

        <div>
            Para tu perro 🐶
        </div>

        <div>
            Para tu gato 🐱
        </div>

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
            © 2025 Señor Dante. Todos los derechos reservados.
        </div>

    </footer>


</body>

</html>