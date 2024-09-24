<?php

namespace App\Models\Contacto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactoProveedor extends Model
{
    use HasFactory;

    protected $table = "contacto_proveedores";

    protected $primaryKey = "idproveedor";

    public $timestamps = false;
    
    protected $fillable = 
    [
     'idproveedor',
     'rut', 
     'nombre', 
     'nombrefantasia', 
     'direccion', 
     'region',
     'comuna',
     'paginaweb',
     'categoria',
     'observacion'
    ];

    public function contacto(){
        return $this->hasMany('App\Models\Contacto\Contactos'); 
    }
}
