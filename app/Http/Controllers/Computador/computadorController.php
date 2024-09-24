<?php

namespace App\Http\Controllers\Computador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Computador\Computador;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;

class computadorController extends Controller
{
    public function index()
    {
        try{
            $computador = Computador::paginate();
            return response()->json([
                'status' => true,
                'message' => 'Listado de Computadores!',
                'data' => $computador
            ],200);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'status' => false,
                'messages' => 'Computador no encontrado.',
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
        try{
            $computador = Computador::create($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Se ha creado con Exito!',
                'data' => $computador 
            ], 200);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'Ha ocurrido algun error al realizar la petición!',
            ], 500);
        }
    }

    public function show(string $id)
    {
        try{
            $computador = Computador::where('idcomputador', $id)->firstOrFail();
            return response()->json([
                'status' => true,
                'message' => 'Visualización de los datos',
                'data' => $computador
            ],200);
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
            $computador = Computador::find($id)->firstOrFail();
            $computador->update($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Se ha actualizado los datos con exito!',
                'data' => $computador
            ],200);
        }catch(Exception){
            return response()->json([
                'status' => false,
                'message' => 'Ha ocurrido algun error al realizar la petición!',
            ],500);
        }
    }

    public function destroy(string $id)
    {
        try{
            $computador = Computador::find($id)->firstOrFail();
            $computador->delete();
            return response()->json([
                'status' => true,
                'message' => 'Ha sido eliminado con exito!'
            ], 200);
        }catch(ModelNotFoundException $e){
            return response()->json([
                'status' => false,
                'messages' => 'Asignación no encontrada.',
            ], 404);
        }catch(QueryException $e) {
            return response()->json([
                'status' => false,
                'message' => 'No se puede eliminar el Computador porque tiene dependencias.',
            ], 409);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message'=> 'Ha ocurrido algun error al realizar la petición.',
            ], 500);
        }
    }
}
