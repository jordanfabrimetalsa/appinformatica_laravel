<?php

namespace App\Http\Requests\AsigTarjeta;

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
            'idtarjeta' => 'required',
            'idempleado' => 'required',
            'acta' => 'required',
            'devolucion' => 'required',
            'created_user' => 'required',
            'closed_user' => 'required',
            'condicion' => 'required',
            'pdf_entrega' => 'required',
            'pdf_devolucion' => 'required',
        ];
    }
}
