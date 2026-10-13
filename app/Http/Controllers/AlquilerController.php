<?php

namespace App\Http\Controllers;

use App\Models\Alquiler;

class AlquilerController extends Controller
{
    public function index()
    {
        $alquileres = Alquiler::all();
        dd($alquileres);
    }

    // Relaciones belongsTo: alquiler -> cliente y empleado
    public function conClienteYEmpleado()
    {
        $alquileres = Alquiler::with(['cliente', 'empleado'])->get();
        dd($alquileres);
    }

    // Relación hasMany: alquiler -> detalles (con el equipo de cada detalle)
    public function detalles()
    {
        $alquiler = Alquiler::with('detalles.equipo')->find(1);
        dd($alquiler);
    }
}