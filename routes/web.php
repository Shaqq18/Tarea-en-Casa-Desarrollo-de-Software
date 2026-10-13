<?php
use App\Http\Controllers\AlquilerController;
use App\Http\Controllers\AlquilerDetalleController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EquipoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias/equipos', [CategoriaController::class, 'equipos']);

// Clientes
Route::get('/clientes', [ClienteController::class, 'index']);
Route::get('/clientes/alquileres', [ClienteController::class, 'alquileres']);

// Empleados
Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::get('/empleados/alquileres', [EmpleadoController::class, 'alquileres']);

// Equipos
Route::get('/equipos', [EquipoController::class, 'index']);
Route::get('/equipos/categoria', [EquipoController::class, 'conCategoria']);
Route::get('/equipos/detalles', [EquipoController::class, 'detalles']);

// Alquileres
Route::get('/alquileres', [AlquilerController::class, 'index']);
Route::get('/alquileres/cliente-empleado', [AlquilerController::class, 'conClienteYEmpleado']);
Route::get('/alquileres/detalles', [AlquilerController::class, 'detalles']);

// Detalles de alquiler
Route::get('/alquiler-detalles', [AlquilerDetalleController::class, 'index']);
Route::get('/alquiler-detalles/relaciones', [AlquilerDetalleController::class, 'conRelaciones']);


