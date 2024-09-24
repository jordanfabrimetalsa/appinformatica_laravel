<?php

namespace App\Models\Movil;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chip extends Model
{
    use HasFactory;

    protected $table = "chip";

    protected $primaryKey = "idchip";

    protected $fillable = [
        'idchip',
        'serial',
        'numero',
        'pin',
        'puk',
        'idoperador',
        'create_time',
        'updated_time',
        'condicion',
        'disponible',
        'detalle',
        'created_user',
        'updated_user'
    ];

    public function operador(){
        return $this->belongsTo('App\Models\Movil\Operador');
    }

    public function asignacion(){
        return $this->hasMany('App\Models\Movil\Asignacion');
    }

    public function gestionChip(){
        return $this->hasOne('App\Models\Movil\GestionChip');
    }
}
