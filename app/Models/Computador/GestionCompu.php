<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GestionCompu extends Model
{
    use HasFactory;

    protected $fillable = [
        'idgestion',
        'idcomputador',
        'detalle',  
        'descripcion',
        'created_time',
        'creatd_user'
    ];
}
