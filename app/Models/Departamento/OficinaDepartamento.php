<?php

namespace App\Models\Departamento;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OficinaDepartamento extends Model
{
    use HasFactory;

    protected $table = "oficina_departamento";

    protected $primaryKey = "idoficina_departamento";

    protected $fillable = [
        'idoficina_departamento',
        'idoficinas',
        'iddepartamento'
    ];

    public function oficina(){
        return $this->belongsToMany('App\Models\Departamento\Oficina');
    }

    public function departamento(){
        return $this->belongsToMany('App\Models\Departamento\Departamento');
    }
}
