@extends('layouts.app')

@section('content')

<div class="detalle-producto-container">

    <div class="detalle-producto-card">

        <div class="detalle-producto-img">
            <img
                src="{{ asset('images/products/' . $product->image) }}"
                alt="{{ $product->name }}">
        </div>

        <div class="detalle-producto-info">

            <h1>{{ $product->name }}</h1>

            <p class="detalle-precio">
                ${{ number_format($product->price, 0, ',', '.') }}
            </p>

            @if($product->presentation)
            <p class="detalle-tamano-label">
                Presentación:
                <span>{{ $product->presentation }}</span>
            </p>
            @endif

            <div class="detalle-compra">

                <div class="cantidad-control">
                    <button type="button" id="decrease-btn">-</button>
                    <span id="quantity-value">1</span>
                    <button type="button" id="increase-btn">+</button>
                </div>

            </div>

            <div>
                <form action="{{ route('cart.add', $product->id) }}" method="POST">

                    @csrf

                    <input
                        type="hidden"
                        name="quantity"
                        id="quantity-input"
                        value="1">

                    <button type="submit" class="btn-comprar">
                        Agregar al carrito
                    </button>

                </form>
            </div>

            <div class="detalle-descripcion-box">
                <h3>Descripción</h3>
                <p>{{ $product->description }}</p>
            </div>

            <a href="{{ url()->previous() }}" class="btn-volver">
                Volver
            </a>

        </div>

    </div>

</div>

<script>
    const decreaseBtn = document.getElementById('decrease-btn');
    const increaseBtn = document.getElementById('increase-btn');
    const quantityValue = document.getElementById('quantity-value');
    const quantityInput = document.getElementById('quantity-input');

    let quantity = 1;

    increaseBtn.addEventListener('click', () => {
        quantity++;
        quantityValue.textContent = quantity;
        quantityInput.value = quantity;
    });

    decreaseBtn.addEventListener('click', () => {
        if (quantity > 1) {
            quantity--;
            quantityValue.textContent = quantity;
            quantityInput.value = quantity;
        }
    });
</script>

@endsection