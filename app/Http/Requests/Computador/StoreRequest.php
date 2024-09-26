<?php

namespace App\Http\Requests\Computador;

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
            'idmarca' => 'required',
            'modelo' => 'required',
            'tcomputador' => 'required',
            'serial' => 'required',
            'precio' => 'required',
            'maclan' => 'required',
            'macwifi' => 'required',
            'factura' => 'required',
            'fvencimiento_garantia' => 'required',
            'observaciones' => 'required',
            'condicion' => 'required',
            'estado' => 'required',
            'disponible' => 'required',
            'detalle' => 'required'
        ];
    }
}
