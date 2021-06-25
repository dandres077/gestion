<?php

namespace App\Http\Controllers;

use App\Departamentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\DepartamentosRequest;
use DB;

class DepartamentosController extends Controller
{
    /*
}
|--------------------------------------------------------------------------
| index
|--------------------------------------------------------------------------
|
*/

    public function index()
    {
        $data = DB::table('departamentos')
            ->leftJoin('users', 'departamentos.user_create', '=', 'users.id')
            ->leftJoin('paises', 'departamentos.pais_id', '=', 'paises.id')
            ->leftJoin('users AS users2', 'departamentos.user_update', '=', 'users2.id')
            ->select(
                'departamentos.*',
                'paises.nombre as nompais',
                DB::raw('(CASE WHEN departamentos.status = 1 THEN "Activo" ELSE "Inactivo" END) AS estado_elemento'))
            ->where('departamentos.status', '<>', 3 )
            ->orderByRaw('departamentos.id ASC')
            ->get();

        $titulo = 'Departamentos';

        return view('departamentos.index', compact('data', 'titulo'));
    }


/*
|--------------------------------------------------------------------------
| create
|--------------------------------------------------------------------------
|
*/

    public function create()
    {
        $paises = DB::table('paises')->select('paises.*')->where('paises.status', 1 )->get();
        $titulo = 'Departamentos';
        return view('departamentos.create', compact('titulo', 'paises'));
    }


/*
|--------------------------------------------------------------------------
| store
|--------------------------------------------------------------------------
|
*/
    public function store(Request $request)
    {

        $request['user_create'] = Auth::id();
        $data = Departamentos::create($request->all());

        return redirect ('admin/departamentos')->with('success', 'Registro creado exitosamente');
    }


/*
|--------------------------------------------------------------------------
| edit
|--------------------------------------------------------------------------
|
*/

    public function edit($id)
    {

        $data = Departamentos::find($id); 
        $paises = DB::table('paises')->select('paises.*')->where('paises.status', 1 )->get();        
        $titulo = 'Departamentos';

        return view ('departamentos.edit')->with (compact('data', 'titulo', 'paises'));
    }



/*
|--------------------------------------------------------------------------
| update
|--------------------------------------------------------------------------
|
*/
    public function update(Request $request, $id)
    {

        $data = Departamentos::find($id);
        $data->pais_id = $request->input('pais_id');
        $data->nombre = $request->input('nombre');
        $data->user_update = Auth::id();
        $data->save();

        
        return redirect ('admin/departamentos')->with('success', 'Registro actualizado exitosamente');
    }



/*
|--------------------------------------------------------------------------
| destroy
|--------------------------------------------------------------------------
|
*/

    public function destroy($id)
    {
        $data = Departamentos::find($id);
        $data->status = 3;
        $data->user_update = Auth::id();
        $data->save();
  
        return redirect ('admin/departamentos')->with('eliminar', 'ok');
    }


/*
|--------------------------------------------------------------------------
| Activar publicación
|--------------------------------------------------------------------------
|
*/

    public function active($id)
    {

        $data = Departamentos::find($id);
        $data->status = 1;
        $data->user_update = Auth::id();
        $data->save();
  
        return redirect ('admin/departamentos');
    }


/*
|--------------------------------------------------------------------------
| Desactivar publicación
|--------------------------------------------------------------------------
|
*/

    public function inactive($id)
    {
        $data = Departamentos::find($id);
        $data->status = 2;
        $data->user_update = Auth::id();
        $data->save();

        return redirect ('admin/departamentos');
    }
}