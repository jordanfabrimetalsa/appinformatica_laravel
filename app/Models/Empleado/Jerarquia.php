<?php

namespace App\Models\Empleado;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jerarquia extends Model
{
    use HasFactory;

    protected $table = "jerarquia";

    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'descripcion',
        'inactive'
    ];

    public function jefe(){
        return $this->hasOne('App\Models\Empleado\Jefe');
    }
}
