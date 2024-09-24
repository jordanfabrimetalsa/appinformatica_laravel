<?php

namespace App\Http\Controllers\Computador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Computador\AsigCompu;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;


class asignarComputadorController extends Controller
{
    public function index()
    {
        try{
            $asignar = AsigCompu::paginate();
            return response()->json([
                'status' => true,
                'messages' => 'Todos los Registros!',
                'data' => $asignar 
            ], 200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => false,
                'messages' => 'Asignación no encontrada.',
            ], 404); 
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'messages' => 'Ha ocurrido algun error al realizar la petición!',
            ], 500);
        }
    }

    public function store(Request $request)
    {
        try
        {   
            $asignar = AsigCompu::create($request->all());
            return response()->json([
                'status' => true,
                'messages' => 'Se ha registrado con exito!',
                'data' => $asignar
            ], 200);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'messages' => 'Ha ocurrido algun error al realizar la petición!',
            ], 500);
        }
    }

    public function show(string $id)
    {
        try{
            $asignar = AsigCompu::findOrFail($id);
            return response()->json([
                'status' => true,
                'messages' => 'Ahora visualizas los datos de la Asignación!',
                'data' => $asignar
            ], 200);
        }catch(ModelNotFoundException $e) {
            return response()->json([
                'status' => false,
                'messages' => 'Asignación no encontrada.',
            ], 404); 
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'messages' => 'Ha ocurrido algun error al realizar la petición!',
            ], 500);
        }
    }

    public function update(Request $request, string $id)
    {
        try{
            $asignar = AsigCompu::findOrFail($id);
            $asignar->update($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Se ha actualizado correctamente los datos',
                'data' => $asginar
            ], 200);
        }catch(Excepcion $e){
            return response()->json([
                'status' => false,
                'message' => 'Ha ocurrido algun error al realizar la petición.',
            ], 500);
        }
    }

    public function destroy(string $id)
    {
        try{
            $asignar = AsigCompu::findOrFail($id);
            $asignar->delete();
            return response()->json([
                'status' => true,
                'message' => 'Se ha eliminado correctamente la asignación',
            ], 200);
        }catch(ModelNotFoundException $e){
            return response()->json([
                'status' => false,
                'messages' => 'Asignación no encontrada.',
            ], 404);
        }catch(QueryException $e) {
            return response()->json([
                'status' => false,
                'message' => 'No se puede eliminar la Asignación porque tiene dependencias.',
            ], 409);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message'=> 'Ha ocurrido algun error al realizar la petición.',
            ], 500);
        }
    }
}
