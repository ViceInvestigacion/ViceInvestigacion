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
Route::get('convocatorias','convocatoriaController@index');
//Rutas de entidadBE
//Rutas de escuelaBE
Route::get('escuelas', 'escuelaController@index');
//Rutas de especialidadBE
Route::get('especialidades','especialidadController@index');
//Rutas de eventoBE .
Route::get('eventos', 'eventoController@index');
//Rutas de facultadBE
Route::get('facultades', 'facultadController@index');
//Rutas de noticiaBE
Route::get('noticias', 'noticiaController@index');
//Rutas de objetivoBE
//Rutas de pagoBE
//Rutas de personalBE
Route::get('personal', 'personalController@index');
//Rutas de ponenteBE
Route::get('ponentes', 'ponenteController@index');
//Rutas de profesionBE
Route::get('profesiones', 'profesionController@index');
//Rutas de proyectoBE
//Rutas de resolucionBE
Route::get('resoluciones', 'resolucionController@index');
//Rutas de resultadoBE
Route::get('resultados', 'resultadoController@index');
//Rutas de suscriptorBE
//Rutas de tesisBE
//Rutas de tipoAsistenteBE
Route::get('tipoAsistentes', 'tipoAsistenteController@index');
//Rutas de tipoEventoBE
Route::get('tipoEvento', 'tipoEventoController@index');
//Rutas de universidadBE 
Route::get('universidades', 'universidadController@index');
//Rutas de usuarioBE




