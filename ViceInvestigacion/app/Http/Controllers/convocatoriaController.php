<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\convocatoriaBE;

class convocatoriaController extends Controller
{
    public function index()
    {
        $datos = convocatoriaBE::all();
        foreach ($datos as $conv => $imagen_Conv) {
            $imagen_Conv = base64_encode ($imagen_Conv);
        }
        unset($imagen_Conv);
        return $datos;
    }
}
