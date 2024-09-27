<?php

namespace App\Http\Requests\Vehiculo;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'idvehiculo' => 'required',
            'idempleado' => 'required',
            'entregado' => 'required',
            'created_user' => 'required',
            'close_user' => 'required',
            'condicion' => 'required',
            'imagen_delantero' => 'required',
            'imagen_trasero' => 'required',
            'imagen_lateral_derecho' => 'required',
            'imagen_lateral_izquierdo' => 'required',
            'imagen_panel' => 'required',
            'pdf_entrega' => 'required',
            'pdf_devolucion' => 'required',
            'asignacion'=> 'required'
        ];
    }
}
