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
        //El asistente se registra ingresando sus datos personales
         $asistente =  helpers::toAsistenteBE($request);
         $a         = asistenteBE::create($asistente->toArray());
         return  $a;
    }

    public function insert_Pago(Request $request)
    {
        // pago
        $pago =  helpers::toPagoBE($request);
        $pago->imagen_Pago = base64_encode( $pago->imagen_Pago);
        $p    =  pagoBE::create($pago->toArray());
        //asistente pago 
        $eventoAsistente = helpers::toEventoAsistente($request);
        $ea = pagoBE::create($eventoAsistente->toArray());
    }
}
