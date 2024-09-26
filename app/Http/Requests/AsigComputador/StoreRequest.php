<?php

namespace App\Http\Requests\AsigComputador;

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
            'idcomputador' => 'required|numeric',
            'idempleado' => 'required|numeric',
            'nomequipo' => 'required|string',
            'usuario' => 'required|string',
            'pass' => 'required',
            'ip' => 'required',
            'so' => 'required|numeric',
            'acta' => 'required|numeric',
            'devolucion' => 'required|numeric',
            'detalle' => 'required|string',
            'created_user' => 'required|numeric', 
            'closed_user' => 'required',
            'condicion' => 'required|numeric',
            'pdf_entrega' => 'required|string',
            'pdf_devolucion' => 'required|string'
        ];
    }
}
