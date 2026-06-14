@extends('layouts.app')

@section('content')

<div class="checkout-container">

    <h1>Finalizar compra</h1>

    <form
        action="{{ route('checkout.store') }}"
        method="POST"
        class="checkout-form">

        @csrf

        <div class="form-group">
            <label>Nombre completo</label>
            <input type="text" name="name" required>
        </div>

        <div class="form-group">
            <label>Teléfono</label>
            <input type="text" name="phone" required>
        </div>

        <div class="form-group">
            <label>Dirección</label>
            <input type="text" name="address" required>
        </div>

        <div class="form-group">
            <label>Ciudad</label>
            <input type="text" name="city" required>
        </div>

        <button type="submit" class="btn-comprar">
            Confirmar compra
        </button>

    </form>

</div>

@endsection