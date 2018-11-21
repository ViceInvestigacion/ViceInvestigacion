<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\asistenteBE;
use App\eventoAsistenteBE;
use App\pagoBE;

class asistenteController  extends helpers
{
    public function index ()
    {
        return asistenteBE::all();

    }
    public function insert_asistente(Request $request)
    {
        /*
            [
                {
                     "dni_Asis" :"75119312",
                    "nombres_Asis":"huaranga",
                    "apellidos_Asis":"Carreño",
                    "especialidad_Asis":"Sistemas",
                    "universidadProc_Asis":"1",
                    "fecNac_Asis":"01/08/1996",
                    "correo_Asis":"roviseis@gmail.com",
                    "telefono_Asis":"931697515",
                    "id_Evento":"3"
                }
            ]
        */
        //El asistente se registra ingresando sus datos personales
         $asistente   = helpers::toAsistenteBE($request);
         $a           = asistenteBE::create($asistente->toArray());
         $eventoAsistente   = helpers::toEventoAsistente($request,$a->id);
         $ea  = eventoAsistenteBE::create($eventoAsistente->toArray());
         return response()->json($ea, 200); 
        /*
            [
                {
                    "evento_EventoAsis": "3",
                    "asistente_EventoAsis": 20,
                    "id": 3
                }
            ]
        */

    }

    public function insert_Pago(Request $request,$correo,$id_EventoAsistente)
    {
        //localhost:8000/api/asistentes/roviseis@gmail.com/Pago/3
        /* body 
            [
                {
                    "imagen_Pago" :"75119312"
                }
            ]
        */
        $pago   = helpers::toPagoBE($request);
        $pago->eventoAsis_Pago=$id_EventoAsistente;
        $p      = pagoBE::create($pago->toArray());
        $resultado = eventoAsistenteBE::join('eventoBE', 'eventoAsistenteBE.evento_EventoAsis', '=', 'eventoBE.id_Evento')
        ->join('pagoBE', 'pagoBE.eventoAsis_Pago', '=', 'eventoAsistenteBE.id_EventoAsis')
        ->join('asistenteBE','eventoAsistenteBE.asistente_EventoAsis','=','asistenteBE.id_Asis')
        ->select(
            'asistenteBE.nombres_Asis',
            'asistenteBE.apellidos_Asis', 
            'asistenteBE.dni_Asis', 
            'asistenteBE.correo_Asis', 
            'eventoBE.nombre_Evento', 
            'eventoBE.fecInicio_Evento', 
            'eventoBE.fecFin_Evento', 
            'pagoBE.fecha_Pago', 
            'pagoBE.imagen_Pago'
        )
        ->where([
            ['pagoBE.id_Pago',$p->id]
        ])
        ->get();  


        return response()->json($resultado, 200); 
    
    
    }
    public function find_asistente($correo)
    {
        return  asistenteBE::where('correo_Asis', $correo)->get();
        
    }
    public function find_asistentePago($correo)
    {
        return  asistenteBE::join('eventoAsistenteBE', 'asistenteBE.id_Asis', '=', 'eventoAsistenteBE.asistente_EventoAsis')
        ->Leftjoin('pagoBE', 'eventoAsistenteBE.id_EventoAsis', '=', 'pagoBE.eventoAsis_Pago')
        ->join('eventoBE','eventoAsistenteBE.evento_EventoAsis','=','eventoBE.id_Evento')
        ->select(
            'eventoBE.nombre_Evento',
            'eventoBE.fecInicio_Evento', 
            'asistenteBE.apellidos_Asis', 
            'asistenteBE.nombres_Asis', 
            'asistenteBE.dni_Asis', 
            'asistenteBE.telefono_Asis', 
            'eventoAsistenteBE.id_EventoAsis'
        )
        ->where([
            ['pagoBE.id_Pago',null],
            ['asistenteBE.correo_Asis', $correo],
            ['eventoBE.fecInicio_Evento','<',date("Y-m-d")],
        ])
        ->get();  
    }

}
