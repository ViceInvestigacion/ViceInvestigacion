<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\suscriptorBE;
//include("conexion_sis.php");

class suscriptorController extends Controller
{
    public function insert($data)
    {

    	$suscriptor = new suscriptorBE();
    	$suscriptor = json_decode($data);
    	$nombres= $suscriptor->toArray();
      
       /*query
         $insertar = "INSERT INTO  usuarios(usuario, password, email)VALUES('$usuario', '$pass', '$email')";
	    $ejecutar = sqlsrv_query($con, $insertar);
       query*/ 
    }



}
