<?php

namespace App\Models\Reserva;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = "reserva";

    protected $fillable = [
        'idreserva',
        'iduser',
        'treserva',
        'item',
        'file',
        'idresponsable',
        'centrocosto',
        'desde',
        'hasta',
        'horadesde',
        'horahasta',
        'descripcion',
        'nombre',
        'solicitante',
        'estado',
        'motivo',
        'created_time',
        'updated_time',
        'updated_user',
        'comentario'
    ];

    public function itemReserva(){
        return $this->belongsTo('App\Models\Reserva\ItemReserva');
    }

    public function responsableReserva(){
        return $this->belongsTo('App\Models\Reserva\ResponsableReserva');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
