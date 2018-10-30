<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\asistenteBE;
use App\eventoAsistenteBE;
use App\pagoBE;

class asistenteController extends Controller
{
    public function index ()
    {
        return asistenteBE::all();

    }
    public function insert(Request $request)
    {

       //$asistente = asistenteBE::create($request->getContent());
        $request= json_decode($request->getContent(), true);
        return $request[0]['dni_Asis']; //sacar los campos que se necesitan para insercion 
       /*  if($asistente!='')
       {
          $eventoAsistente =  eventoAsistenteBE::create(['evento_EventoAsis' => $request->evento_EventoAsis],['asistente_EventoAsis' =>$asistente->asistente_EventoAsis]);
           if($eventoAsistente!='')
           {
               $pago =  pagoBE::create(['id_EventoAsis' =>  $eventoAsistente->id_EventoAsis],$request);
               if($pago!='')
               {
                return response()->json("Created",201);
               }
           }
       }
       return response()->json("Bad Request",400);  */
    }
}
