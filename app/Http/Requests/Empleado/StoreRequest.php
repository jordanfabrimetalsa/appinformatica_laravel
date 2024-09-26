<?php

namespace App\Http\Requests\Empleado;

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
            'nombre' => 'required',
            'apellido' => 'required',
            'tipo_documento' => 'required',
            'num_documento' => 'required',
            'licencia' => 'required',
            'vencimiento_carnet' => 'required',
            'fecha_nac' => 'required',
            'direccion' => 'required',
            'movil' => 'required',
            'residencial' => 'required',
            'email' => 'required',
            'email_corporativo' => 'required',
            'imagen' => 'required',
            'base64' => 'required',
            'condicion' => 'required',
            'create_user' => 'required',
            'updated_user' => 'required',
            'idcargo' => 'required',
            'idcomunas' => 'required',
            'idprovincias' => 'required',
            'idregiones' => 'required',
            'idoficina_departamento' => 'required',
            'emailEmpresa' => 'required'
        ];
    }
}
