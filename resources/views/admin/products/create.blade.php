@extends('layouts.admin')

@section('content')

<h1 class="title fade-in">Crear Producto</h1>

<form action="{{ route('products.store') }}" method="POST" class="admin-form fade-in">
    @csrf

    <div class="form-grid">

        <div class="form-group">
            <label>Nombre</label>
            <input type="text" name="name" required>
        </div>

        <div class="form-group">
            <label>Precio</label>
            <input type="number" name="price" step="0.01" required>
        </div>

        <div class="form-group">
            <label>Precio con descuento</label>
            <input type="number" name="sale_price" step="0.01">
        </div>

        <div class="form-group">
            <label>Presentación</label>
            <input type="text" name="presentation">
        </div>

        <div class="form-group">
            <label>Tipo Mascota</label>
            <select name="pet_type" required>
                <option value="">Seleccione</option>
                <option value="dog">Perro</option>
                <option value="cat">Gato</option>
            </select>
        </div>

        <div class="form-group">
            <label>Categoría</label>
            <select name="category_id" required>
                <option value="">Seleccione</option>
                <option value="1">Alimentos</option>
                <option value="2">Aseo</option>
                <option value="3">Accesorios</option>
                <option value="4">Medicina</option>
            </select>
        </div>

        <div class="form-group full">
            <label>Descripción</label>
            <textarea name="description" rows="3"></textarea>
        </div>

        <div class="form-group full">
            <label>Imagen</label>
            <input type="text" name="image">
        </div>

        <div class="form-group checkbox">
            <label>
                <input type="checkbox" name="is_featured" value="1">
                Producto destacado
            </label>
        </div>

    </div>

    <button type="submit">Guardar Producto</button>

    <a href="{{ route('products.index') }}" class="btn-back">
        Volver
    </a>



</form>
@endsection