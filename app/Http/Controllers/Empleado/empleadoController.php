<?php

namespace App\Http\Controllers\Empleado;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empleado\Empleado;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use App\Http\Requests\Empleado\StoreRequest;

class empleadoController extends Controller
{
    public function index(){
        try{
            $empleado = Empleado::with(['cargo', 'comuna', 'provincia', 'regiones', 'oficinaDepartamento'])->get();
            return response()->json([
                'status' => true,
                'message' => 'Todos los registros de Empleados',
                'data' => $empleado,
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
            $empleado = Empleado::create($request->validated());
            return response()->json([
                'status' => true,
                'message' => 'Se ha ingresado el Empleado correctamente!',
                'data' => $empleado
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
            $empleado = Empleado::findOrFail($id);
            $empleado->update($request->all());
            return response()->json([
                'status' => true,
                'message' => 'Se actualizado correctamente el Empleado!',
                'data' => $empleado
            ], 200);
        }catch(QueryException $e){
            return response()->json([
                'status' => false,
                'message' => 'No se puede actualizar el Empleado porque tiene dependencias.',
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
            $empleado = Empleado::with(['cargo', 'comuna', 'provincia', 'regiones', 'oficinaDepartamento'])->findOrFail($id);
            response()->json([
                'status' => true,
                'message' => 'Los datos del empleado seleccionado!',
                'data' => $empleado
            ], 200);
        }catch(ModelNotFoundException $e){
            response()->json([
                'status' => false,
                'message' => 'No se ha encontrado el Empleado seleccionado'
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
            $empleado = Empleado::findOrFail($id);
            $empleado->delete();
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
