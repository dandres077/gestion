<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documentos extends Model
{
    protected $fillable = [
    	'empresa_id',
        'nombre',
        'fecha_expedicion',
        'fecha_vencimiento',
        'archivo',
        'status',
        'user_create',
        'user_update'
    ];
}


