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

<h2 class="categoria-titulo">
    {{ $categories[$category] ?? 'Productos' }}
    para {{ $pet == 'dog' ? 'perros 🐶' : 'gatos 🐱' }}
</h2>

<div class="productos-grid">

    @forelse ($products as $product)

    <div class="producto-card">

        <img src="{{ asset('images/products/' . $product->image) }}">

        <h3>{{ $product->name }}</h3>

        <p>{{ $product->description }}</p>

        <strong>Tamaños:</strong>

        <ul>
            @foreach ($product->variants as $variant)
            <li>{{ $variant->size }}</li>
            @endforeach
        </ul>

        <button>Ver producto</button>

    </div>

    @empty

    <p>No hay productos disponibles en esta categoría.</p>

    @endforelse

</div>

@endsection