<h1>Editar Producto</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST">

    @csrf
    @method('PUT')

    <div>
        <label>Nombre</label>
        <br>

        <input
            type="text"
            name="name"
            value="{{ $product->name }}"
            required>
    </div>

    <br>

    <div>
        <label>Descripción</label>
        <br>

        <textarea
            name="description"
            rows="5">{{ $product->description }}</textarea>
    </div>

    <br>

    <div>
        <label>Tipo Mascota</label>
        <br>

        <select name="pet_type" required>

            <option value="dog"
                {{ $product->pet_type == 'dog' ? 'selected' : '' }}>
                Perro
            </option>

            <option value="cat"
                {{ $product->pet_type == 'cat' ? 'selected' : '' }}>
                Gato
            </option>

        </select>
    </div>

    <br>

    <div>
        <label>Categoría</label>
        <br>

        <select name="category_id" required>

            <option value="1"
                {{ $product->category_id == 1 ? 'selected' : '' }}>
                Alimentos
            </option>

            <option value="2"
                {{ $product->category_id == 2 ? 'selected' : '' }}>
                Aseo
            </option>

            <option value="3"
                {{ $product->category_id == 3 ? 'selected' : '' }}>
                Accesorios
            </option>

            <option value="4"
                {{ $product->category_id == 4 ? 'selected' : '' }}>
                Medicina
            </option>

        </select>

    </div>

    <br>

    <div>
        <label>Imagen</label>
        <br>

        <input
            type="text"
            name="image"
            value="{{ $product->image }}">
    </div>

    <br>

    <div>

        <label>

            <input
                type="checkbox"
                name="is_featured"
                value="1"
                {{ $product->is_featured ? 'checked' : '' }}>

            Producto destacado

        </label>

    </div>

    <br>

    <button type="submit">
        Actualizar Producto
    </button>

</form>