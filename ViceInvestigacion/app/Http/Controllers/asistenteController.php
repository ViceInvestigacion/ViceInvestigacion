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
                    "telefono_Asis":"931697515"
                }
            ]
        */
        //El asistente se registra ingresando sus datos personales
         $asistente   = helpers::toAsistenteBE($request);
         $a           = asistenteBE::create($asistente->toArray());
         $eventoAsistente   = helpers::toEventoAsistente($request,$a->id);
         $ea  = eventoAsistenteBE::create($eventoAsistente->toArray());
         return response()->json($ea, 200); 
    }

    public function insert_Pago(Request $request)
    {
        // pago
        //$pago =  helpers::toPagoBE($request);
        //$pago->imagen_Pago = base64_encode( $pago->imagen_Pago);
        //$p    =  pagoBE::create($pago->toArray());
        //asistente pago 
        //$eventoAsistente = helpers::toEventoAsistente($request);
        //$eventoAsistente->evento_EventoAsis = $p->eventoAsis_Pago;
        //$ea = pagoBE::create($eventoAsistente->toArray());
    }
    public function find_eventoPagoPendiente(Request $request)
    {
        $request= json_decode($request->getContent(), true);
        $correoAsistente->evento_EventoAsis      = $request[0]['correo_Asis'];
        
    }

}
