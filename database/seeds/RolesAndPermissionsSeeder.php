<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'roles.store']); 
		Permission::create(['name' => 'roles.index']); 
		Permission::create(['name' => 'roles.create']);  
		Permission::create(['name' => 'roles.update']); 
		Permission::create(['name' => 'roles.show']);  
		Permission::create(['name' => 'roles.destroy']); 
		Permission::create(['name' => 'roles.edit']); 
		Permission::create(['name' => 'roles.active']); 
		Permission::create(['name' => 'roles.inactive']); 
		Permission::create(['name' => 'permisos.store']); 
		Permission::create(['name' => 'permisos.index']); 
		Permission::create(['name' => 'permisos.create']);  
		Permission::create(['name' => 'permisos.edit']); 
		Permission::create(['name' => 'permisos.show']);  
		Permission::create(['name' => 'permisos.destroy']); 
		Permission::create(['name' => 'usuarios.store']);  
		Permission::create(['name' => 'usuarios.index']); 
		Permission::create(['name' => 'usuarios.create']);
		Permission::create(['name' => 'usuarios.update']); 
		Permission::create(['name' => 'usuarios.show']);
		Permission::create(['name' => 'usuarios.destroy']); 
		Permission::create(['name' => 'usuarios.edit']);
		Permission::create(['name' => 'usuarios.active']); 
		Permission::create(['name' => 'usuarios.inactive']);
		Permission::create(['name' => 'usuarios.editarperfil']); 
		Permission::create(['name' => 'usuarios.updateperfil']); 
		Permission::create(['name' => 'usuarios.pwd']); 
		Permission::create(['name' => 'paises.store']);
		Permission::create(['name' => 'paises.index']);
		Permission::create(['name' => 'paises.create']);
		Permission::create(['name' => 'paises.update']);
		Permission::create(['name' => 'paises.show']);
		Permission::create(['name' => 'paises.destroy']);
		Permission::create(['name' => 'paises.edit']);
		Permission::create(['name' => 'paises.active']);
		Permission::create(['name' => 'paises.inactive']);
		Permission::create(['name' => 'departamentos.store']); 
		Permission::create(['name' => 'departamentos.index']); 
		Permission::create(['name' => 'departamentos.create']); 
		Permission::create(['name' => 'departamentos.update']); 
		Permission::create(['name' => 'departamentos.show']); 
		Permission::create(['name' => 'departamentos.destroy']); 
		Permission::create(['name' => 'departamentos.edit']); 
		Permission::create(['name' => 'departamentos.active']); 
		Permission::create(['name' => 'departamentos.inactive']); 
		Permission::create(['name' => 'ciudades.store']); 
		Permission::create(['name' => 'ciudades.index']); 
		Permission::create(['name' => 'ciudades.create']); 
		Permission::create(['name' => 'ciudades.update']); 
		Permission::create(['name' => 'ciudades.show']); 
		Permission::create(['name' => 'ciudades.destroy']); 
		Permission::create(['name' => 'ciudades.edit']); 
		Permission::create(['name' => 'ciudades.active']); 
		Permission::create(['name' => 'ciudades.inactive']); 
		Permission::create(['name' => 'catalogos.store']); 
		Permission::create(['name' => 'catalogos.index']); 
		Permission::create(['name' => 'catalogos.create']); 
		Permission::create(['name' => 'catalogos.update']); 
		Permission::create(['name' => 'catalogos.destroy']); 
		Permission::create(['name' => 'catalogos.edit']); 
		Permission::create(['name' => 'catalogos.active']); 
		Permission::create(['name' => 'catalogos.inactive']); 

		Permission::create(['name' => 'empresas.store']); 
		Permission::create(['name' => 'empresas.index']); 
		Permission::create(['name' => 'empresas.create']); 
		Permission::create(['name' => 'empresas.update']); 
		Permission::create(['name' => 'empresas.destroy']); 
		Permission::create(['name' => 'empresas.edit']); 
		Permission::create(['name' => 'empresas.active']); 
		Permission::create(['name' => 'empresas.inactive']); 

		Permission::create(['name' => 'documentos.store']); 
		Permission::create(['name' => 'documentos.index']); 
		Permission::create(['name' => 'documentos.create']); 
		Permission::create(['name' => 'documentos.update']); 
		Permission::create(['name' => 'documentos.destroy']); 
		Permission::create(['name' => 'documentos.edit']); 
		Permission::create(['name' => 'documentos.active']); 
		Permission::create(['name' => 'documentos.inactive']); 
		

        // create roles and assign created permissions


        // or may be done by chaining
        /*$role = Role::create(['name' => 'moderator'])
            ->givePermissionTo(['publish articles', 'unpublish articles']);*/

        $role = Role::create(['name' => 'SuperAdministrador']);
        $role->givePermissionTo(Permission::all());

        DB::table('model_has_roles')->insert([
            'role_id' => 1,
            'model_type' => 'App\User',
            'model_id' => 1
        ]);

        DB::table('model_has_roles')->insert([
            'role_id' => 1,
            'model_type' => 'App\User',
            'model_id' => 2
        ]);
    }
}