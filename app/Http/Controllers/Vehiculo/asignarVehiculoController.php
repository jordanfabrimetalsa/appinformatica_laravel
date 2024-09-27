<?php

namespace App\Http\Controllers\Vehiculo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehiculo\AsigVehi;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use App\Http\Requests\Vehiculo\StoreRequest;

class asignarVehiculoController extends Controller
{
    public function index(){
        try{
            $asigvehi = AsigVehi::with(['empleado', 'vehiculo'])->get();
            return response()->json([
                'status' => true,
                'message' => 'Todos los registros de asignacion vehiculo',
                'data' => $asigvehi
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
            $asigvehi = AsigVehi::create($request->validated());
            return response()->json([
                'status' => true,
                'message' => 'Se ha ingresado el asignacion vehiculo correctamente!',
                'data' => $asigvehi
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
            $asigvehi = AsigVehi::find($id);
            $asigvehi->update($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Se actualizado correctamente el asignacion vehiculo!',
                'data' => $asigvehi
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
            $asigvehi = AsigVehi::with(['empleado', 'vehiculo'])->findOrFail($id);
            return response()->json([
                'status' => true,
                'data' => $asigvehi
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
            $asigvehi = AsigVehi::findOrFail($id);
            $asigvehi->delete();
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
