<?php
// Variables de conexion a la base de datos
	$serverName = "localhost";
	$connectionInfo = array("Database"=>"DB_VicerrectoradoInv", "UID"=>"sa", "PWD"=>"1234", "CharacterSet"=>"UTF-8");
	$mysqli = sqlsrv_connect($serverName, $connectionInfo);

?>