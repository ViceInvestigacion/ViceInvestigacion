<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\universidadBE;
class universidadController extends Controller
{
    public function index()
    {
        try {
            return universidadBE::all();
        }  catch (\Exception $e) {
            return response()->json('Ocurrió un Error Inesperado', 200);  
        }
    }
}
