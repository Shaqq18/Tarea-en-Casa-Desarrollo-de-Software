<?php

namespace App\Http\Controllers;

use App\Models\AlquilerDetalle;

class AlquilerDetalleController extends Controller
{
    public function index()
    {
        $detalles = AlquilerDetalle::all();
        dd($detalles);
    }

    // Relaciones belongsTo: detalle -> alquiler y equipo
    public function conRelaciones()
    {
        $detalles = AlquilerDetalle::with(['alquiler', 'equipo'])->get();
        dd($detalles);
    }
}