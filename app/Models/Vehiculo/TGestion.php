<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TGestion extends Model
{
    use HasFactory;

    protected $filleable = [
        'idtgestion_ve',
        'titulo',
        'descripcion',
        'condicion'
    ];
}
