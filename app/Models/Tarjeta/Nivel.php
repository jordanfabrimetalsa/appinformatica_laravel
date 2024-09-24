<?php

namespace App\Models\Tarjeta;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    use HasFactory;

    protected $table = "nivel";

    protected $primaryKey = "idgestion";

    public $timestamps = false;

    protected $fillable = [
        'idgestion',
        'idchip',
        'detalle',
        'descripcion',
        'created_time',
        'created_user'
    ];

    public function tarjeta(){
        return $this->hasMany('App\Models\Tarjeta\Tarjeta');
    }

    
}
