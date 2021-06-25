<?php

namespace App\Http\Controllers;

use App\Paises;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PaisesRequest;
use DB;

class PaisesController extends Controller
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
        $data = DB::table('paises')
                    ->select('paises.*')
                    ->where('status', '<>', 3 )
                    ->orderByRaw('id ASC')
                    ->get();

        $titulo = 'Paises';
        

        return view('paises.index', compact('data', 'titulo'));
    }


/*
|--------------------------------------------------------------------------
| create
|--------------------------------------------------------------------------
|
*/

    public function create()
    {
        $titulo = 'Paises';

        return view('paises.create', compact('titulo'));
    }


/*
|--------------------------------------------------------------------------
| store
|--------------------------------------------------------------------------
|
*/
    public function store(PaisesRequest $request)
    {

        $request['user_create'] = Auth::id();
        $data = Paises::create($request->all());

        return redirect ('admin/paises')->with('success', 'Registro creado exitosamente');
    }


/*
|--------------------------------------------------------------------------
| edit
|--------------------------------------------------------------------------
|
*/

    public function edit($id)
    {

        $data = Paises::find($id); 
        $titulo = 'Paises';

        return view ('paises.edit')->with (compact('data', 'titulo'));
    }



/*
|--------------------------------------------------------------------------
| update
|--------------------------------------------------------------------------
|
*/
    public function update(PaisesRequest $request, $id)
    {

        $data = Paises::find($id);
        $data->nombre = $request->input('nombre');
        $data->user_update = Auth::id();
        $data->save();

        
        return redirect ('admin/paises')->with('success', 'Registro actualizado exitosamente');
    }



/*
|--------------------------------------------------------------------------
| destroy
|--------------------------------------------------------------------------
|
*/

    public function destroy($id)
    {
        $data = Paises::find($id);
        $data->status = 3;
        $data->user_update = Auth::id();
        $data->save();
  
        return redirect ('admin/paises');
    }


/*
|--------------------------------------------------------------------------
| Activar publicación
|--------------------------------------------------------------------------
|
*/

    public function active($id)
    {

        $data = Paises::find($id);
        $data->status = 1;
        $data->user_update = Auth::id();
        $data->save();
  
        return redirect ('admin/paises');
    }


/*
|--------------------------------------------------------------------------
| Desactivar publicación
|--------------------------------------------------------------------------
|
*/

    public function inactive($id)
    {
        $data = Paises::find($id);
        $data->status = 2;
        $data->user_update = Auth::id();
        $data->save();

        return redirect ('admin/paises');
    }
}


