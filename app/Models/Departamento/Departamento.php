<?php

namespace App\Models\Departamento;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;

    protected $table = "departamento";
    
    protected $primaryKey = 'iddepartamento';

    protected $fillable = [
        'iddepartamento',
        'nombre',
        'intranet'
    ];

    public function cargo(){
        return $this->hasMany('App\Models\Empleado\Cargo');
    }

    public function oficinaDepartamento(){
        return $this->hasMany('App\Models\Departamento\OficinaDepartamento');
    }

    public function tipoSolicitud(){
        return $this->hasMany('App\Models\TipoSolicitud');
    }
}
