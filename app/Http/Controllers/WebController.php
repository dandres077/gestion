<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class WebController extends Controller
{
    public function departamentos($pais_id)
    {
        $dptos = DB::table('departamentos')->select('id', 'nombre')->where('pais_id', $pais_id )->where('status', 1 )->orderByRaw('nombre ASC')->get();

        return $dptos;
    }


    public function ciudades($pais_id, $departamento_id)
    {
        $ciudades = DB::table('ciudades')->select('id', 'nombre')->where('pais_id', $pais_id )->where('departamento_id', $departamento_id )->where('status', 1 )->orderByRaw('nombre ASC')->get();

        return $ciudades;
    }
}
