<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\resultadoBE;

class resultadoController extends Controller
{
    public function index()
    {
        $datos = resultadoBE::all();
        foreach ($datos as $res ) {
            $res->imagen_Resultado = base64_encode($res->imagen_Resultado);
        }
         $filtered = $datos->map(function ($res) {
            return collect($res->toArray())
                ->only( ['descripcion_Resultado','concurso_Resultado','imagen_Resultado'])
                ->all();
        });
        
        return $filtered;
    }

    public function find_Resultado($idConvocatoria)
    {
        $datos = resultadoBE::where('concurso_Resultado',$idConvocatoria)->get();
        foreach ($datos as $res ) {
            $res->imagen_Resultado = base64_encode($res->imagen_Resultado);
        }
         $filtered = $datos->map(function ($res) {
            return collect($res->toArray())
                ->only( ['descripcion_Resultado','concurso_Resultado','imagen_Resultado'])
                ->all();
        });
        return $filtered;
    }
}


