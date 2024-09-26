<?php

namespace App\Http\Controllers\Tarjeta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tarjeta\AsigTarjeta;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use App\Http\Requests\AsigTarjeta\StoreRequest;

class asignarTarjetaController extends Controller
{
    public function index(){
        try{
            $asigtarjeta = AsigTarjeta::with(['tarjeta', 'empleado'])->get();
            return response()->json([
                'status' => true,
                'message' => 'Todos los registros de asignacion de tarjeta',
                'data' => $asigtarjeta
            ], 200);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'Ha ocurrido algun error al realizar la petición!'
            ], 500);
        }
    }

    public function store(StoreRequest $request){
        try{
            $asigtarjeta = AsigTarjeta::create($request->validated());
            return response()->json([
                'status' => true,
                'message' => 'Se ha ingresado la asignacion de tarjeta correctamente!',
                'data' => $asigtarjeta
            ], 200);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'Ha ocurrido algun error al realizar la petición!'
            ], 500);
        }
    }

    public function update(Request $request, string $id){
        try{
            $asigtarjeta = AsigTarjeta::findOrFail($id);
            $asigtarjeta->update($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Se actualizado correctamente la asignacion de tarjeta!',
                'data' => $empleado
            ], 200);
        }catch(QueryException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se puede actualizar la asignacion de tarjeta porque tiene dependencias.',
            ], 409);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'No se ha podido actualizar correctamente'
            ], 500);
        }
    }

    public function show(string $id){
        try{
            $asigtarjeta = AsigTarjeta::with(['tarjeta', 'empleado'])->findOrFail($id);
            response()->json([
                'status' => true,
                'message' => 'Los datos de la asignacion de tarjeta seleccionado!',
                'data' => $asigtarjeta
            ], 200);
        }catch(ModelNotFoundException $e){
            response()->json([
                'status' => false,
                'message' => 'No se ha encontrado la asignacion de tarjeta seleccionado'
            ], 409);
        }catch(Exception $e){
            response()->json([
                'status' => false,
                'message' => 'Ha ocurrido algun error en la petición!'
            ], 500);
        }
    }

    public function destroy(string $id){
        try{
            $asigtarjeta = AsigTarjeta::findOrFail($id);
            $asigtarjeta->delete();
            return response()->json([
                'status' => true,
                'message' => 'Se ha eliminado con exito!',
            ], 200);
        }catch(ModelNotFoundException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se ha encontra la asignacion de tarjeta seleccionada!',
            ], 404);
        }catch(QueryException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se puede eliminar la asignacion de tarjeta porque tiene dependencias.',
            ], 409);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'Ha ocurrido algun error al realizar la petición!',
            ], 500);
        }
    }
}
