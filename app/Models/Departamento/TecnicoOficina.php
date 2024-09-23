<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TecnicoOficina extends Model
{
    use HasFactory;

    protected $fillable = [
        'idtecofi',
        'idusuario',
        'idoficina'
    ];

    public function user(){
        return $this->belongsToMany('App\Models\User');
    }

    public function oficina(){
        return $this->belongsTo('App\Models\Departamento\TecnicoOficina');
    }
}
