@extends('layouts.app')

@section('content')
    <h2>Listado Filtrado por Categoría</h2>

    <form action="/productos/filtrar" method="GET" style="margin-bottom: 20px;">
        <label>Selecciona Categoría:</label>
        <select name="categoria_id" onchange="this.form.submit()">
            <option value="">-- Todas las categorías --</option>
            @foreach($categorias as $cat)
                <option value="{{ $cat->id }}" {{ request('categoria_id') == $cat->id ? 'selected' : '' }}>
                    {{ $cat->nombre }}
                </option>
            @endforeach
        </select>
    </form>

    @if(count($productos) > 0)
        <table border="1" style="width:100%; border-collapse: collapse;">
            <tr style="background: #eee;">
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
            @foreach($productos as $p)
            <tr>
                <td>{{ $p->descripcion }}</td>
                <td>{{ $p->precio }}€</td>
                <td>{{ $p->stock }}</td>
            </tr>
            @endforeach
        </table>
    @else
        <p>Selecciona una categoría para ver sus productos.</p>
    @endif
@endsection
