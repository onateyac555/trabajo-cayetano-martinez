<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['descripcion', 'stock', 'precio', 'categoria_id'];

    // Esto es para la mejora: Relación con categorías
    public function categoria() {
        return $this->belongsTo(Categoria::class);
    }
}
