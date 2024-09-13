<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable = [
        'idreserva',
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
}
