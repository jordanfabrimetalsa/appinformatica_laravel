<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'idticket',
        'idempleado',
        'idtipo',
        'asunto',
        'prioridad',
        'estado',
        'oficina',
        'created_time',
        'process_time',
        'process_user',
        'closed_time',
        'closed_user'
    ];
}
