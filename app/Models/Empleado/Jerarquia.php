<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jerarquia extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'descripcion',
        'inactive'
    ];

    public function jefe(){
        return $this->hasOne('App\Models\Empleado\Jefe');
    }
}
