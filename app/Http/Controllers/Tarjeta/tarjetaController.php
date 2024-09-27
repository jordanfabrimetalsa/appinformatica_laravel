<?php

namespace App\Http\Controllers\Tarjeta;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tarjeta\Tarjeta;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use App\Http\Requests\Tarjeta\StoreRequest;

class tarjetaController extends Controller
{
    public function index(){
        try{
            $tarjeta = Tarjeta::with('nivel')->get();
            return response()->json([
                'status' => true,
                'message' => 'Todos los registros de tarjeta',
                'data' => $tarjeta
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
            $tarjeta = Tarjeta::create($request->validated());
            return response()->json([
                'status' => true,
                'message' => 'Se ha ingresado el tarjeta correctamente!',
                'data' => $tarjeta
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
            $tarjeta = Tarjeta::find($id);
            $tarjeta->update($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Se actualizado correctamente el tarjeta!',
                'data' => $tarjeta
            ], 200);
        }catch(QueryException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se puede actualizar el tarjeta porque tiene dependencias.',
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
            $tarjeta = Tarjeta::with('nivel')->findOrFail($id);
            response()->json([
                'status' => true,
                'message' => 'Los datos de la tarjeta seleccionado!',
                'data' => $tarjeta
            ], 200);
        }catch(ModelNotFoundException $e){
            response()->json([
                'status' => false,
                'message' => 'No se ha encontrado la tarjeta seleccionado'
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
            $tarjeta = Tarjeta::findOrFail($id);
            $tarjeta->delete();
            return response()->json([
                'status' => true,
                'message' => 'Se ha eliminado con exito!',
            ], 200);
        }catch(ModelNotFoundException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se ha encontrado el tarjeta seleccionado!',
            ], 404);
        }catch(QueryException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se puede eliminar el tarjeta porque tiene dependencias.',
            ], 409);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'Ha ocurrido algun error al realizar la petición!',
            ], 500);
        }
    }
}
