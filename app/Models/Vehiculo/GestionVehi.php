<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GestionVehi extends Model
{
    use HasFactory;

    protected $filleable = [
        'idgestion_ve',
        'idvehiculo',
        'idtgestion',
        'condicion',
        'created_time',
        'created_user',
        'updated_time',
        'updated_user',
        'closed_time',
        'closed_user'
    ];
}
