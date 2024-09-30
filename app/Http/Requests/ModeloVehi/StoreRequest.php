<?php

namespace App\Http\Requests\ModeloVehi;

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
            'nombre' => 'required',
            'idmarca' => 'required',
            'condicion' => 'required',
        ];
    }
}
