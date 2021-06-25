<?php

namespace App\Traits;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;

trait Funciones
{
    public function saber_dia($nombredia) {
        $dias = array('', 'Lunes','Martes','Miercoles','Jueves','Viernes','Sabado', 'Domingo');
        $fecha = $dias[date('N', strtotime($nombredia))];
        return $fecha;
    }

    //Mirar UserController para validar como se configura el uso del Trait
}
