<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\proyectoBE;
use App\fondoGobBE;
use DB;

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
    public function estadistica() //FOCAM o FEDU 
    {
        try {
            $resultado;
            $finan = fondoGobBE::all();
            $query='';
            foreach ($finan as $f ) {
                $query = $query. 'SUM(CASE WHEN ISNULL(id_fondoGob,0)= ' . $f->id_fondoGob . ' THEN 1 ELSE 0 END) AS '. $f->descripcion_fondoGob .',';
            }
            $query = rtrim($query,',');

            $resultado = proyectoBE::join('fondoGProyBE', 'fondoGProyBE.idProy', '=', 'proyectoBE.id_Proyecto')
        ->join('fondoGobBE', 'fondoGobBE.id_fondoGob', '=', 'fondoGProyBE.idFondo')
        ->join('escuelaBE','proyectoBE.escuelaId_Proyecto','=','escuelaBE.id_Escuela')
        ->join('facultadBE','facultadBE.id_Facu','=','escuelaBE.facultadId_Escuela')
        ->select(
            'nombre_Facu',
            DB::raw($query)
        )
        ->groupBy('nombre_Facu')
        ->where([
            ['estado_Proyecto',2]
        ])
        ->get(); 

        return response()->json($resultado, 200);  
        }  catch (\Exception $e) {
            return response()->json('Ocurrió un Error Inesperado', 200);  
        }
       
    }
}
