<?php

namespace App\Http\Controllers;

use App\Empresas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use DB;

class EmpresasController extends Controller
{

    public function index()
    {
        $data = DB::table('empresas')
                ->leftJoin('ciudades', 'empresas.ciudad_id', '=', 'ciudades.id')
                ->leftJoin('catalogos', 'empresas.tipo_documento', '=', 'catalogos.id')
                ->select(
                    'empresas.*',
                    'ciudades.nombre AS nom_ciudad',
                    'catalogos.opcion AS tipo_doc')
                ->where('empresas.status', '<>', 3 )
                ->orderByRaw('empresas.id ASC')
                ->get(); 

        $titulo = 'Empresas';

        return view('empresas.index', compact('data', 'titulo'));
    }


    public function create()
    {
        $titulo = 'Empresas';

        $paises = DB::table('paises')->select('id', 'nombre')->where('status', 1 )->orderByRaw('nombre ASC')->get();
        $dptos = DB::table('departamentos')->select('id', 'nombre')->where('pais_id', $paises[0]->id )->where('status', 1 )->orderByRaw('nombre ASC')->get();
        $ciudades = DB::table('ciudades')->select('id', 'nombre')->where('departamento_id', $dptos[0]->id )->where('status', 1 )->orderByRaw('nombre ASC')->get();
        $tipo_doc = DB::table('catalogos')->select('id', 'opcion')->where('status', 1 )->where('nombre', 1 )->orderByRaw('opcion ASC')->get();
        

        return view('empresas.create', compact(
                                                'titulo', 
                                                'paises', 
                                                'dptos', 
                                                'ciudades', 
                                                'tipo_doc')
        );
    }


    public function store(Request $request)
    {
        $request['user_create'] = Auth::id();
        $data = Empresas::create($request->all());
        
        if ($request->file('imagen')) {
             $path = Storage::disk('public')->put('images',$request->file('imagen'));
             $data->fill(['imagen'=>asset($path)])->save();
        }

        return redirect ('admin/empresas')->with('success', 'Registro creado exitosamente');
    }


    public function show(Empresas $empresas)
    {
        //
    }


    public function edit($id)
    {
        $data = Empresas::find($id); 
        $paises = DB::table('paises')->select('id', 'nombre')->where('status', 1 )->orderByRaw('nombre ASC')->get();
        $dptos = DB::table('departamentos')->select('id', 'nombre')->where('status', 1 )->orderByRaw('nombre ASC')->get();
        $ciudades = DB::table('ciudades')->select('id', 'nombre')->where('status', 1 )->orderByRaw('nombre ASC')->get();
        $tipo_doc = DB::table('catalogos')->select('id', 'opcion')->where('status', 1 )->where('nombre', 1 )->orderByRaw('opcion ASC')->get();
        $titulo = 'Empresas';

        return view('empresas.edit', compact(
                                                'data',
                                                'titulo', 
                                                'paises', 
                                                'dptos', 
                                                'ciudades', 
                                                'tipo_doc')
        );
    }


    public function update(Request $request, $id)
    {
        $data = Empresas::find($id);
        $data->nombre = $request->input('nombre');
        $data->razon_social = $request->input('razon_social');
        $data->direccion = $request->input('direccion');                                
        $data->pais_id = $request->input('pais_id');
        $data->departamento_id = $request->input('departamento_id');
        $data->ciudad_id = $request->input('ciudad_id');
        $data->email = $request->input('email');
        $data->telefono = $request->input('telefono');
        $data->celular = $request->input('celular');
        $data->tipo_documento = $request->input('tipo_documento');
        $data->n_documento = $request->input('n_documento');
        $data->user_update = Auth::id();
        $data->save();

        if ($request->file('imagen')) {
            $path = Storage::disk('public')->put('images',$request->file('imagen'));
            $data->fill(['imagen'=>asset($path)])->save();
        }
        
        return redirect ('admin/empresas')->with('success', 'Registro actualizado exitosamente');
    }

    /*
    |--------------------------------------------------------------------------
    | destroy
    |--------------------------------------------------------------------------
    |
    */

    public function destroy($id)
    {
        $data = Empresas::find($id);
        $data->status = 3;
        $data->user_update = Auth::id();
        $data->save();

        return redirect ('admin/empresas');
    }


    /*
    |--------------------------------------------------------------------------
    | Activar publicación
    |--------------------------------------------------------------------------
    |
    */

    public function active($id)
    {

        $data = Empresas::find($id);
        $data->status = 1;
        $data->user_update = Auth::id();
        $data->save();

        return redirect ('admin/empresas');
    }


    /*
    |--------------------------------------------------------------------------
    | Desactivar publicación
    |--------------------------------------------------------------------------
    |
    */

    public function inactive($id)
    {
        $data = Empresas::find($id);
        $data->status = 2;
        $data->user_update = Auth::id();
        $data->save();

        return redirect ('admin/empresas');
    }
}
