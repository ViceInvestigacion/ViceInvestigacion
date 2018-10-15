<?php

use Illuminate\Http\Request;

use app\facultadBE;
use App\convocatoriaBE;

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

//Rutas de FacultadBE 
Route::get('facultades', 'facultadController@index');


//Rutas de ConvocatoriaBE
Route::get('convocatorias', 'convocatoriaController@index');