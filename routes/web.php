<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();



Route::middleware(['auth'])->group(function(){

	Route::get('admin/home', 'HomeController@index')->name('home');
	Route::get('home', 'HomeController@index')->name('home');
	Route::get('home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| Roles
|--------------------------------------------------------------------------
|
*/
	Route::post('admin/roles/store', 'RoleController@store');
	Route::get('admin/roles', 'RoleController@index');
	Route::get('admin/roles/create', 'RoleController@create');
	Route::post('admin/roles/{id}/edit', 'RoleController@update');
	Route::get('admin/roles/{id}', 'RoleController@show');
	Route::delete('admin/roles/{id}', 'RoleController@destroy');
	Route::get('admin/roles/{id}/edit', 'RoleController@edit');

/*
|--------------------------------------------------------------------------
| Permisos
|--------------------------------------------------------------------------
|
*/
	Route::post('admin/permisos/store', 'PermisosController@store');
	Route::get('admin/permisos', 'PermisosController@index');
	Route::get('admin/permisos/create', 'PermisosController@create');
	Route::put('admin/permisos/{role}', 'PermisosController@edit');
	Route::get('admin/permisos/{role}', 'PermisosController@show');
	Route::delete('admin/permisos/{role}', 'PermisosController@destroy');
	Route::get('admin/permisos/{role}/edit', 'PermisosController@edit');

/*
|--------------------------------------------------------------------------
| Usuarios
|--------------------------------------------------------------------------
|
*/
	Route::post('admin/usuarios/store', 'UserController@store')->middleware('permiso:usuarios.store'); 
	Route::get('admin/usuarios', 'UserController@index')->middleware('permiso:usuarios.index'); 
	Route::get('admin/usuarios/create', 'UserController@create')->middleware('permiso:usuarios.create'); 
	Route::post('admin/usuarios/{id}/edit', 'UserController@update')->middleware('permiso:usuarios.update'); 
	Route::get('admin/usuarios/{role}', 'UserController@show')->middleware('permiso:usuarios.show'); 
	Route::delete('admin/usuarios/{id}', 'UserController@destroy')->middleware('permiso:usuarios.destroy'); 
	Route::get('admin/usuarios/{id}/edit', 'UserController@edit')->middleware('permiso:usuarios.edit'); 
	Route::post('admin/usuarios/{id}/active', 'UserController@active')->middleware('permiso:usuarios.active'); 
	Route::post('admin/usuarios/{id}/inactive', 'UserController@inactive')->middleware('permiso:usuarios.inactive'); 
	Route::post('admin/usuarios/pwd', 'UserController@pwd')->name('usuarios.pwd'); 

	Route::get('admin/perfil', 'UserController@show')->middleware('permiso:usuarios.show'); 
	Route::get('admin/perfil/{id}/edit', 'UserController@editarperfil')->middleware('permiso:usuarios.editarperfil'); 
	Route::post('admin/perfil/{id}/edit', 'UserController@updateperfil')->middleware('permiso:usuarios.updateperfil'); 


/*
|--------------------------------------------------------------------------
| Departamentos
|--------------------------------------------------------------------------
|
*/
	Route::post('admin/departamentos/store', 'DepartamentosController@store')->middleware('permiso:departamentos.store'); 
	Route::get('admin/departamentos', 'DepartamentosController@index')->middleware('permiso:departamentos.index'); 
	Route::get('admin/departamentos/create', 'DepartamentosController@create')->middleware('permiso:departamentos.create'); 
	Route::post('admin/departamentos/{id}/edit', 'DepartamentosController@update')->middleware('permiso:departamentos.update'); 
	Route::get('admin/departamentos/{id}', 'DepartamentosController@show')->middleware('permiso:departamentos.show'); 
	Route::delete('admin/departamentos/{id}', 'DepartamentosController@destroy')->middleware('permiso:departamentos.destroy'); 
	Route::get('admin/departamentos/{id}/edit', 'DepartamentosController@edit')->middleware('permiso:departamentos.edit'); 
	Route::post('admin/departamentos/{id}/active', 'DepartamentosController@active')->middleware('permiso:departamentos.active'); 
	Route::post('admin/departamentos/{id}/inactive', 'DepartamentosController@inactive')->middleware('permiso:departamentos.inactive'); 


/*
|--------------------------------------------------------------------------
| Ciudades
|--------------------------------------------------------------------------
|
*/
	Route::post('admin/ciudades/store', 'CiudadesController@store')->middleware('permiso:ciudades.store'); 
	Route::get('admin/ciudades', 'CiudadesController@index')->middleware('permiso:ciudades.index'); 
	Route::get('admin/ciudades/create', 'CiudadesController@create')->middleware('permiso:ciudades.create'); 
	Route::post('admin/ciudades/{id}/edit', 'CiudadesController@update')->middleware('permiso:ciudades.update'); 
	Route::get('admin/ciudades/{id}', 'CiudadesController@show')->middleware('permiso:ciudades.show'); 
	Route::delete('admin/ciudades/{id}', 'CiudadesController@destroy')->middleware('permiso:ciudades.destroy'); 
	Route::get('admin/ciudades/{id}/edit', 'CiudadesController@edit')->middleware('permiso:ciudades.edit'); 
	Route::post('admin/ciudades/{id}/active', 'CiudadesController@active')->middleware('permiso:ciudades.active'); 
	Route::post('admin/ciudades/{id}/inactive', 'CiudadesController@inactive')->middleware('permiso:ciudades.inactive'); 


/*
|--------------------------------------------------------------------------
| Paises
|--------------------------------------------------------------------------
|
*/

	Route::post('admin/paises/store', 'PaisesController@store')->middleware('permiso:paises.store'); 
	Route::get('admin/paises', 'PaisesController@index')->middleware('permiso:paises.index'); 
	Route::get('admin/paises/create', 'PaisesController@create')->middleware('permiso:paises.create'); 
	Route::post('admin/paises/{id}/edit', 'PaisesController@update')->middleware('permiso:paises.update'); 
	Route::get('admin/paises/{id}/edit', 'PaisesController@edit')->middleware('permiso:paises.edit'); 
	Route::post('admin/paises/{id}/active', 'PaisesController@active')->middleware('permiso:paises.active'); 
	Route::post('admin/paises/{id}/inactive', 'PaisesController@inactive')->middleware('permiso:paises.inactive'); 

/*
|--------------------------------------------------------------------------
| Catálogos
|--------------------------------------------------------------------------
|
*/
	Route::post('admin/catalogos/store', 'CatalogosController@store')->middleware('permiso:catalogos.store'); 
	Route::get('admin/catalogos', 'CatalogosController@index')->middleware('permiso:catalogos.index'); 
	Route::get('admin/catalogos/create', 'CatalogosController@create')->middleware('permiso:catalogos.create'); 
	Route::post('admin/catalogos/{id}/edit', 'CatalogosController@update')->middleware('permiso:catalogos.update'); 
	Route::delete('admin/catalogos/{id}', 'CatalogosController@destroy')->middleware('permiso:catalogos.destroy'); 
	Route::get('admin/catalogos/{id}/edit', 'CatalogosController@edit')->middleware('permiso:catalogos.edit'); 
	Route::post('admin/catalogos/{id}/active', 'CatalogosController@active')->middleware('permiso:catalogos.active'); 
	Route::post('admin/catalogos/{id}/inactive', 'CatalogosController@inactive')->middleware('permiso:catalogos.inactive'); 


/*
|--------------------------------------------------------------------------
| Empresas
|--------------------------------------------------------------------------
|
*/
	Route::post('admin/empresas/store', 'EmpresasController@store')->middleware('permiso:empresas.store'); 
	Route::get('admin/empresas', 'EmpresasController@index')->middleware('permiso:empresas.index'); 
	Route::get('admin/empresas/create', 'EmpresasController@create')->middleware('permiso:empresas.create'); 
	Route::post('admin/empresas/{id}/edit', 'EmpresasController@update')->middleware('permiso:empresas.update'); 
	Route::delete('admin/empresas/{id}', 'EmpresasController@destroy')->middleware('permiso:empresas.destroy'); 
	Route::get('admin/empresas/{id}/edit', 'EmpresasController@edit')->middleware('permiso:empresas.edit'); 
	Route::post('admin/empresas/{id}/active', 'EmpresasController@active')->middleware('permiso:empresas.active'); 
	Route::post('admin/empresas/{id}/inactive', 'EmpresasController@inactive')->middleware('permiso:empresas.inactive'); 


/*
|--------------------------------------------------------------------------
| Documentos
|--------------------------------------------------------------------------
|
*/
	Route::post('admin/documentos/store', 'DocumentosController@store')->middleware('permiso:documentos.store'); 
	Route::get('admin/documentos', 'DocumentosController@index')->middleware('permiso:documentos.index'); 
	Route::get('admin/documentos/create', 'DocumentosController@create')->middleware('permiso:documentos.create'); 
	Route::post('admin/documentos/{id}/edit', 'DocumentosController@update')->middleware('permiso:documentos.update'); 
	Route::delete('admin/documentos/{id}', 'DocumentosController@destroy')->middleware('permiso:documentos.destroy'); 
	Route::get('admin/documentos/{id}/edit', 'DocumentosController@edit')->middleware('permiso:documentos.edit'); 
	Route::post('admin/documentos/{id}/active', 'DocumentosController@active')->middleware('permiso:documentos.active'); 
	Route::post('admin/documentos/{id}/inactive', 'DocumentosController@inactive')->middleware('permiso:documentos.inactive'); 




});