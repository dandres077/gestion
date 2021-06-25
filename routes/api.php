<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/departamentos/{pais_id}', 'WebController@departamentos'); //Retonar departamentos por id de País
Route::get('/pais/{pais_id}/departamento/{departamento_id}', 'WebController@ciudades'); //Retonar ciudades por id de Departamento
