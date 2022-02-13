<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $fillable =[

        'nombre',
        'apellido',
        'edad',
        'sexo',
        'identificacion',
        'direccion',
        'telefono',
        'email',
        'ubicacion'
    ];
    protected $hidden=[
        'created_at',
        'updated_at'
    ] ;

}
