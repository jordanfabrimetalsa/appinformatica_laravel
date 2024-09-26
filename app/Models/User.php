<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = "user";

    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'password',
        'nombre',
        'apellido',
        'tipo_documento',
        'num_documento',
        'firma',
        'filefir',
        'fecha_nac',
        'direccion',
        'telefono',
        'imagen',
        'ultimo_inicio',
        'condicion',
        'condicion',
        'estado'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function user(){
        return $this->hasMany('App\Models\Computador\AsigCompu');
    }
}
