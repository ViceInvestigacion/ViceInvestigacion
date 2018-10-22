<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipoEventoBE;

class tipoEventoController extends Controller
{
    public function index()
    {
        $datos = tipoEventoBE::all();
    
        $filtered = $datos->map(function ($te) {
           return collect($te->toArray())
               ->only( ['descripcion_TipoEv','estado_TipoEv'])
               ->all();
       });
       
       return $filtered;
    }
}
