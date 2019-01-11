<?php
	$serverName = "localhost";
	$connectionInfo = array("Database"=>"DB_VicerrectoradoInv", "UID"=>"sa", "PWD"=>"1234", "CharacterSet"=>"UTF-8");
	$con = sqlsrv_connect($serverName, $connectionInfo);

	if($con){
		echo "conexión exitosa";
	}else{
		echo "fallo en la conexión";
	}

?>