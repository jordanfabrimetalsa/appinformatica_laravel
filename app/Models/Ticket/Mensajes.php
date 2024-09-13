<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensajes extends Model
{
    use HasFactory;

    protected $fillable = [
        'idmensajes',
        'cuerpo',
        'created_time',
        'process_user',
        'idticket',
        'vistouser',
        'vistoadmin'
    ];
}
