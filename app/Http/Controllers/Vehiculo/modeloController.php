<?php

namespace App\Http\Controllers\Vehiculo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehiculo\ModeloVehi;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use App\Http\Requests\ModeloVehi\StoreRequest;

class modeloController extends Controller
{
    public function index(){
        try{
            $modelovehi = ModeloVehi::with('marca')->get();
            return response()->json([
                'status' => true,
                'message' => 'Todos los registros de los modelos de vehiculo',
                'data' => $modelovehi
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
            $modelovehi = ModeloVehi::create($request->validated());
            return response()->json([
                'status' => true,
                'message' => 'Se ha ingresado un nuevo modelo de vehiculo correctamente!',
                'data' => $modelovehi
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
            $modelovehi = ModeloVehi::find($id);
            $modelovehi->update($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Se ha actualizado correctamente el modelo de vehiculo!',
                'data' => $modelovehi
            ], 200);
        }catch(QueryException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se puede actualizar el modelo porque tiene dependencias.',
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
            $modelovehi = ModeloVehi::with('marca')->findOrFail($id);
            return response()->json([
                'status' => true,
                'data' => $modelovehi
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Modelo no encontrada.',
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
            $modelovehi = ModeloVehi::findOrFail($id);
            $modelovehi->delete();
            return response()->json([
                'status' => true,
                'message' => 'Se ha eliminado con exito!',
            ], 200);
        }catch(ModelNotFoundException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se ha encontrado el modelo seleccionado!',
            ], 404);
        }catch(QueryException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se puede eliminar el modelo porque tiene dependencias.',
            ], 409);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'Ha ocurrido algun error al realizar la petición!',
            ], 500);
        }
    }
}
