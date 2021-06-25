<?php

namespace App\Http\Controllers;

use App\Catalogos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class CatalogosController extends Controller
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
        $data = DB::table('catalogos')
                    ->select('catalogos.*')
                    ->where('status', '<>', 3 )
                    ->orderByRaw('id ASC')
                    ->get();

        $titulo = 'Catálogos';
        

        return view('catalogos.index', compact('data', 'titulo'));
    }


/*
|--------------------------------------------------------------------------
| create
|--------------------------------------------------------------------------
|
*/

    public function create()
    {
        $titulo = 'Catálogos';

        return view('catalogos.create', compact('titulo'));
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
        $data = Catalogos::create($request->all());

        return redirect ('admin/catalogos')->with('success', 'Registro creado exitosamente');
    }


/*
|--------------------------------------------------------------------------
| edit
|--------------------------------------------------------------------------
|
*/

    public function edit($id)
    {

        $data = Catalogos::find($id); 
        $titulo = 'Catálogos';

        return view ('catalogos.edit')->with (compact('data', 'titulo'));
    }



/*
|--------------------------------------------------------------------------
| update
|--------------------------------------------------------------------------
|
*/
    public function update(Request $request, $id)
    {

        $data = Catalogos::find($id);
        $data->nombre = $request->input('nombre');
        $data->opcion = $request->input('opcion');
        $data->user_update = Auth::id();
        $data->save();

        
        return redirect ('admin/catalogos')->with('success', 'Registro actualizado exitosamente');
    }



/*
|--------------------------------------------------------------------------
| destroy
|--------------------------------------------------------------------------
|
*/

    public function destroy($id)
    {
        $data = Catalogos::find($id);
        $data->status = 3;
        $data->user_update = Auth::id();
        $data->save();
    
        return redirect ('admin/catalogos');
    }


/*
|--------------------------------------------------------------------------
| Activar publicación
|--------------------------------------------------------------------------
|
*/

    public function active($id)
    {

        $data = Catalogos::find($id);
        $data->status = 1;
        $data->user_update = Auth::id();
        $data->save();
    
        return redirect ('admin/catalogos');
    }


/*
|--------------------------------------------------------------------------
| Desactivar publicación
|--------------------------------------------------------------------------
|
*/

    public function inactive($id)
    {
        $data = Catalogos::find($id);
        $data->status = 2;
        $data->user_update = Auth::id();
        $data->save();

        return redirect ('admin/catalogos');
    }
}
