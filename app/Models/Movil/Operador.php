<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operador extends Model
{
    use HasFactory;

    protected $fillable = [
        'idoperador',
        'nombre',
        'condicion'
    ];

    public function chip(){
        return $this->hasMany('App\Models\Movil\Chip');
    }

    public function simcard(){
        return $this->hasMany('App\Models\Movil\SimCard');
    }
}
