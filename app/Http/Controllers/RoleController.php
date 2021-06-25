<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;
use DB;

class RoleController extends Controller
{

/*-- ----------------------------
-- Index
-- ----------------------------*/
     public function index() 
    {
        $roles = Role::paginate();

        return view ('roles.index')->with (compact('roles'));
    }


/*-- ----------------------------
-- Create
-- ----------------------------*/

    public function create() //Formulario de registro
    {

        $permisos = Permission::get();
        return view ('roles.create')->with (compact('permisos'));

    }

/*-- ----------------------------
-- Store
-- ----------------------------*/
    public function store(Request $request) 
    {
        $role = Role::create($request->all());
        $role->permissions()->sync($request->get('permisos'));   
        return redirect ('admin/roles');
    }


/*-- ----------------------------
-- Edit
-- ----------------------------*/
    public function edit($id) 
    {

        $roles = Role::find($id);
        $permisos = Permission::get();

        $rol_permisos = DB::table('role_has_permissions')
            ->select('role_has_permissions.*')
            ->where('role_id', '=', $id)
            ->get();

        $contador = count($rol_permisos);

        return view ('roles.edit')->with(compact('roles', 'permisos', 'rol_permisos', 'contador'));
    }


/*-- ----------------------------
-- Update
-- ----------------------------*/
    public function update(Request $request, $id)
    {

        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();

        $role->permissions()->sync($request->get('permisos'));   



        return redirect ('admin/roles');
    }



/*-- ----------------------------
-- Destroy
-- ----------------------------*/
    public function destroy($id) 
    {
        $role = Role::find($id);
        $role->delete();
        return back();
    }


/*-- ----------------------------
-- Edit
-- ----------------------------*/
    public function show($id) 
    {

        $roles = Role::find($id);
        $permisos = Permission::get();

        $rol_permisos = DB::table('role_has_permissions')
            ->select('role_has_permissions.*')
            ->where('role_id', '=', $id)
            ->get();

        return view ('roles.show')->with(compact('roles', 'permisos', 'rol_permisos'));
    }

}
