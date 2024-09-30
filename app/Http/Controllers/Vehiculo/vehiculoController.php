<?php

namespace App\Http\Controllers\Vehiculo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehiculo\Vehiculo;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use App\Http\Requests\Vehiculo\StoreRequest;

class vehiculoController extends Controller
{
    public function index(){
        try{
            $vehiculo = Vehiculo::with(['marca', 'tvehiculo', 'modelo'])->get();
            return response()->json([
                'status' => true,
                'message' => 'Todos los registros de los vehiculos',
                'data' => $vehiculo
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
            $vehiculo = Vehiculo::create($request->validated());
            return response()->json([
                'status' => true,
                'message' => 'Se ha ingresado un nuevo vehiculo correctamente!',
                'data' => $vehiculo
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
            $vehiculo = Vehiculo::find($id);
            $vehiculo->update($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Se ha actualizado correctamente el vehiculo!',
                'data' => $vehiculo
            ], 200);
        }catch(QueryException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se puede actualizar el vehiculo porque tiene dependencias.',
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
            $vehiculo = Vehiculo::with(['marca', 'tvehiculo', 'modelo'])->findOrFail($id);
            return response()->json([
                'status' => true,
                'data' => $vehiculo
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => false,
                'message' => 'Vehiculo no encontrada.',
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
            $vehiculo = Vehiculo::findOrFail($id);
            $vehiculo->delete();
            return response()->json([
                'status' => true,
                'message' => 'Se ha eliminado con exito!',
            ], 200);
        }catch(ModelNotFoundException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se ha encontrado el vehiculo seleccionado!',
            ], 404);
        }catch(QueryException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se puede eliminar el vehicuo porque tiene dependencias.',
            ], 409);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'Ha ocurrido algun error al realizar la petición!',
            ], 500);
        }
    }
}
