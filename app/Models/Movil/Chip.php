<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chip extends Model
{
    use HasFactory;

    protected $fillable = [
        'idchip',
        'serial',
        'numero',
        'pin',
        'puk',
        'idoperador',
        'create_time',
        'updated_time',
        'condicion',
        'disponible',
        'detalle',
        'created_user',
        'updated_user'
    ];
}
