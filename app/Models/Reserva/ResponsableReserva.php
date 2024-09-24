<?php

namespace App\Models\Reserva;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResponsableReserva extends Model
{
    use HasFactory;

    protected $table = "responsable_reserva";

    protected $primaryKey = "idresponsable";

    public $timestamps = false;

    protected $fillable = [
        'idresponsable',
        'nombre',
        'emailEmpresa',
        'condicion'
    ];

    public function reserva(){
        return $this->belongsTo('App\Models\Reserva\Reserva');
    }
}
