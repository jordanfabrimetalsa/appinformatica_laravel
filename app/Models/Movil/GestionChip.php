<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GestionChip extends Model
{
    use HasFactory;

    protected $fillable = [
        'idgestion',
        'idchip',
        'detalle',
        'descripcion',
        'created_time',
        'created_user'
    ];
}
