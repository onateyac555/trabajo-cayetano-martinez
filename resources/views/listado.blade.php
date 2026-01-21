@extends('layouts.app')
@section('content')
    <h2>Listado de Artículos</h2>
    <table>
        <thead>
            <tr style="background:#eee">
                <th>Descripción</th><th>Stock</th><th>Precio</th><th>Categoría</th><th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $p)
            <tr>
                <td>{{ $p->descripcion }}</td>
                <td>{{ $p->stock }}</td>
                <td>{{ $p->precio }}€</td>
                <td>{{ $p->categoria->nombre ?? 'N/A' }}</td>
                <td>
                    <a href="/productos/editar/{{ $p->id }}" style="color:blue">Modificar</a>
                    <form action="/productos/borrar/{{ $p->id }}" method="POST" style="display:inline">
                        @csrf @method('DELETE')
                        <button type="submit" style="color:red; background:none; border:none; cursor:pointer">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

