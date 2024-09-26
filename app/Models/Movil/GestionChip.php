<?php

namespace App\Models\Movil;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GestionChip extends Model
{
    use HasFactory;

    protected $table = "gestionchip";

    protected $primaryKey = "idgestion";

    public $timestamps = false;

    protected $fillable = [
        'idchip',
        'detalle',
        'descripcion',
        'created_user'
    ];

    public function chip(){
        return $this->belongsTo('App\Models\Movil\Chip', 'idchip', 'idchip');
    }
}
