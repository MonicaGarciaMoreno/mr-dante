<h1>Crear Producto</h1>

<form action="{{ route('products.store') }}" method="POST">

    @csrf

    <div>
        <label>Nombre</label>
        <br>

        <input
            type="text"
            name="name"
            required>
    </div>

    <br>

    <div>
        <label>Descripción</label>
        <br>

        <textarea
            name="description"
            rows="5"></textarea>
    </div>

    <br>

    <div>
        <label>Tipo Mascota</label>
        <br>

        <select name="pet_type" required>

            <option value="">
                Seleccione
            </option>

            <option value="dog">
                Perro
            </option>

            <option value="cat">
                Gato
            </option>

        </select>
    </div>

    <br>

    <div>
        <label>Categoría</label>
        <br>

        <select name="category_id" required>

            <option value="">
                Seleccione
            </option>

            <option value="1">
                Alimentos
            </option>

            <option value="2">
                Aseo
            </option>

            <option value="3">
                Accesorios
            </option>

            <option value="4">
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
            placeholder="dog-food.webp">
    </div>

    <br>

    <div>

        <label>

            <input
                type="checkbox"
                name="is_featured"
                value="1">

            Producto destacado

        </label>

    </div>

    <br>

    <button type="submit">
        Guardar Producto
    </button>

</form>