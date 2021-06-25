<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudades extends Model
{
    protected $fillable = [
    	'pais_id',
        'departamento_id',
        'nombre', 
        'status', 
        'user_create', 
        'user_update'
    ];
}
