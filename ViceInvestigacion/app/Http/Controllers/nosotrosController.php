<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nosotrosBE;
class nosotrosController extends Controller
{
    public function index()
    {
        try {
        $datos = nosotrosBE::where('estado_Nos',1)->first();
        return response()->json( $datos , 200);  
        }  catch (\Exception $e) {
            return response()->json( $e, 200);  
        }
    }
}
