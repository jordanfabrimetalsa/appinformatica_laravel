<?php

namespace App\Models\Contacto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactoProveedor extends Model
{
    use HasFactory;

    protected $table = "contacto_proveedores";
    
    protected $fillable = 
    ['rut', 
     'nombre', 
     'nombrefantasia', 
     'direccion', 
     'region',
     'comuna',
     'paginaweb',
     'categoria',
     'observacion'
    ];
}
