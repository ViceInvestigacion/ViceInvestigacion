<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\asistenteBE;
use App\eventoAsistenteBE;
use App\pagoBE;
use App\eventoBE;
use DB;

class asistenteController  extends helpers
{
    public function index ()
    {
        return asistenteBE::all();

    }
    public function insert_asistente(Request $request)
    {
        DB::beginTransaction();
        try{
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
         $asistente         = asistenteBE::where('id_Asis',$id_asistente)->first();
         $eventoAsistente   = helpers::toEventoAsistente($request, $id_asistente);
         $eabe              = eventoAsistenteBE::where([['evento_EventoAsis',$eventoAsistente->evento_EventoAsis],['asistente_EventoAsis',$eventoAsistente->asistente_EventoAsis]])->get();
         if($eabe=="[]")
         {
            $evento = eventoBE::where('id_Evento',$eventoAsistente->evento_EventoAsis)->first();
             if($evento->capacidadD_Evento>=1)
            {
                $eabe           = eventoAsistenteBE::create($eventoAsistente->toArray());
                $evento->capacidadD_Evento = ($evento->capacidadD_Evento)-1; 
                $evento->save(); 
                DB::commit();
               // Mail::to($asistente->correo_Asis)->send(new MessagesList($call));
                return response()->json('registrado: ', 200);
            }
            else
            {
                DB::rollBack();
                return response()->json("No hay cupos disponibles", 200);
            }
            return response()->json(($evento->capacidadD_Evento)-1, 200);
         }
         else{
            DB::rollBack();
            return response()->json("Correo ya se encuentra registrado en este evento", 200);
         }
            DB::rollBack();
            return response()->json("No se pudo registrar al evento", 200);
        } 
        catch(\Exception $e){
            DB::rollBack();
            return response()->json('Error inesperado', 200);
        }
        
    }

    public function insert_Pago(Request $request,$correo,$id_EventoAsistente)
    {
        DB::beginTransaction();
        try {
            $pago   = helpers::toPagoBE($request);
            $pago->eventoAsis_Pago=$id_EventoAsistente;
           
            $var1  = eventoAsistenteBE::Where('id_EventoAsis',$id_EventoAsistente)->first();
            if ($var1)
            {
                $var = pagoBe::Where('eventoAsis_Pago',$id_EventoAsistente)->first();
                if(empty($var))
                {
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
                    DB::commit(); 
                    return response()->json($resultado, 200);
                }
                else
                {
                    return response()->json('Pago ya registrado', 200);
                }
            }
            else{
                return response()->json('Evento-Asistente No existe', 200);
            }   
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json('Ocurrió un Error Inesperado', 200);
        }
    }

    public function find_asistente($correo)
    {
        try {
            return  asistenteBE::where('correo_Asis', $correo)->get();   
        }  catch (\Exception $e) {
            return response()->json('Ocurrió un Error Inesperado', 200);  
        }
    }
    public function find_asistentePago($correo)
    {
        try {
            return  asistenteBE::join('eventoAsistenteBE', 'asistenteBE.id_Asis', '=', 'eventoAsistenteBE.asistente_EventoAsis')
        ->Leftjoin('pagoBE', 'eventoAsistenteBE.id_EventoAsis', '=', 'pagoBE.eventoAsis_Pago')
        ->join('eventoBE','eventoAsistenteBE.evento_EventoAsis','=','eventoBE.id_Evento')
        ->select(
            'eventoBE.nombre_Evento',
            'eventoBE.descripcion_Evento',
            'eventoBE.fecInicio_Evento', 
            'eventoBE.horaInicio_Evento', 
            'asistenteBE.apellidos_Asis', 
            'asistenteBE.nombres_Asis', 
            'asistenteBE.dni_Asis', 
            'asistenteBE.telefono_Asis', 
            'eventoAsistenteBE.id_EventoAsis'
        )
        ->where([
            ['pagoBE.id_Pago',null],
            ['asistenteBE.correo_Asis', $correo],
            ['eventoBE.fecInicio_Evento','>',date("Y-m-d")],
        ])
        ->get();  
        }  catch (\Exception $e) {
            return response()->json('Ocurrió un Error Inesperado', 200);  
        }
       
    }

}
