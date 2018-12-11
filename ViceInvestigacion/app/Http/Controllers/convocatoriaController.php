<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\convocatoriaBE;

class convocatoriaController extends Controller
{
    public function index()
    {
        try {
            $datos = convocatoriaBE::where('estado_Conv',1)->get();
             $filtered = $datos->map(function ($conv) {
                return collect($conv->toArray())
                    ->only( ['descripcion_Conv','fecha_Conv','imagen_Conv'])
                    ->all();
            });
            return $filtered;
        }  catch (\Exception $e) {
            return response()->json('Ocurrió un Error Inesperado', 200);  
        }
    }
}
