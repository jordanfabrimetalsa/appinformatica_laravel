<?php

namespace App\Http\Controllers\Vehiculo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehiculo\GestionVehi;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use App\Http\Requests\GestionVehiculo\StoreRequest;

class gestionVehiculoController extends Controller
{
    public function index(){
        try{
            $gestionvehi = GestionVehi::with(['tgestion', 'vehiculo'])->get();
            return response()->json([
                'status' => true,
                'message' => 'Todos los registros de gestion vehiculo',
                'data' => $gestionvehi
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
            $gestionvehi = GestionVehi::create($request->validated());
            return response()->json([
                'status' => true,
                'message' => 'Se ha ingresado el gestion vehiculo correctamente!',
                'data' => $gestionvehi
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
            $gestionvehi = GestionVehi::find($id);
            $gestionvehi->update($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Se actualizado correctamente la gestion vehiculo!',
                'data' => $gestionvehi
            ], 200);
        }catch(QueryException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se puede actualizar la gestion de vehiculo porque tiene dependencias.',
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
            $gestionvehi = GestionVehi::with(['tgestion', 'vehiculo'])->findOrFail($id);
            return response()->json([
                'status' => true,
                'data' => $gestionvehi
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => false,
                'message' => 'gestion no encontrada.',
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
            $gestionvehi = GestionVehi::findOrFail($id);
            $gestionvehi->delete();
            return response()->json([
                'status' => true,
                'message' => 'Se ha eliminado con exito!',
            ], 200);
        }catch(ModelNotFoundException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se ha encontrado la gestion de vehiculo seleccionado!',
            ], 404);
        }catch(QueryException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se puede eliminar la gestion de vehiculo porque tiene dependencias.',
            ], 409);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'Ha ocurrido algun error al realizar la petición!',
            ], 500);
        }
    }
}
