<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AlquilerDetalle extends Model
{
     protected $table = 'alquiler_detalles';

    protected $fillable = ['alquiler_id', 'equipo_id', 'cantidad'];

    public function alquiler(): BelongsTo
    {
        return $this->belongsTo(Alquiler::class, 'alquiler_id');
    }

    public function equipo(): BelongsTo
    {
        return $this->belongsTo(Equipo::class, 'equipo_id');
    }
}
