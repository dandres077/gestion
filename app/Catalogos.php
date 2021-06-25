<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogos extends Model
{
    protected $fillable = [
        'nombre', 
        'opcion', 
        'status', 
        'user_create', 
        'user_update'
    ];
}
