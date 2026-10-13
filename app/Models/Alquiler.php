<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    protected $table = 'alquileres';

    protected $fillable = [
        'cliente_id', 'empleado_id', 'fecha_solicitud',
        'fecha_inicio', 'fecha_fin', 'estado',
    ];

    public function cliente(): BelongsTo
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function empleado(): BelongsTo
    {
        return $this->belongsTo(Empleado::class, 'empleado_id');
    }

    public function detalles(): HasMany
    {
        return $this->hasMany(AlquilerDetalle::class, 'alquiler_id');
    }
}
