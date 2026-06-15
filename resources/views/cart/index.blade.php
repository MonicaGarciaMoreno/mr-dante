@extends('layouts.app')

@section('content')

<div class="cart-page fade-in">

    <h1 class="title-cart">Mi carrito</h1>

    @if(count($cart) > 0)

    @php
    $total = 0;
    @endphp

    <div class="cart-table-header">
        <div style="padding-left: 100px;">Producto</div>
        <div>Precio</div>
        <div>Cantidad</div>
        <div>Total</div>
    </div>

    @foreach($cart as $item)

    @php
    $subtotal = $item['price'] * $item['quantity'];
    $total += $subtotal;
    @endphp

    <div class="cart-row">

        <div class="cart-product">

            <h3>{{ $item['name'] }}</h3>

            <img
                src="{{ asset('images/products/' . $item['image']) }}"
                alt="{{ $item['name'] }}">

            <form
                action="{{ route('cart.remove', $item['id']) }}"
                method="POST">

                @csrf

                <button
                    type="submit"
                    class="cart-remove-btn">
                    Eliminar
                </button>

            </form>

        </div>

        <div class="cart-price">
            ${{ number_format($item['price'], 0, ',', '.') }}
        </div>

        <div class="cart-quantity">
            {{ $item['quantity'] }}
        </div>

        <div class="cart-subtotal">
            ${{ number_format($subtotal, 0, ',', '.') }}
        </div>

    </div>

    @endforeach

    <div class="cart-summary-box" style="margin-bottom: -30px;">

        <h2>Resumen del pedido</h2>

        <div class="summary-line">
            <span>Subtotal productos</span>
            <span>${{ number_format($total, 0, ',', '.') }}</span>
        </div>

        <div class="summary-line">
            <span>Domicilio</span>
            <span>$0</span>
        </div>

        <div class="summary-line total">
            <span>TOTAL</span>
            <span>${{ number_format($total, 0, ',', '.') }}</span>
        </div>

        <a
            href="{{ route('checkout.index') }}"
            class="cart-checkout-btn">
            Pagar ahora
        </a>

    </div>

    @else

    <div class="cart-empty">

        <h3>Tu carrito está vacío</h3>

        <p>Agrega algunos productos para comenzar tu compra.</p>

    </div>


    @endif

</div>

<a href="{{ url()->previous() }}" class="btn-volver">
    Volver
</a>

@endsection