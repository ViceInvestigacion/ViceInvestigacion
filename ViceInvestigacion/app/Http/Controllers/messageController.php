<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\messageBE;

class messageController extends helpers
{
    public function send_message(Request $request){
        try 
        {
            $message = helpers::toMessage($request);
            messageBE::create($message->toArray());
            return response()->json("Mensaje registrado Correctamente", 200);  
        } 
        catch (\Exception $e) {
        return response()->json("Ocurrio un error inesperado :  ", 200);  
        }
    }
}
