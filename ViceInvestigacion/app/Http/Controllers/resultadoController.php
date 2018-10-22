<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\resultadoBE;
use App\helpers;

class resultadoController extends Controller
{
    public function index()
    {
        $helper = new helpers();
        $datos = resultadoBE::all();
    
         $filtered = $datos->map(function ($res) {
            return collect($res->toArray())
                ->only( ['descripcion_Resultado',/*'imagen_Resultado',*/'concurso_Resultado','estado_Resultado','usuReg_Resultado','fecReg_Resultado'])
                ->all();
        });
        
        return $filtered;
    }
}
