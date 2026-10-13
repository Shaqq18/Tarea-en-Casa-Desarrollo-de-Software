<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        dd($clientes);
    }

    
    public function alquileres()
    {
        $cliente = Cliente::find(1);
        $alquileres = $cliente->alquileres;
        dd($alquileres);
    }
}