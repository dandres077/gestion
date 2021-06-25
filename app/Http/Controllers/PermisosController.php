<?php

namespace App\Http\Controllers;

use App\Permisos;
use Illuminate\Http\Request;
use DB;

class PermisosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permisos = DB::table('permissions')
            ->select(
                'permissions.*')
            ->orderByRaw('permissions.name ASC')
            ->get();

        $titulo = 'Permisos';


        return view ('permisos.index')->with (compact('permisos', 'titulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permisos  $permisos
     * @return \Illuminate\Http\Response
     */
    public function show(Permisos $permisos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permisos  $permisos
     * @return \Illuminate\Http\Response
     */
    public function edit(Permisos $permisos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permisos  $permisos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permisos $permisos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permisos  $permisos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permisos $permisos)
    {
        //
    }
}
