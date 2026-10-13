<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $fillable = ['categoria_id', 'codigo', 'nombre', 'descripcion',
        'marca', 'precio_dia', 'estado'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function detalles()
    {
        return $this->hasMany(AlquilerDetalle::class, 'equipo_id');
    }
}
