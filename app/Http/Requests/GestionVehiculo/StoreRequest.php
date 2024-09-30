<?php

namespace App\Http\Requests\GestionVehiculo;

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
            'idtgestion_ve' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required',
            'condicion' => 'required',
        ];
    }
}
