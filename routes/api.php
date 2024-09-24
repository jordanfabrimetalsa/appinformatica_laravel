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

Route::resource('asignar-computador', asignarComputadorController::class)->except(['create', 'edit']);
Route::get('asignar-computador/{id?}',[asignarComputadorController::class, 'show']);
Route::resource('computador', computadorController::class)->except(['create', 'edit']);
Route::get('computador/{id?}', [computadorController::class, 'show']);

Route::resource('departamento', departamentoController::class)->except(['create', 'edit']);
Route::get('departamento/{id?}', [departamentoController::class, 'show']);
Route::resource('oficina', oficinaController::class)->except(['create', 'edit']);
Route::get('oficina/{id?}', [oficinaController::class,'show']);

Route::resource('empleado', empleadoController::class)->except(['create', 'edit']);
Route::get('empleado/{id?}', [empleadoController::class,'show']);

Route::resource('asignar-movil', asignarMovilController::class)->except(['create', 'edit']);
Route::get('asignar-movil/{id?}', [asignarMovilController::class, 'show']);
Route::resource('equipo', equipoController::class)->except(['create', 'edit']);
Route::get('equipo/{id?}', [equipoController::class, 'show']);
Route::resource('gestion-movil', gestionMovilController::class)->except(['create', 'edit']);
Route::get('gestion-movil/{id?}', [gestionMovilController::class, 'show']);
Route::resource('movil', movilController::class)->except(['create', 'edit']);
Route::get('movil/{id?}', [movilController::class ,'show']);

Route::resource('asignar-tarjeta', asignarTarjetaController::class)->except(['create', 'edit']);
Route::get('asignar-tarjeta/{id?}',[asignarTarjetaController::class, 'show']);

Route::resource('nivel', nivelController::class)->except(['create', 'edit']);
Route::get('nivel/{id?}', [nivelController::class, 'show']);
Route::resource('tarjeta', tarjetaController::class)->except(['create', 'edit']);
Route::get('tarjeta/{id?}', [tarjetaController::class, 'show']);

Route::resource('asignar-vehiculo', asignarVehiculoController::class)->except(['create', 'edit']);
Route::get('asignar-vehiculo/{id?}',[asignarVehiculoController::class, 'show']);
Route::resource('gestion-vehiculo', gestionVehiculoController::class)->except(['create', 'edit']);
Route::get('gestion-vehiculo/{id?}', [gestionVehiculoController::class, 'show']);
Route::resource('marca', marcaController::class)->except(['create', 'edit']);
Route::get('marca/{id?}', [marcaController::class, 'show']);
Route::resource('modelo', modeloController::class)->except(['create', 'edit']);
Route::get('modelo/{id?}', [modeloController::class, 'show']);
Route::resource('vehiculo', vehiculoController::class)->except(['create', 'edit']);
Route::get('vehiculo/{id?}', [vehiculoController::Class, 'show']);
