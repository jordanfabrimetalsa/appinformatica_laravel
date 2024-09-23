<?php

namespace App\Http\Controllers\Vehiculo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehiculo\Vehiculo;


class vehiculoController extends Controller
{
    public function index()
    {
        $data = Vehiculo::all();
        return response()->json($data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
