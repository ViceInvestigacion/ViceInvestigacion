<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\resolucionBE;
use App\helpers;

class resolucionController extends Controller
{
    public function index()
    {
        try {
            $helper = new helpers();
            $datos = resolucionBE::all();
            $filtered = $datos->map(function ($not) {
            return collect($not->toArray())
                ->only( ['descripcion_Resolucion'/*,'archivo_Resolucion'*/])
                ->all();
            });
            return $filtered;
        }  catch (\Exception $e) {
            return response()->json('Ocurrió un Error Inesperado', 200);  
        }
           
    }
}
