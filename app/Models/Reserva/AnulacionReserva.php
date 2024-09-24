<?php

namespace App\Models\Reserva;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnulacionReserva extends Model
{
    use HasFactory;

    protected $table = "anulacion_reserva";

    protected $primaryKey = "idanulacion";

    public $timestamps = false;

    protected $fillable = [
        'idanulacion',
        'nombre',
        'condicion'
    ];
}
