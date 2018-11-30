<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proyectoBE;

class proyectoController extends Controller
{
    public function index()
    {
        try {
         return proyectoBE::all();
        }  catch (\Exception $e) {
            return response()->json('Ocurrió un Error Inesperado', 200);  
        }
    }
    public function find_Escuela($id)
    {
        try {
            if($id !='all')
            {
                if(intval($id)!='')
                {
                    $strlen = strlen($id);
                    $id= intval($id);
                    if($strlen==strlen($id))
                    {
                        return  proyectoBE::where('escuelaId_Proyecto', $id)->get();
                    }   
                }
            }
            else{
            
                return proyectoBE::all();
            }  
        }  catch (\Exception $e) {
            return response()->json('Ocurrió un Error Inesperado', 200);  
        }
    }
    public function find_Titulo ($id,$titulo)
    {
        try {
            if($id !='all')
            {
                if(intval($id)!='')
                {
                    $strlen = strlen($id);
                    $id= intval($id);
                    if($strlen==strlen($id))
                    {
                        return  proyectoBE::where([
                            ['escuelaId_Proyecto', $id],
                            ['titulo_Proyecto', 'LIKE', '%'.$titulo.'%']
                        ])->get();
                    }   
                }
            }
            else{
            
                return  proyectoBE::where('titulo_Proyecto', 'LIKE', '%'.$titulo.'%')->get();
            }
        }  catch (\Exception $e) {
            return response()->json('Ocurrió un Error Inesperado', 200);  
        }
        
       
    }
}
