<?php

namespace App\Http\Controllers;

use App\Models\Equipo;

class EquipoController extends Controller
{
    public function index()
    {
        $equipos = Equipo::all();
        dd($equipos);
    }

    
    public function conCategoria()
    {
        $equipos = Equipo::with('categoria')->get();
        dd($equipos);
    }

    
    public function detalles()
    {
        $equipo = Equipo::find(1);
        $detalles = $equipo->detalles;
        dd($detalles);
    }
}