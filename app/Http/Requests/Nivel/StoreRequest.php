<?php

namespace App\Http\Requests\Nivel;

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
            'descripcion' => 'required',
            'condicion' => 'required',
        ];
    }
}
