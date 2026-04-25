@extends('layouts.app')

@section('content')

{{-- 🐶🐱 Selección inicial --}}
@if(!$pet)

@endif


{{-- 🧱 Categorías --}}
@if($pet)

<section class="cfade-in">

    <h2>Categorías para {{ $pet == 'dog' ? 'perros' : 'gatos' }}</h2>

    <div class="categorias-grid fade-in">

        <a href="{{ url('/productos/' . $pet . '/1') }}" class="categoria-card">
            <img src="/images/categories/food-category.png">
            <p>Alimentos</p>
        </a>

        <a href="{{ url('/productos/' . $pet . '/2') }}" class="categoria-card">
            <img src="/images/categories/toilet-category.png">
            <p>Aseo</p>
        </a>

        <a href="{{ url('/productos/' . $pet . '/3') }}" class="categoria-card">
            <img src="/images/categories/accessories-category.png">
            <p>Accesorios</p>
        </a>

        <a href="{{ url('/productos/' . $pet . '/4') }}" class="categoria-card">
            <img src="/images/categories/medicine-category.png">
            <p>Medicinas</p>
        </a>

    </div>

</section>

@endif


{{-- ⭐ Productos destacados --}}
<section class="home-destacados fade-in">

    <h2>Productos destacados</h2>

    <div class="productos-grid">

        <div class="producto-card">
            <img src="/images/products/cat-food.webp">
            <p>Comida para gato Hills<br>Optimal Care Adulto</p>
            <p class="precio">$129.700</p>
            <button>Ver producto</button>
        </div>

        <div class="producto-card">
            <img src="/images/products/dog-food.webp">
            <p>Comida Perro Hills Ob<br>Adulto Razas Medianas</p>
            <p class="precio">$137.800</p>
            <button>Ver producto</button>
        </div>

        <div class="producto-card">
            <img src="/images/products/cat-snack.webp">
            <p>Agility Gold Gatitos</p>
            <p class="precio">$17.400</p>
            <button>Ver producto</button>
        </div>

    </div>

</section>


{{-- 📝 Blog --}}
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