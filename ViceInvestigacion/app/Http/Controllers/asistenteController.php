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

    public function insert_Pago(Request $request)
    {
       
    }
    public function find_asistente($correo)
    {
        return  asistenteBE::where('correo_Asis', $correo)->get();
        
    }
    public function find_asistentePago($correo)
    {
        return  DB::table('asistenteBE')->join('eventoAsistenteBE', 'asistenteBE.id_Asis', '=', 'eventoAsistenteBE.id_Asis')
        ->join('pagoBE', 'eventoAsistenteBErs.id_Pago', '=', 'pagoBE.id_Pago')
        ->select('eventoAsistenteBE.*')
        ->get();
       
        
    }

}
