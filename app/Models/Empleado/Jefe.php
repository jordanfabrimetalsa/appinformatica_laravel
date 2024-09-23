<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jefe extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_empleado',
        'id_jerarquia'
    ];

    public function empleado(){
        return $this->belongsToMany('App\Models\Empleado\Empleado');
    }
    
    public function jerarquia(){
        return $this->belongsTo('App\Models\Empleado\Jerarquia');
    }
}
