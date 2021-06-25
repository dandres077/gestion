<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    protected $fillable = [
    	'nombre',
        'razon_social',
        'direccion',                                
        'pais_id',
        'departamento_id',
        'ciudad_id',
        'email',
        'telefono',
        'celular',
        'tipo_documento',
        'n_documento',
        'imagen',
        'status',
        'user_create',
        'user_update'
    ];
}


            