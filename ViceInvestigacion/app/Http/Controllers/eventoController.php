<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\eventoBE;

class eventoController extends Controller
{
    public function index()
    {
        $datos = eventoBE::all();
        /* $filtered = $datos->map
       [nombre_Evento]
           ,[descripcion_Evento]
           ,[tipo_Evento]
           ,[duracion_Evento]
           ,[fecInicio_Evento]
           ,[fecFin_Evento]
           ,[horaInicio_Evento]
           ,[horaFin_Evento]
           ,[cstGSnCertificado_Evento]
           ,[cstGCnCertificado_Evento]
           ,[cstFCnCertificado_Evento]
           ,[detalle_Evento]
           ,[imagen_Evento]
           ,[usuReg_Evento]
           ,[fecReg_Evento])*/
           return $datos;
    }
}