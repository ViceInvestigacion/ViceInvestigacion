<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\eventoBE;

class eventoController extends Controller
{
    public function index()
    {
        try {
        $datos = eventoBE::all();
        $filtered = $datos->map(function ($eve) {
            return collect($eve->toArray())
                ->only( ['nombre_Evento','descripcion_Evento','tipo_Evento','duracion_Evento','fecInicio_Evento','fecFin_Evento','horaInicio_Evento','horaFin_Evento','cstGSnCertificado_Evento','cstGCnCertificado_Evento','cstFCnCertificado_Evento','imagen_Evento','capacidadD_Evento'])
                ->all();
        });
        return $datos;
        }  catch (\Exception $e) {
            return response()->json('Ocurrió un Error Inesperado', 200);  
        }
        
    }
    public function find($idEvento)
    {
        try {
        $datos = eventoBE::where('id_Evento',$idEvento)->get();;
        $filtered = $datos->map(function ($eve) {
            return collect($eve->toArray())
                ->only( ['nombre_Evento','descripcion_Evento','tipo_Evento','duracion_Evento','fecInicio_Evento','fecFin_Evento','horaInicio_Evento','horaFin_Evento','cstGSnCertificado_Evento','cstGCnCertificado_Evento','cstFCnCertificado_Evento','imagen_Evento','capacidadD_Evento'])
                ->all();
        });
        return $datos;
        }  catch (\Exception $e) {
            return response()->json('Ocurrió un Error Inesperado', 200);  
        }
        
    }
}
