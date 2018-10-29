<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proyectoBE;

class proyectoController extends Controller
{
    public function index()
    {
        return proyectoBE::all();
        
    }
    public function find_Escuela($id)
    {
       return  proyectoBE::where('escuelaId_Proyecto', $id)->get();
       
    }
    public function find_Titulo (Request $titulo)
    {
        return  proyectoBE::where('titulo_Proyecto', 'LIKE', '%'.$titulo.'%')->get();
    }
}
