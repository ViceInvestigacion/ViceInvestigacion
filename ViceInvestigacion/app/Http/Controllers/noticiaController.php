<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticiaBE;

class noticiaController extends Controller
{
    public function index()
    {
        $helper = new helpers();
        $datos = noticiaBE::all();
        foreach ($datos as $noti ) {
            $noti->imagen_Noticia = base64_encode($noti->imagen_Noticia);
        }
         $filtered = $datos->map(function ($not) {
            return collect($not->toArray())
                ->only( ['descripcion_Noticia','fecha_Noticia','imagen_Noticia'])
                ->all();
        });
        
        return $filtered;
    }
}
