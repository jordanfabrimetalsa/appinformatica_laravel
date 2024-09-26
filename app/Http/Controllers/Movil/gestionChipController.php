<?php

namespace App\Http\Controllers\Movil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movil\GestionChip;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use App\Http\Requests\GestionChip\StoreRequest;

class gestionChipController extends Controller
{
    public function index(){
        try{
            $gestionchip = GestionChip::with('chip')->get();
            return response()->json([
                'status' => true,
                'message' => 'Todos los registros de GestionChips',
                'data' => $gestionchip
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
            $gestionchip = GestionChip::create($request->validated());
            return response()->json([
                'status' => true,
                'message' => 'Se ha ingresado el GestionChip correctamente!',
                'data' => $gestionchip
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
            $gestionchip = GestionChip::findOrFail($id);
            $gestionchip->update($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Se actualizado correctamente el GestionChip!',
                'data' => $gestionchip
            ], 200);
        }catch(QueryException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se puede actualizar el GestionChip porque tiene dependencias.',
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
            $gestionchip = GestionChip::with('chip')->findOrFail($id);
            response()->json([
                'status' => true,
                'message' => 'Los datos del GestionChip seleccionado!',
                'data' => $gestionchip
            ], 200);
        }catch(ModelNotFoundException $e){
            response()->json([
                'status' => false,
                'message' => 'No se ha encontrado el GestionChip seleccionado'
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
            $gestionchip = GestionChip::findOrFail($id);
            $gestionchip->delete();
            return response()->json([
                'status' => true,
                'message' => 'Se ha eliminado con exito!',
            ], 200);
        }catch(ModelNotFoundException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se ha encontra la Oficina seleccionada!',
            ], 404);
        }catch(QueryException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se puede eliminar el Computador porque tiene dependencias.',
            ], 409);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'Ha ocurrido algun error al realizar la petición!',
            ], 500);
        }
    }
}
