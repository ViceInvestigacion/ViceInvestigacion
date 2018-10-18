<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\convocatoriaBE;
include "$_SERVER[DOCUMENT_ROOT]/app/helpers.php";

class convocatoriaController extends Controller
{
   
    public function index()
    {
        $helper = new helpers();
        $datos = convocatoriaBE::all();
        
        foreach ($datos as $clave => $valor) {
           if($clave == 'imagen_Conv')
           {
             $valor = $helper->byteToString($valor);
           }
        }
        
        
      
       /* $filtered = $datos->map(function ($conv) {
            return collect($conv->toArray())
                ->only( ['descripcion_Conv','fecha_Conv','estado_Conv','usuReg_Conv','fecReg_Conv'])
                ->all();
        });*/
        
        return $datos;
    }
}
