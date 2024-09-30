<?php

namespace App\Http\Requests\MarcaVehi;

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
            'condicion' => 'required',
        ];
    }
}
