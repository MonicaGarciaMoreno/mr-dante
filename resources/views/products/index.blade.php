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

<h2 class="categoria-titulo title">
    {{ $categories[$category] ?? 'Productos' }}
    para {{ $pet == 'dog' ? 'perros 🐶' : 'gatos 🐱' }}
</h2>

<div class="productos-grid">

    @forelse ($products as $product)

    <div class="producto-card">

        <img src="{{ asset('images/products/' . $product->image) }}">

        <h3>{{ $product->name }}</h3>

        <p>{{ $product->description }}</p>

        @if($product->presentation)
        <p>
            <strong>Presentación:</strong>
            {{ $product->presentation }}
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