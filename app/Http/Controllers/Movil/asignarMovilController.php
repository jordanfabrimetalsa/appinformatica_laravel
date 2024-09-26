<?php

namespace App\Http\Controllers\Movil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movil\Asignacion;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use App\Http\Requests\AsigMovil\StoreRequest;

class asignarMovilController extends Controller
{
    public function index()
    {
        try{
            $asignar = Asignacion::with(['equipo', 'empleado','chip'])->get();
            return response()->json([
                'status' => true,
                'message' => 'Todos los registro de Asignaciones de Movil!',
                'data' => $asignar
            ], 200);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'Ha ocurrido un error!'
            ], 500);
        }
    }

    public function store(StoreRequest $request)
    {
        try{    
            $asignar = Asignacion::create($request->validated());
            return response()->json([
                'status' => true,
                'message' => 'Se ha registrado la Asignaciones de Movil!',
                'data' => $asignar
            ], 200);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'No se ha podido registrar la Asignaciones de Movil!'
            ], 500);
        }
    }

    public function show(string $id)
    {
        try{
            $asignar = Asignacion::with(['equipo', 'empleado','chip'])->findOrFail($id);
            return response()->json([
                'status' => true,
                'message' => 'Todos los datos del registro seleccionado!',
                'data' => $asignar
            ], 200);
        }catch(ModelNotFoundException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se ha podido acceder a la Asignaciones de Movil!'
            ], 404);
        }catch(QueryException $e){
            return response()->json([
                'status' => false,
                'message' => 'Problema en la consulta.!'
            ], 409);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'No se ha podido acceder a la Asignaciones de Movil!'
            ], 500);
        }
    }

    public function update(Request $request, string $id)
    {
        try{
            $asignar = Asignacion::findOrFail($id);
            $asignar->update($request->all);
            return response()->json([
                'status' => true,
                'message' => 'Ha actualizado con exito',
                'data' => $asignar
            ], 200);
            }catch(ModelNotFoundException $e){
                return response()->json([
                    'status' => false,
                    'message' => 'No se ha encontrado el valor que se desea actualizar'
                ],404);
            }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'No ha podido ser actualizado'
            ],500);
        }
    }

    public function destroy(string $id)
    {
        try{
            $asignar = Asignacion::findOrFail($id);
            $asignar->delete();            
            return response()->json([
                'status' => true,
                'message' => 'Se ha podido eliminar con exito la asignación!',
                'data' => $asignar
            ], 200);
        }catch(ModelNotFoundException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se ha podido encontrar este registro'
            ], 404);
        }catch(QueryException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se puede debido a que posee dependencia!'
            ], 409);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'No se ha podido eliminar la Asignaciones de Movil!'
            ], 500);
        }
    }
}
