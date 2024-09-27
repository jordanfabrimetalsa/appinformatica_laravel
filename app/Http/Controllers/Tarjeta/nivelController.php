<?php

namespace App\Http\Controllers\Tarjeta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tarjeta\Nivel;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use App\Http\Requests\Nivel\StoreRequest;

class nivelController extends Controller
{
    public function index(){
        try{
            $nivel = Nivel::get();
            return response()->json([
                'status' => true,
                'message' => 'Todos los registros de asignacion de nivel',
                'data' => $nivel
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
            $nivel = Nivel::create($request->validated());
            return response()->json([
                'status' => true,
                'message' => 'Se ha ingresado el nivel correctamente!',
                'data' => $nivel
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
            $nivel = Nivel::findOrFail($id);
            $nivel->update($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Se actualizado correctamente el nivel!',
                'data' => $nivel
            ], 200);
        }catch(QueryException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se puede actualizar el nivel porque tiene dependencias.',
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
            $nivel = Nivel::findOrFail($id);
            response()->json([
                'status' => true,
                'message' => 'Los datos del nivel seleccionado!',
                'data' => $nivel
            ], 200);
        }catch(ModelNotFoundException $e){
            response()->json([
                'status' => false,
                'message' => 'No se ha encontradoe el nivel seleccionado'
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
            $nivel = Nivel::findOrFail($id);
            $nivel->delete();
            return response()->json([
                'status' => true,
                'message' => 'Se ha eliminado con exito!',
            ], 200);
        }catch(ModelNotFoundException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se ha encontrado el nivel seleccionado!',
            ], 404);
        }catch(QueryException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se puede eliminar el nivel porque tiene dependencias.',
            ], 409);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'Ha ocurrido algun error al realizar la petición!',
            ], 500);
        }
    }
}
