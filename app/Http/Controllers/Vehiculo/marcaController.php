<?php

namespace App\Http\Controllers\Vehiculo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehiculo\MarcaVehi;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use App\Http\Requests\MarcaVehi\StoreRequest;

class marcaController extends Controller
{
    public function index(){
        try{
            $marca = MarcaVehi::get();
            return response()->json([
                'status' => true,
                'message' => 'Todos los registros de marca',
                'data' => $marca
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
            $marca = MarcaVehi::create($request->validated());
            return response()->json([
                'status' => true,
                'message' => 'Se ha ingresado la marca correctamente!',
                'data' => $marca
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
            $marca = MarcaVehi::find($id);
            $marca->update($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Se actualizado correctamente la marca!',
                'data' => $marca
            ], 200);
        }catch(QueryException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se puede actualizar la asignacion de vehiculo porque tiene dependencias.',
            ], 409);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'No se ha podido actualizar correctamente'
            ], 500);
        }
    }

    public function show(string $id){
        try {
            $marca = MarcaVehi::findOrFail($id);
            return response()->json([
                'status' => true,
                'data' => $marca
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Asignación no encontrada.',
            ], 404);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Ha ocurrido un error.',
            ], 500);
        }
    }

    public function destroy(string $id){
        try{
            $marca = MarcaVehi::findOrFail($id);
            $marca->delete();
            return response()->json([
                'status' => true,
                'message' => 'Se ha eliminado con exito!',
            ], 200);
        }catch(ModelNotFoundException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se ha encontrado la asignacion de vehiculo seleccionado!',
            ], 404);
        }catch(QueryException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se puede eliminar la asignacion de vehiculo porque tiene dependencias.',
            ], 409);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'Ha ocurrido algun error al realizar la petición!',
            ], 500);
        }
    }
}
