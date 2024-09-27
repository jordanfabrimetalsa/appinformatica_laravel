<?php

namespace App\Models\Tarjeta;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarjeta extends Model
{
    use HasFactory;

    protected $table = "tarjeta";

    protected $primaryKey = "idtarjeta";

    public $timestamps = false;

    protected $fillable = [
        'idnivel',
        'codigo',
        'codigosys',
        'descripcion',
        'disponible',
        'created_user',
        'updated_user',
        'condicion',
    ];

    public function asigtarjeta(){
        return $this->hasOne('App\Models\Tarjeta\AsigTarjeta');
    }

    public function nivel(){
        return $this->belongsTo('App\Models\Tarjeta\Nivel', 'idnivel', 'idnivel');
    }    
}
