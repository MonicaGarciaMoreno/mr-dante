@extends('layouts.app')

@section('content')

@php
$categories = [
1 => 'Alimentos',
2 => 'Aseo',
3 => 'Accesorios',
4 => 'Medicinas'
];
@endphp

<h2 class="categoria-titulo title fade-in">
    {{ $categories[$category] ?? 'Productos' }}
    para {{ $pet == 'dog' ? 'perros 🐶' : 'gatos 🐱' }}
</h2>

<div class="productos-grid fade-in">

    @forelse ($products as $product)

    <div class="producto-card">

        <img
            src="{{ asset('images/products/' . $product->image) }}"
            alt="{{ $product->name }}">

        <p style="font-weight: 600;">{{ $product->name }}</p>

        <p class="precio">

            @if($product->sale_price)

            <span style="text-decoration: line-through; color: #888;">
                ${{ number_format($product->price, 0, ',', '.') }}
            </span>

            <br>

            ${{ number_format($product->sale_price, 0, ',', '.') }}

            @else

            ${{ number_format($product->price, 0, ',', '.') }}

            @endif

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

    @empty

    <p>No hay productos disponibles en esta categoría.</p>

    @endforelse

</div>

<a href="{{ url()->previous() }}" class="btn-volver">
    Volver
</a>

<div class="flex flex-col items-center text-center gap-3 mt-10">

    {{-- PAGINACIÓN ARRIBA --}}
    <div>
        {{ $products->links() }}
    </div>

    {{-- TEXTO ABAJO --}}
    <div class="text-sm text-gray-600">
        Mostrando {{ $products->firstItem() }} a {{ $products->lastItem() }}
        de {{ $products->total() }} resultados
    </div>

</div>

@endsection