<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Computador\asignarComputadorController;
use App\Http\Controllers\Computador\computadorController;

use App\Http\Controllers\Departamento\departamentoController;
use App\Http\Controllers\Departamento\oficinaController;

use App\Http\Controllers\Empleado\empleadoController;

use App\Http\Controllers\Movil\asignarMovilController;
use App\Http\Controllers\Movil\equipoController;
use App\Http\Controllers\Movil\gestionMovilController;
use App\Http\Controllers\Movil\movilController;

use App\Http\Controllers\Tarjeta\asignarTarjetaController;
use App\Http\Controllers\Tarjeta\nivelController;
use App\Http\Controllers\Tarjeta\tarjetaController;

use App\Http\Controllers\Vehiculo\asignarVehiculoController;
use App\Http\Controllers\Vehiculo\gestionVehiculoController;
use App\Http\Controllers\Vehiculo\marcaController;
use App\Http\Controllers\Vehiculo\modeloController;
use App\Http\Controllers\Vehiculo\vehiculoController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resources('asignarcomputador', asignarComputadorController::class)->except(['create', 'edit']);
Route::resources('computador', computadorController::class)->except(['create', 'edit']);

Route::resources('departamento', departamentoController::class)->except(['create', 'edit']);
Route::resources('oficina', oficinaController::class)->except(['create', 'edit']);

Route::resources('empleado', empleadoController::class)->except(['create', 'edit']);

Route::resources('asignarmovil', asignarMovilController::class)->except(['create', 'edit']);
Route::resources('equipo', equipoController::class)->except(['create', 'edit']);
Route::resources('gestionmovil', gestionMovilController::class)->except(['create', 'edit']);
Route::resources('movil', movilController::class)->except(['create', 'edit']);

Route::resources('asignartarjeta', asignarTarjetaController::class)->except(['create', 'edit']);
Route::resources('nivel', nivelController::class)->except(['create', 'edit']);
Route::resources('tarjeta', tarjetaController::class)->except(['create', 'edit']);

Route::resources('asignarvehiculo', asignarVehiculoController::class)->except(['create', 'edit']);
Route::resources('gestionvehiculo', gestionVehiculoController::class)->except(['create', 'edit']);
Route::resources('marca', marcaController::class)->except(['create', 'edit']);
Route::resources('modelo', modeloController::class)->except(['create', 'edit']);
Route::resources('vehiculo', vehiculoController::class)->except(['create', 'edit']);

