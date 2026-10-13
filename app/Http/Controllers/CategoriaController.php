<?php

namespace App\Http\Controllers;
use App\Models\Categoria;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        dd($categorias);
    }

    public function equipos()
    {
        $categoria = Categoria::find(1);
        $equipos = $categoria->equipos;
        dd($equipos);
    }
}
