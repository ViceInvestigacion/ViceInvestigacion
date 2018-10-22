<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticiaBE;
use App\helpers;

class noticiaController extends Controller
{
    public function index()
    {
        $helper = new helpers();
        $datos = noticiaBE::all();
    
         $filtered = $datos->map(function ($not) {
            return collect($not->toArray())
                ->only( ['descripcion_Noticia','fecha_Noticia','estado_Noticia','imagen_Noticia','usuReg_Noticia','fecReg_Noticia'])
                ->all();
        });
        
        return $filtered;
    }
}
