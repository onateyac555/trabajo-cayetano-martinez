@extends('layouts.app')

@section('content')
    <h2 style="text-align: center;">Modificar Producto</h2>
    <div style="max-width: 500px; margin: auto; background: #f9f9f9; padding: 20px; border-radius: 8px;">
        <form action="/productos/actualizar/{{ $producto->id }}" method="POST">
            @csrf
            @method('PUT')
            <p>Descripción:<br>
            <input type="text" name="descripcion" value="{{ $producto->descripcion }}" style="width: 100%; padding: 8px;"></p>
            <p>Stock:<br>
            <input type="number" name="stock" value="{{ $producto->stock }}" style="width: 100%; padding: 8px;"></p>
            <p>Precio:<br>
            <input type="number" step="0.01" name="precio" value="{{ $producto->precio }}" style="width: 100%; padding: 8px;"></p>
            <p>Categoría:<br>
            <select name="categoria_id" style="width: 100%; padding: 8px;">
                @foreach($categorias as $cat)
                    <option value="{{ $cat->id }}" {{ $producto->categoria_id == $cat->id ? 'selected' : '' }}>
                        {{ $cat->nombre }}
                    </option>
                @endforeach
            </select></p>
            <button type="submit" class="btn" style="width: 100%; margin-top: 10px;">Guardar Cambios</button>
        </form>
    </div>
@endsection
