@extends('layouts.admin')

@section('content')

<h1 class="title">
    ¿Deseas agregar un nuevo producto?
</h1>

<div class="admin-actions">

    <a
        href="{{ route('products.create') }}"
        class="admin-btn-create">

        Crear Producto

    </a>

</div>

<h1 class="title">
    Gestiona los productos existentes
</h1>

@forelse($products as $product)

@if($loop->first)
<div class="products-admin-grid">
    @endif

    <div class="product-admin-card">

        @if($product->image)

        <img
            src="{{ asset('images/products/' . $product->image) }}"
            alt="{{ $product->name }}">

        @endif

        <h2>{{ $product->name }}</h2>

        <p>{{ $product->description }}</p>

        <p class="price-normal">
            Precio:
            ${{ number_format($product->price, 2) }}
        </p>

        @if($product->sale_price)

        <p class="price-sale">
            Precio con descuento:
            ${{ number_format($product->sale_price, 2) }}
        </p>

        @endif

        @if($product->presentation)

        <p>

            <span class="presentation-badge">
                {{ $product->presentation }}
            </span>

        </p>

        @endif

        <div class="admin-card-actions">

            <a
                href="{{ route('products.edit', $product->id) }}"
                class="admin-btn">

                Editar

            </a>

            <form
                action="{{ route('products.destroy', $product->id) }}"
                method="POST"
                class="delete-form">

                @csrf
                @method('DELETE')

                <button
                    type="submit"
                    class="admin-btn admin-btn-delete">

                    Eliminar

                </button>

            </form>

        </div>

    </div>

    @if($loop->last)
</div>
@endif

@empty

<p style="text-align:center;">
    No hay productos registrados.
</p>

@endforelse

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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.querySelectorAll('.delete-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            Swal.fire({
                title: '¿Eliminar producto?',
                text: "Esta acción no se puede deshacer",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#dc2626',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar',
                background: '#fff',
                color: '#111',
                customClass: {
                    popup: 'swal-rounded'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });

        });
    });
</script>

@endsection