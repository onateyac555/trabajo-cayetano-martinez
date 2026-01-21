<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoController extends Controller
{
    public function create() {
        return view('crear');
    }

    public function store(Request $request) {
        $producto = new Producto();
        $producto->descripcion = $request->descripcion;
        $producto->stock = $request->stock;
        $producto->precio = $request->precio;
        $producto->categoria_id = $request->categoria_id;
        $producto->save();
        return redirect('/productos')->with('mensaje', 'Producto guardado');
    }

    public function index() {
        $productos = Producto::with('categoria')->get();
        return view('listado', compact('productos'));
    }

    // OPCIÓN 4: Listado Filtrado
    public function filtrado(Request $request) {
        $categorias = Categoria::all();
        $productos = [];
        if ($request->has('categoria_id') && $request->categoria_id != "") {
            $productos = Producto::where('categoria_id', $request->categoria_id)->get();
        }
        return view('filtrado', compact('categorias', 'productos'));
    }

    // OPCIÓN 5: Borrado
    public function destroy($id) {
        Producto::destroy($id);
        return back();
    }



// Muestra el formulario con los datos viejos del producto
public function edit($id) {
    $producto = Producto::findOrFail($id);
    $categorias = Categoria::all();
    return view('editar', compact('producto', 'categorias'));
}

// Guarda los cambios nuevos en la base de datos
public function update(Request $request, $id) {
    $producto = Producto::findOrFail($id);
    $producto->update($request->all());
    return redirect('/productos')->with('mensaje', 'Producto actualizado');
}




}
