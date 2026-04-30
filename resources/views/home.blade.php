@extends('layouts.app')

@section('content')

{{-- 🐶🐱 Selección inicial --}}
@if(!$pet)

@endif


{{-- 🧱 Categorías --}}
@if($pet)

<section class="cfade-in">

    <h2 class="categoria-titulo">Categorías para {{ $pet == 'dog' ? 'perros' : 'gatos' }}</h2>

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
        @foreach($featuredProducts as $product)
        <div class="producto-card">
            <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->name }}">

            <p>{{ $product->name }}</p>

            <p class="precio">
                <span style="text-decoration: line-through; color: #888;">
                    ${{ number_format($product->price, 0, ',', '.') }}
                </span>
                <br>
                ${{ number_format($product->sale_price, 0, ',', '.') }}
            </p>

            <button>Ver producto</button>
        </div>
        @endforeach

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