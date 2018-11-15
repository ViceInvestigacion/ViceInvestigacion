<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\convocatoriaBE;

class convocatoriaController extends Controller
{
   
    public function index()
    {
        $datos = convocatoriaBE::all();
        foreach ($datos as $conv ) {
            $conv->imagen_Conv = base64_encode($conv->imagen_Conv);
        }
         $filtered = $datos->map(function ($conv) {
            return collect($conv->toArray())
                ->only( ['descripcion_Conv','imagen_Conv','fecha_Conv','estado_Conv','usuReg_Conv','fecReg_Conv'])
                ->all();
        });
        
        return $filtered;
    }
}
