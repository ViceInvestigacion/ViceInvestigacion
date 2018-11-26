<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\eventoBE;

class eventoController extends Controller
{
    public function index()
    {
        $datos = eventoBE::all();
        $filtered = $datos->map(function ($eve) {
            return collect($eve->toArray())
                ->only( ['nombre_Evento','descripcion_Evento','tipo_Evento','duracion_Evento','fecInicio_Evento','fecFin_Evento','horaInicio_Evento','horaFin_Evento','cstGSnCertificado_Evento','cstGCnCertificado_Evento','cstFCnCertificado_Evento'/*,'imagen_Evento'*/,'capacidadD_Evento'])
                ->all();
        });
        return $datos;
    }
}
