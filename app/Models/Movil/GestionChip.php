<?php

namespace App\Models\Movil;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GestionChip extends Model
{
    use HasFactory;

    protected $table = "gestionchip";

    protected $fillable = [
        'idgestion',
        'idchip',
        'detalle',
        'descripcion',
        'created_time',
        'created_user'
    ];

    public function chip(){
        return $this->belongsToMany('App\Models\Movil\Chip');
    }
}
