<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\especialidadBE;

class especialidadController extends Controller
{
    public function index()
    {
        try {
        return especialidadBE::all();
        }  catch (\Exception $e) {
            return response()->json('Ocurrió un Error Inesperado', 200);  
        }
        
    }
}
