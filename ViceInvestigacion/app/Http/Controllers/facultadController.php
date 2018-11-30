<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\facultadBE;

class facultadController extends Controller
{
    public function index()
    {
      try {
         return facultadBE::all();
      }  catch (\Exception $e) {
          return response()->json('Ocurrió un Error Inesperado', 200);  
      }
     
    }
}
