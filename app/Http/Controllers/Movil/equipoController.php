<?php

namespace App\Http\Controllers\Movil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movil\Equipo;
use App\Http\Requests\Equipo\StoreRequest;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;

class equipoController extends Controller
{
    public function index()
    {
        try{
            $equipo = Equipo::with('detalle')->get();
            return response()->json([
                'status' => true,
                'message' => 'Todos los registro de Equipos',
                'data' => $equipo
            ], 200);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'El registro no pudo registrarse',
            ], 500);
        }
    }

    public function store(StoreRequest $request)
    {
        try{
            $equipo = Equipo::create($request->validated());
            return response()->json([
                'status' => true,
                'message' => 'El registro de equipo fue exitoso',
                'data' => $equipo
            ], 200);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'El registro no pudo registrarse',
            ], 500);
        }
    }

    public function show(string $id)
    {
        try{
            $equipo = Equipo::with('detalle')->findOrFail($id);
            return response()->json([
                'status' => true,
                'message' => 'Los datos del equipo consultado',
                'data' => $equipo
            ], 200);
        }catch(QueryException $e){
            return response()->json([
                'status' => false,
                'message' => 'No existe el dato solicitado',
            ], 404);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'No pudo visualizarse el equipo solicitado',
            ], 500);
        }
    }

    public function update(Request $request, string $id)
    {
        try{
            $equipo = Equipo::findOrFail($id);
            $equipo->update($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Se ha actualizar el Equipo',
                'data' => $equipo
            ], 200);
        }catch(ModelNotFoundException $e){
            return response()->json([
                'status' => false,
                'message' => 'No existe el equipo solicitado',
            ], 404);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'No pudo actualizar el equipo',
            ], 500);
        }
    }

    public function destroy(string $id)
    {
        try{
            $equipo = Equipo::findOrFail($id);
            $equipo->delete();
            return response()->json([
                'status' => true,
                'message' => 'Se ha podido eliminar el Equipo',
                'data' => $equipo
            ], 200);
        }catch(ModelNotFoundException $e){
            return response()->json([
                'status' => false,
                'message' => 'No existe el equipo solicitado',
            ], 404);
        }catch(QueryException $e){
            return response()->json([
                'status' => false,
                'message' => 'Problemas con la solicitud',
            ], 409);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'No pudo eliminar el equipo',
            ], 500);
        }
    }
}
