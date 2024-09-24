<?php

namespace App\Http\Controllers\Departamento;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Departamento\Departamento;

class departamentoController extends Controller
{

    public function index()
    {
        $data = Departamento::all();
        return response()->json([
            'status' => true,
            'message' => 'Observar los datos de la tabla',
            'data' => $data
        ],200);
    }

    public function store(Request $request)
    {
        $departamento = Departamento::create($request->all());
        return response()->json([
            'status' => true,
            'message' => 'Se ha creado un nuevo departamento',
            'data' => $departamento
        ], 200);
    }

    public function show(string $id)
    {
        $departamento = Departamento::where('iddepartamento', $id)->firstOrFail();
        return response()->json([
            'status' => true,
            'message' => 'Datos encontrados.',
            'data' => $departamento
        ], 200);
    }

    public function update(Request $request, string $id)
    {
        $departamento = Departamento::findOrFail($id);
        $departamento->update($request->all());
        
        return response()->json([
            'status' => true,
            'message' => 'Se ha actualizado los datos',
            'data' => $departamento
        ], 200);
    }

    public function destroy(string $id)
    {
        $departamento = Departamento::where('iddepartamento', $id)->firstOrFail();
        $departamento->delete();
        
        return response()->json([
            'status' => true,
            'message' => 'Se ha eliminado con éxito!'
        ], 204);

    }
}
