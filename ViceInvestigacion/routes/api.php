<?php

use Illuminate\Http\Request;

use App\accesoBE;
use App\asistenteBE;
use App\comunidadAutoBE;
use App\comunidadProyBE;
use App\convocatoriaBE;
use App\entidadColaBE;
use App\facultadBE;
use App\noticiaBE;
use App\objetivoBE;
use App\pagoBE;
use App\personalBE;
use App\ponenteBE;
use App\profesionBE;
use App\proyectoBE;
use App\resolucionBE;
use App\resultadoBE;
use App\suscriptorBE;
use App\tesisBE;
use App\tipoAsistenteBE;
use App\tipoEventoBE;
use App\universidadBE;
use App\usuarioBE;

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
//Rutas de accesoBE 
//Rutas de asistenteBE
//Rutas de comunidadAutoBE
//Rutas de convocatoriaBE
Route::get('convocatorias','convocatoriaController@index');//ok
//Rutas de entidadBE
//Rutas de escuelaBE
Route::get('escuelas', 'escuelaController@index');//ok
//Rutas de especialidadBE
Route::get('especialidades','especialidadController@index');//ok
//Rutas de eventoBE .
Route::get('eventos', 'eventoController@index');//ok
//Rutas de facultadBE
Route::get('facultades', 'facultadController@index');//ok
//Rutas de noticiaBE
Route::get('noticias', 'noticiaController@index');//ok
//Rutas de objetivoBE
//Rutas de pagoBE
//Rutas de personalBE

//Rutas de ponenteBE

//Rutas de profesionBE
Route::get('profesiones', 'profesionController@index');//ok
//Rutas de proyectoBE
Route::get('proyectos', 'proyectoController@index');//ok
Route::get('proyectos/{id}','proyectoController@find_Escuela');
//Rutas de resolucionBE
Route::get('resoluciones', 'resolucionController@index');//ok
//Rutas de resultadoBE
Route::get('resultados', 'resultadoController@index');//ok
//Rutas de suscriptorBE
Route::post('suscriptores', 'suscriptorController@insert');
Route::put('suscriptores/{id}', 'suscriptorController@update');
Route::delete('suscriptores/{id}', 'suscriptorController@delete');
//Rutas de tesisBE
//Rutas de tipoAsistenteBE
Route::get('tipoAsistentes', 'tipoAsistenteController@index');
//Rutas de tipoEventoBE
Route::get('tipoEvento', 'tipoEventoController@index');//ok
//Rutas de universidadBE 

//Rutas de usuarioBE




