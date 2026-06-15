@extends('layouts.admin')

@section('content')

<h1 class="title fade-in">Editar Producto</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST" class="admin-form fade-in">

    @csrf
    @method('PUT')

    <div class="form-grid">

        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="name" value="{{ $product->name }}" required>
        </div>

        <div class="form-group">
            <label>Precio</label>
            <input type="number" name="price" step="0.01" value="{{ $product->price }}" required>
        </div>

        <div class="form-group">
            <label>Precio con descuento</label>
            <input type="number" name="sale_price" step="0.01" value="{{ $product->sale_price }}">
        </div>

        <div class="form-group">
            <label>Presentación</label>
            <input type="text" name="presentation" value="{{ $product->presentation }}">
        </div>

        <div class="form-group">
            <label>Tipo Mascota</label>
            <select name="pet_type" required>
                <option value="">Seleccione</option>
                <option value="dog" {{ $product->pet_type == 'dog' ? 'selected' : '' }}>Perro</option>
                <option value="cat" {{ $product->pet_type == 'cat' ? 'selected' : '' }}>Gato</option>
            </select>
        </div>

        <div class="form-group">
            <label>Categoría</label>
            <select name="category_id" required>
                <option value="">Seleccione</option>
                <option value="1" {{ $product->category_id == 1 ? 'selected' : '' }}>Alimentos</option>
                <option value="2" {{ $product->category_id == 2 ? 'selected' : '' }}>Aseo</option>
                <option value="3" {{ $product->category_id == 3 ? 'selected' : '' }}>Accesorios</option>
                <option value="4" {{ $product->category_id == 4 ? 'selected' : '' }}>Medicina</option>
            </select>
        </div>

        <div class="form-group full">
            <label>Descripción</label>
            <textarea name="description" rows="3">{{ $product->description }}</textarea>
        </div>

        <div class="form-group full">
            <label>Imagen</label>
            <input type="text" name="image" value="{{ $product->image }}">
        </div>

        <div class="form-group checkbox">
            <label>
                <input type="checkbox" name="is_featured" value="1" {{ $product->is_featured ? 'checked' : '' }}>
                Producto destacado
            </label>
        </div>

    </div>

    <button type="submit">Actualizar Producto</button>

    <a href="{{ route('products.index') }}" class="btn-back">
        Cancelar
    </a>

</form>

@endsection