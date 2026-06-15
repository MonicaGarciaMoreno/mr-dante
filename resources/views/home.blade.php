@extends('layouts.app')

@section('content')

{{-- 🐶🐱 Selección inicial --}}
@if(!$pet)

@endif


{{-- 🧱 Categorías --}}
@if($pet)

<section class="fade-down">

    <h1 class="categoria-titulo title">Categorías para {{ $pet == 'dog' ? 'perros' : 'gatos' }}</h1>

    <div class="categorias-grid">

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

    <h1 class="title">Productos destacados</h1>

    <div class="productos-grid">
        @foreach($featuredProducts as $product)
        <div class="producto-card">
            <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->name }}">

            <p style="font-weight: 600;">{{ $product->name }}</p>

            <p class="precio">
                <span style="text-decoration: line-through; color: #888;">
                    ${{ number_format($product->price, 0, ',', '.') }}
                </span>
                <br>
                ${{ number_format($product->sale_price, 0, ',', '.') }}
            </p>

            @if($product->presentation)
            <p class="detalle-tamano-label" style="margin-bottom: 20px;">
                Presentación:
                <span>{{ $product->presentation }}</span>
            </p>
            @endif

            <button onclick="window.location.href='/producto/{{ $product->id }}'">
                Ver producto
            </button>
        </div>
        @endforeach

    </div>

    <div class="flex flex-col items-center text-center gap-3 mt-10">

        {{ $featuredProducts->links() }}

        Mostrando {{ $featuredProducts->firstItem() }}
        a {{ $featuredProducts->lastItem() }}
        de {{ $featuredProducts->total() }} resultados

    </div>

</section>

{{-- 📝 Blog --}}
<section class="home-blog">

    <a href="https://blog.puppis.com.co/" target="_blank" rel="noopener noreferrer" class="blog-link">
        <div class="blog-header">

            <img src="/images/icon-blog.png" class="blog-icon" alt="Ir al blog de Puppis">

            <h2>Blog</h2>

            <p class="blog-subtitulo">
                ¡Consejos y curiosidades sobre tus mascotas!
            </p>

        </div>
    </a>

</section>


@endsection