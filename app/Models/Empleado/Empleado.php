<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [
        'idempleado',
        'nombre',
        'apellido',
        'tipo_documento',
        'num_documento',
        'licencia',
        'vencimiento_carnet',
        'fecha_nac',
        'direccion',
        'movil',
        'residencial',
        'email',
        'email_corporativo',
        'imagen',
        'base64',
        'condicion',
        'create_time',
        'updated_time',
        'idcargo',
        'idcomunas',
        'idprovincias',
        'idregiones',
        'idoficina_departamento',
        'emailEmpresa'
    ];

    public function cargo(){
        return $this->belongsTo('App\Models\Empleado\Cargo');
    }
    
    public function comuna(){
        return $this->belongsTo('App\Models\Localizacion\Comuna');
    }

    public function provincia(){
        return $this->belongsTo('App\Models\Localizacion\Provincia');
    }

    public function regiones(){
        return $this->belongsTo('App\Models\Localizacion\Region');
    }

    public function oficinaDepartamento(){
        return $this->belongsTo('App\Models\Departamento\OficinaDepartamento');
    }

    public function tareaAsignacion(){
        return $this->hasMany('App\Models\TareaAsignacion');
    }

    public function asignacion(){
        return $this->hasOne('App\Models\Movil\Asignacion');
    }

    public function asigTarjeta(){
        return $this->hasOne('App\Models\Tarjeta\AsigTarjeta');
    }

    public function asigCompu(){
        return $this->hasOne('App\Models\Computador\AsigCompu');  
    }

    public function ticket(){
        return $this->hasMany('App\Models\Ticket\Ticket');
    }

    public function asigVehi(){
        return $this->hasOne('App\Models\Vehiculo\AsigVehi');
    }

    public function anexo(){
        return $this->hasOne('App\Models\Anexo');
    }

    public function jefe(){
        return $this->hasOne('App\Models\Empleado\Jefe');
    }

    public function asignarRol(){
        return $this->hasOne('App\Models\AsignarRol');
    }
}
