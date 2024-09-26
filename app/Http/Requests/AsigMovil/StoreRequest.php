<?php

namespace App\Http\Requests\AsigMovil;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fecha' => 'required',
            'idequipo' => 'required',
            'idempleado' => 'required',
            'idchip' => 'required',
            'tasignacion' => 'required',
            'contrato' => 'required',
            'acta' => 'required',
            'devolucion' => 'required',
            'detalle' => 'required',
            'created_user' => 'required',
            'updated_user' => 'required',
            'condicion' => 'required',
            'pdf_entrega' => 'required',
            'pdf_devolucion' => 'required'
        ];
    }
}
