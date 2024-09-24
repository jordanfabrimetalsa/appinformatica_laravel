<?php

namespace App\Http\Controllers\Departamento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departamento\Oficina;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;

class oficinaController extends Controller
{
    public function index()
    {
        try{
            $oficina = Oficina::paginate();
            return response()->json([
                'status' => true,
                'message' => 'Listado de todas las Oficina!',
                'data' => $oficina
            ], 200);

        }catch(ModelNotFoundException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se ha encontrado las Oficina',
            ], 404);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'Ha ocurrido algun error al realizar la petición!',
            ], 500);
        }
    }

    public function store(Request $request)
    {
        try{
            $oficina = Oficina::create($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Se ha registrado con exito!',
                'data' => $oficina
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
            $oficina = Oficina::findOrFail();
            return response()->json([
                'status' => true,
                'message' => 'Listado de todas las Oficina!',
                'data' => $oficina
            ], 200);

        }catch(ModelNotFoundException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se ha encontra la Oficina seleccionada!',
            ], 404);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'Ha ocurrido algun error al realizar la petición!',
            ], 500);
        }
    }

    public function update(Request $request, string $id)
    {
        try{
            $oficina = Oficina::find($id);
            $oficina->update($request->all());
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'Ha ocurrido algun error al realizar la petición!',
            ], 500);
        }
    }

    public function destroy(string $id)
    {
        try{
            $oficina = Oficina::find($id);
            $oficina->delete();
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
