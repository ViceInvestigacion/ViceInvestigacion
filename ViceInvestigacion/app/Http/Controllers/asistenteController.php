<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\asistenteBE;
use App\eventoAsistenteBE;
use App\pagoBE;
use App\eventoBE;

class asistenteController  extends helpers
{
    public function index ()
    {
        return asistenteBE::all();

    }
    public function insert_asistente(Request $request)
    {
         $abe;  
         $id_asistente;
         $asistente         = helpers::toAsistenteBE($request);
         $a                 = asistenteBE::where('correo_Asis',$asistente->correo_Asis)->get();
         if($a=="[]")
         {
            $a              = asistenteBE::create($asistente->toArray());
            $id_asistente = $a->id;
         }
         else
         {  
            $id_asistente = $a[0]->id_Asis;
         }
         $eventoAsistente   = helpers::toEventoAsistente($request, $id_asistente);
         $eabe              = eventoAsistenteBE::where([['evento_EventoAsis',$eventoAsistente->evento_EventoAsis],['asistente_EventoAsis',$eventoAsistente->asistente_EventoAsis]])->get();
         if($eabe=="[]")
         {
            $evento = eventoBE::where('id_Evento',$eventoAsistente->evento_EventoAsis)->get();
            if($evento[0]->capacidadD_Evento>=1)
            {
                $eabe           = eventoAsistenteBE::create($eventoAsistente->toArray());
                // eventoBE::update()
                return response()->json($eabe, 200);
            }
            else
            {
                return response()->json("No hay cupos disponibles", 200);
            }
         }
         else{
            return response()->json("Correo ya se encuentra registrado en este evento", 200);
         }
            return response()->json("No se pudo registrar al evento", 200);
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
