<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\resolucionBE;
use App\helpers;

class resolucionController extends Controller
{
    public function index()
    {
        $helper = new helpers();
        $datos = resolucionBE::all();
    
         $filtered = $datos->map(function ($not) {
            return collect($not->toArray())
                ->only( ['descripcion_Resolucion'/*,'archivo_Resolucion'*/])
                ->all();
        });
        
        return $filtered;
    }
}
