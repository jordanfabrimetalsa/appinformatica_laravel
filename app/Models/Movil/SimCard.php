<?php

namespace App\Models\Movil;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimCard extends Model
{
    use HasFactory;

    protected $table = "simcard";

    protected $primaryKey = "idsimcard";

    protected $fillable = [
        'idsimcard',
        'serial',
        'numero',
        'pin',
        'puk',
        'idoperador',
        'create_time',
        'updated_time',
        'created_user',
        'updated_user',
        'condicion',
        'disponbile'
    ];

    public function operador(){
        return $this->belongsTo('App\Models\Movil\Operador');
    }
}





