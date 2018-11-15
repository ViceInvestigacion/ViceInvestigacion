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
       
    }
    public function find_Titulo ($id,$title)
    {
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
                        ['titulo_Proyecto', 'LIKE', '%'.$title.'%']
                    ])->get();
                }   
            }
        }
        else{
           
            return  proyectoBE::where('titulo_Proyecto', 'LIKE', '%'.$title.'%')->get();
        }
       
    }
}
