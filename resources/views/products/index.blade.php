@extends('layouts.app')

@section('content')

<h1>Productos</h1>

@foreach ($products as $product)

    <h2>{{ $product->name }}</h2>

    <img src="{{ asset('images/products/' . $product->image) }}" width="200">

    <p>{{ $product->description }}</p>

    <strong>Tamaños disponibles:</strong>

    <ul>
        @foreach ($product->variants as $variant)
            <li>{{ $variant->size }}</li>
        @endforeach
    </ul>

@endforeach

@endsection