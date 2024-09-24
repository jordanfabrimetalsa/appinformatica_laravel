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
        return response()->json($data);
    }

    public function store(Request $request)
    {
        return response()->json(Departamento::create($request));
    }

    public function show(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {
        
    }

    public function destroy(Departamento $departamento)
    {
        $departamento->delete($departamento);
        return response()->json('ok');

    }
}
