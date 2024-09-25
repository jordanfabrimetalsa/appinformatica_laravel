<?php

namespace App\Http\Requests\AsigComputador;

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
            'nomequipo' => 'required|string',
            'usuario' => 'required|string',
            'pass' => 'required',
            'ip' => 'required',
            'so' => 'required|numeric',
            'acta' => 'required|numeric',
            'devolucion' => 'required|numeric',
            'detalle' => 'required|string',
            'condicion' => 'required|numeric',
            'pdf_entrega' => 'required|string',
            'pdf_devolucion' => 'required|string'
        ];
    }
}
