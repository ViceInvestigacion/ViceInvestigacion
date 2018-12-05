<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\noticiaBE;

class noticiaController extends Controller
{
    public function index()
    {
        try {
        $helper = new helpers();
        $datos = noticiaBE::where('estado_Noticia',1)->get();
        return response()->json( $datos , 200);  
        }  catch (\Exception $e) {
            return response()->json( $e, 200);  
        }
    }
}
