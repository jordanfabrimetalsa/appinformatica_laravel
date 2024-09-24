<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsignarRol extends Model
{
    use HasFactory;

    protected $table = "asignar_rol";

    protected $primaryKey = "id";

    public $timestamps = false;

    protected $fillable = [
        'id',
        'id_empleado',
        'id_jerarquia'
    ];

    public function empleado(){
        return $this->belongsToMany('App\Models\Empleado\Empleado');
    }

    public function jerarquia(){
        return $this->belongsToMany('App\Models\Empleado\Jerarquia');
    }

}
