<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\escuelaBE;

class escuelaController extends Controller
{
    public function index()
{
        try {
        return escuelaBE::all();
        }  catch (\Exception $e) {
            return response()->json('Ocurrió un Error Inesperado', 200);  
        }
       
    }

    public function find_escuelas($facultad)
    {
        try {
        return  escuelaBE::where('facultadId_Escuela',$facultad)->get();
        }  catch (\Exception $e) {
            return response()->json('Ocurrió un Error Inesperado', 200);  
        }
       
    }

}
