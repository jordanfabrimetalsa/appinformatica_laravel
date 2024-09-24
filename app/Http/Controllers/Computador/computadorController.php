<?php

namespace App\Http\Controllers\Computador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Computador\Computador;

class computadorController extends Controller
{
    public function index()
    {
        $computador = Computador::paginate();
        return response()->json([
            'status' => true,
            'message' => 'Listado de Computadores!',
            'data' => $computador
        ],200);
    }

    public function store(Request $request)
    {
        $computador = Computador::create($request->all());
        return response()->json([
            'status' => true,
            'message' => 'Se ha creado con Exito!',
            'data' => $computador 
        ], 200);
    }

    public function show(string $id)
    {
        $computador = Computador::where('idcomputador', $id)->firstOrFail();
        return response()->json([
            'status' => true,
            'message' => 'Visualización de los datos',
            'data' => $computador
        ],200);
    }

    public function update(Request $request, string $id)
    {
        $computador = Computador::find($id)->firstOrFail();
        $computador->update($request->all());
        return response()->json([
            'status' => true,
            'message' => 'Se ha actualizado los datos con exito!',
            'data' => $computador
        ],200);
    }

    public function destroy(string $id)
    {
        $computador = Computador::find($id)->firstOrFail();
        $computador->delete();
        return response()->json([
            'status' => true,
            'message' => 'Ha sido eliminado con exito!'
        ],204);
    }
}
