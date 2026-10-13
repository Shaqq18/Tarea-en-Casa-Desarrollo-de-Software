<?php

namespace App\Http\Controllers;

use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        dd($empleados);
    }

    
    public function alquileres()
    {
        $empleado = Empleado::find(2);
        $alquileres = $empleado->alquileres;
        dd($alquileres);
    }
}