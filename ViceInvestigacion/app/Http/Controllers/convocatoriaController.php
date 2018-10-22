<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\convocatoriaBE;
use App\helpers;

class convocatoriaController extends Controller
{
   
    public function index()
    {
        $helper = new helpers();
        $datos = convocatoriaBE::all();
    
         $filtered = $datos->map(function ($conv) {
            return collect($conv->toArray())
                ->only( ['descripcion_Conv',/*'imagen_Conv',*/'fecha_Conv','estado_Conv','usuReg_Conv','fecReg_Conv'])
                ->all();
        });
        
        return $filtered;
    }
}
