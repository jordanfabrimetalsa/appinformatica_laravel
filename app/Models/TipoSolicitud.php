<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoSolicitud extends Model
{
    use HasFactory;

    protected $table = "tipo_solicitud";

    protected $primaryKey = "idtipo_solicitud";

    protected $fillable = [
        'idtipo_solicitud',
        'iddepartamento',
        'nombre',
        'descripcion',
        'html',
        'condicion',
        'created_time',
        'updated_time'
    ];

    public function departamento(){
        return $this->belongsTo('App\Models\Departamento\Departamento');
    }
}
