<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\suscriptorBE;

class suscriptorController extends Controller
{
    public function insert(Request $request)
    {
        $flag=0;
        $suscriptores = suscriptorBE::all();
        foreach ($suscriptores as $susc) {
          if($request->correo_Susc==$susc->correo_Susc)
          {
            $flag=1;
          }  
        }
        if($flag==0)
        {
          suscriptorBE::create($request->all());
        }
        return response()->json("OK",201);
    }

    public function update(Request $request,$id)
    {
        $suscriptor = suscriptorBE::findOrFail($id);
        $suscriptor->update($request->all());
        return response()->json($suscriptor, 200);
    }

    public function delete(Request $request,$id)
    {
        $suscriptor = suscriptorBE::findOrFail($id);
        $suscriptor->delete();
    }
}
