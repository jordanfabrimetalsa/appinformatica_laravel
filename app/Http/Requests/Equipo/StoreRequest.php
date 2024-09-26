<?php

namespace App\Http\Requests\Equipo;

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
            'idequipo' => 'required',
            'imei' => 'required',
            'serial' => 'required',
            'caja' => 'required',
            'create_user' => 'required',
            'updated_user' => 'required',
            'condicion' => 'required',
            'estado' => 'required',
            'disponible' => 'required',
            'iddetalle' => 'required',
            'detalle' => 'required'
        ];
    }
}
