<?php
namespace App\Http\Controllers;
use App\asistenteBE;
use App\eventoAsistenteBE;
use App\pagoBE;
class helpers extends Controller
{

    public function toAsistenteBE($request){
        $asistente = new asistenteBE();
        //$asistente=array('');
        $request= json_decode($request->getContent(), true);
        /*/array_push($asistente, "dni_Asis:"+$request[0]['dni_Asis']);
        array_push($asistente, "nombres_Asis:"+$request[0]['nombres_Asis']);
        array_push($asistente, "apellidos_Asis:"+$request[0]['apellidos_Asis']);
        array_push($asistente, "especialidad_Asis:"+$request[0]['especialidad_Asis']);
        array_push($asistente, "universidadProc_Asis:"+$request[0]['universidadProc_Asis']);
        array_push($asistente, "fecNac_Asis:"+$request[0]['fecNac_Asis']);
        array_push($asistente, "correo_Asis:"+$request[0]['correo_Asis']);
        array_push($asistente, "telefono_Asis:"+$request[0]['telefono_Asis']);
        array_push($asistente, "tipoAsis_Asis:"+$request[0]['tipoAsis_Asis']);*/


        $asistente->dni_Asis             = $request[0]['dni_Asis'];
        $asistente->nombres_Asis         = $request[0]['nombres_Asis'];
        $asistente->apellidos_Asis       = $request[0]['apellidos_Asis'];
        $asistente->especialidad_Asis    = $request[0]['especialidad_Asis'];
        $asistente->universidadProc_Asis = $request[0]['universidadProc_Asis'];
        $asistente->fecNac_Asis          = $request[0]['fecNac_Asis'];
        $asistente->correo_Asis          = $request[0]['correo_Asis'];
        $asistente->telefono_Asis        = $request[0]['telefono_Asis'];
        $asistente->tipoAsis_Asis        = $request[0]['tipoAsis_Asis'];

        $asistente->fecReg_Asis        = '31/10/2018';
        $asistente->usuReg_Asis        = 1;
        $asistente->tipoAsis_Asis        = 1;
        return $asistente;
    }
    public function toPagoBE($request){
        $pago = new pagoBE();
        $request= json_decode($request->getContent(), true);
        $pago->imagen_Pago     = $request[0]['imagen_Pago'];
        $pago->eventoAsis_Pago = $request[0]['eventoAsis_Pago'];
        $pago->estado_Pago     = $request[0]['estado_Pago'];
        $pago->usuApr_Pago     = $request[0]['usuApr_Pago'];
        $pago->fecha_Pago      = $request[0]['fecha_Pago'];
        $pago->fechaApr_Pago   = $request[0]['fechaApr_Pago'];
        return $pago;
    }
    public function toEventoAsistente($request){
        $eventoAsistente = new asistenteBE();
        $request= json_decode($request->getContent(), true);
        $eventoAsistente->evento_EventoAsis      = $request[0]['evento_EventoAsis'];
        $eventoAsistente->asistente_EventoAsis   = $request[0]['asistente_EventoAsis'];
        return $eventoAsistente;
    }
}