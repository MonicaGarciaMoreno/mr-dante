@extends('layouts.admin')

@section('content')

<h1>Productos - Admin Señor Dante 😌</h1>

<a href="{{ route('products.create') }}">
    Crear producto
</a>

<hr>

@forelse($products as $product)

<div style="margin-bottom:20px;">

    <h2>{{ $product->name }}</h2>

    <p>{{ $product->description }}</p>

    <p>
        Precio:
        ${{ number_format($product->price, 2) }}
    </p>

    <p>
        Tipo mascota:
        {{ $product->pet_type }}
    </p>

    @if($product->image)

    <img
        src="{{ asset('images/products/' . $product->image) }}"
        width="120">

    @endif

    <br><br>

    <a href="{{ route('products.edit', $product->id) }}">
        Editar
    </a>

    &nbsp;

    <form
        action="{{ route('products.destroy', $product->id) }}"
        method="POST"
        style="display:inline;">

        @csrf
        @method('DELETE')

        <button
            type="submit"
            onclick="return confirm('¿Deseas eliminar este producto?')">

            Eliminar

        </button>

    </form>

</div>

<hr>

@empty

<p>No hay productos registrados.</p>

@endforelse

@endsection