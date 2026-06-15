@extends('layouts.app')

@section('content')

<div class="checkout-success">

    <h1 class="title-checkout">¡Gracias por tu compra!</h1>

    <p>
        Tu pedido fue registrado exitosamente.
    </p>

    <p>
        Número de pedido:
        <strong>#{{ rand(100000,999999) }}</strong>
    </p>

    <a
        href="{{ route('home') }}"
        class="btn-comprar">

        Volver al inicio

    </a>

</div>

@endsection