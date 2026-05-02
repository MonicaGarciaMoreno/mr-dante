@extends('layouts.app')

@section('content')

<div class="detalle-producto-container">

    <div class="detalle-producto-card">

        <div class="detalle-producto-img">
            <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->name }}">
        </div>

        <div class="detalle-producto-info">

            <h1>{{ $product->name }}</h1>

            <p class="detalle-precio" id="price-selected">
                ${{ number_format($product->variants->first()->price ?? $product->price, 0, ',', '.') }}
            </p>

            @if ($product->variants->count())
            <p class="detalle-tamano-label">
                Tamaño:
                <span id="size-selected">{{ $product->variants->first()->label }}</span>
            </p>

            <div class="detalle-variantes-wrapper">
                <div class="detalle-variantes">
                    @foreach ($product->variants as $index => $variant)
                    <button
                        type="button"
                        class="size-chip {{ $index === 0 ? 'active' : '' }}"
                        data-label="{{ $variant->label }}"
                        data-price="{{ number_format($variant->price, 0, ',', '.') }}">
                        {{ $variant->label }}
                    </button>
                    @endforeach
                </div>
            </div>
            @endif

            <div class="detalle-compra">

                <div class="cantidad-control">
                    <button type="button" id="decrease-btn">-</button>
                    <span id="quantity-value">1</span>
                    <button type="button" id="increase-btn">+</button>
                </div>
            </div>

            <div>
                <button class="btn-comprar">Agregar al carrito</button>
            </div>

            <div class="detalle-descripcion-box">
                <h3>Descripción</h3>
                <p>{{ $product->description }}</p>
            </div>

        </div>

    </div>

</div>

<script>
    // selector de variantes
    const sizeChips = document.querySelectorAll('.size-chip');
    const sizeSelected = document.getElementById('size-selected');
    const priceSelected = document.getElementById('price-selected');

    sizeChips.forEach(chip => {
        chip.addEventListener('click', () => {
            sizeChips.forEach(c => c.classList.remove('active'));
            chip.classList.add('active');

            sizeSelected.textContent = chip.dataset.label;
            priceSelected.textContent = `$${chip.dataset.price}`;
        });
    });

    // contador de cantidad
    const decreaseBtn = document.getElementById('decrease-btn');
    const increaseBtn = document.getElementById('increase-btn');
    const quantityValue = document.getElementById('quantity-value');

    let quantity = 1;

    increaseBtn.addEventListener('click', () => {
        quantity++;
        quantityValue.textContent = quantity;
    });

    decreaseBtn.addEventListener('click', () => {
        if (quantity > 1) {
            quantity--;
            quantityValue.textContent = quantity;
        }
    });
</script>

@endsection