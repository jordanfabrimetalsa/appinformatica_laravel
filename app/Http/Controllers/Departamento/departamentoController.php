<?php

namespace App\Http\Controllers\Departamento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departamento\Departamento;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;

class departamentoController extends Controller
{

    public function index()
    {
        try{
            $data = Departamento::all();
            return response()->json([
                'status' => true,
                'message' => 'Observar los datos de la tabla',
                'data' => $data
            ],200);    
        }catch(ModelNotFoundException $e){
            return response()->json([
                'status' => false,
                'message' => 'Departamento no encontrada.',
            ],404);  
        }catch(Exception $e){
            return response()->json([
                'status' => true,
                'message' => 'Ha ocurrido algun error al realizar la petición.',
            ],500);   
        }    
    }

    public function store(Request $request)
    {
        try{
            $departamento = Departamento::create($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Se ha creado un nuevo departamento',
                'data' => $departamento
            ], 200);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'Ha ocurrido algun error al realizar la petición.',
            ], 500);
        }
    }

    public function show(string $id)
    {
        try{
            $departamento = Departamento::where('iddepartamento', $id)->firstOrFail();
            return response()->json([
                'status' => true,
                'message' => 'Datos encontrados.',
                'data' => $departamento
            ], 200);
        }catch(ModelNotFoundException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se encuentra este Departamento.',
            ], 500);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'Ha ocurrido algun error al realizar la petición.',
            ], 500);
        }
    }

    public function update(Request $request, string $id)
    {
        try{
            $departamento = Departamento::findOrFail($id);
            $departamento->update($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Se ha actualizado los datos',
                'data' => $departamento
            ], 200);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message' => 'Ha ocurrido algun error al realizar la petición.',
            ], 500);
        }
    }

    public function destroy(string $id)
    {
        try{
            $departamento = Departamento::where('iddepartamento', $id)->firstOrFail();
            $departamento->delete();
            return response()->json([
                'status' => true,
                'message' => 'Se ha eliminado con éxito!'
            ], 204);
        }catch(ModelNotFoundException $e){
            return response()->json([
                'status' => false,
                'messages' => 'Departamento no encontrado.',
            ], 404);
        }catch(QueryException $e) {
            return response()->json([
                'status' => false,
                'message' => 'No se puede eliminar el Departamento porque tiene dependencias.',
            ], 409);
        }catch(Exception $e){
            return response()->json([
                'status' => false,
                'message'=> 'Ha ocurrido algun error al realizar la petición.',
            ], 500);
        }
    }
}
