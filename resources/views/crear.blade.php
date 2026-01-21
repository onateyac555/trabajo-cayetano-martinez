@extends('layouts.app')

@section('content')
    <div style="max-width: 500px; margin: auto; background: #f9f9f9; padding: 20px; border-radius: 8px; border: 1px solid #ddd;">
        <h2>Nuevo Producto de Informática</h2>
        <form action="/productos/guardar" method="POST">
            @csrf
	    <label>Descripción:</label><br>
            <input type="text" name="descripcion" style="width:100%; padding: 8px;" required><br><br>
            <label>Stock:</label><br>
            <input type="number" name="stock" style="width:100%; padding: 8px;" required><br><br>
            <label>Precio:</label><br>
            <input type="number" step="0.01" name="precio" style="width:100%; padding: 8px;" required><br><br>
            <label>Categoría:</label><br>
            <select name="categoria_id" style="width:100%; padding: 8px;">
                <option value="1">Hardware</option>
                <option value="2">Software</option>
                <option value="3">Periféricos</option>
            </select><br><br>

            <button type="submit" class="btn" style="width: 100%;">Grabar Producto</button>
        </form>
    </div>
@endsection
