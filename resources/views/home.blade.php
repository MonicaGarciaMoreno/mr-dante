@extends('layouts.app')

@section('content')

<section class="home-categorias">

    <h2>Categorías</h2>

    <div class="categorias-grid">

        <div class="categoria-card">
            <img src="/images/categories/food-category.png">
            <p>Alimentos</p>
        </div>

        <div class="categoria-card">
            <img src="/images/categories/toilet-category.png">
            <p>Aseo</p>
        </div>

        <div class="categoria-card">
            <img src="/images/categories/accessories-category.png">
            <p>Accesorios</p>
        </div>

        <div class="categoria-card">
            <img src="/images/categories/medicine-category.png">
            <p>Medicinas</p>
        </div>

    </div>

</section>


<section class="home-destacados">

    <h2>Productos destacados</h2>

    <div class="productos-grid">

        <div class="producto-card">
            <img src="/images/products/cat-food.webp">
            <p>Comida para gato Hills<br>Optimal Care Adulto</p>
            <p class="precio">$129.700</p>
            <button>Agregar al carrito</button>
        </div>

        <div class="producto-card">
            <img src="/images/products/dog-food.webp">
            <p>Comida Perro Hills Ob<br>Adulto Razas Medianas</p>
            <p class="precio">$137.800</p>
            <button>Agregar al carrito</button>
        </div>

        <div class="producto-card">
            <img src="/images/products/cat-snack.webp">
            <p>Agility Gold Gatitos</p>
            <p class="precio">$17.400</p>
            <button>Agregar al carrito</button>
        </div>

    </div>

</section>

<section class="home-blog">

    <div class="blog-header">

        <img src="/images/icon-blog.png" class="blog-icon">

        <h2>Blog</h2>

        <p class="blog-subtitulo">
            ¡Consejos y curiosidades sobre tus mascotas!
        </p>

    </div>

</section>



@endsection