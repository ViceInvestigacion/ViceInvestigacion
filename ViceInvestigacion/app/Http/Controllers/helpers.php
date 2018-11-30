<?php
namespace App\Http\Controllers;
use App\asistenteBE;
use App\eventoAsistenteBE;
use App\pagoBE;
use App\suscriptorBE;
class helpers extends Controller
{

    public function toAsistenteBE($request){
        $asistente = new asistenteBE(); 
        $request= json_decode($request->getContent(), true);
        $asistente->dni_Asis             = $request[0]['dni_Asis'];
        $asistente->nombres_Asis         = $request[0]['nombres_Asis'];
        $asistente->apellidos_Asis       = $request[0]['apellidos_Asis'];
        $asistente->especialidad_Asis    = $request[0]['especialidad_Asis'];
        $asistente->universidadProc_Asis = $request[0]['universidadProc_Asis'];
        $asistente->fecNac_Asis          = $request[0]['fecNac_Asis'];
        $asistente->correo_Asis          = $request[0]['correo_Asis'];
        $asistente->telefono_Asis        = $request[0]['telefono_Asis'];
        $asistente->fecReg_Asis          = date("Y-m-d");
        $asistente->usuReg_Asis          = 1;
        $asistente->tipoAsis_Asis        = 1;
        return $asistente;
    }
    public function toPagoBE($request){
        $pago = new pagoBE();
        $request= json_decode($request->getContent(), true);
        $pago->imagen_Pago     = 01010101;//$request[0]['imagen_Pago'];
        $pago->eventoAsis_Pago = '';
        $pago->estado_Pago     = 1;
        $pago->usuApr_Pago     = 1;
        $pago->fecha_Pago      = date("Y-m-d");
        $pago->fechaApr_Pago   = date("Y-m-d");
        return $pago;
    }
    public function toEventoAsistente($request,$idAsis){
        $eventoAsistente = new eventoAsistenteBE();
        $request= json_decode($request->getContent(), true);
        $eventoAsistente->evento_EventoAsis      = $request[0]['id_Evento'];
        $eventoAsistente->asistente_EventoAsis   = $idAsis;
        return $eventoAsistente;
    }

    public function toSuscriptor($request){
        $suscriptor = new suscriptorBE();
        $request= json_decode($request->getContent(), true);
        $suscriptor->nombres_Susc      = $request[0]['nombres_Susc'];
        $suscriptor->apellidos_Susc    = $request[0]['apellidos_Susc'];
        $suscriptor->correo_Susc       = $request[0]['correo_Susc'];
        $suscriptor->estado_Susc       = '1';
        $suscriptor->entidad_Susc      = '1';
        $suscriptor->profesion_Susc    = '1';//cambiar 
        return $suscriptor;
    }

    // try {
    //     
    // }  catch (\Exception $e) {
    //     return response()->json('Ocurrió un Error Inesperado', 200);  
    // }
}