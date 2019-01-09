<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\suscriptorBE;

class suscriptorController extends helpers
{
    public function insert(Request $request)
    {
        try {
          $suscriptor   = helpers::toSuscriptor($request);
          $flag=0;
          $suscriptores = suscriptorBE::where('correo_Susc',$suscriptor->correo_Susc)->first();
          if(empty($suscriptores))
          {
            suscriptorBE::create($suscriptor->toArray());
            return response()->json("OK",201);    
          }  
          else{
            if($suscriptores->estado_Susc=='y')
            {
              $suscriptores->estado_Susc ='n';
              $suscriptores->save();
              return response()->json("OK",201);   
            }
            else{
              return response()->json("ya se encuentra suscrito",201);
            }
          }
        }  catch (\Exception $e) {
            return response()->json( $e, 200);  
        }
    }

    public function update(Request $request)
    {
      try {
        $request= json_decode($request->getContent(), true);
        $suscriptor   = suscriptorBE::where('correo_Susc',$request[0]['correo_Susc'])->first();
        if(!empty($suscriptor))
        {
          $suscriptor->estado_Susc = 0;
          $suscriptor->save();
          return response()->json( 'desuscripcion correcta', 200);  
        }
        else{
          return response()->json( 'Correo no se encuentra registrado', 200);  
        }
      }  catch (\Exception $e) {
        return response()->json('Ocurrió un Error Inesperado', 200);  
      }
     
    }
}
