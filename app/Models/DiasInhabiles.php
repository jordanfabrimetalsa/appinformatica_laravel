<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiasInhabiles extends Model
{
    use HasFactory;

    protected $table = "dias_inhabiles";

    protected $primaryKey = "id_dia";

    public $timestamps = false;

    protected $fillable = ['id_dia', 'dia_inhabi'];
}
