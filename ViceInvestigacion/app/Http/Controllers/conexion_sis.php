<?php
	$serverName = "localhost";
	$connectionInfo = array("Database"=>"DB_VicerrectoradoInv", "UID"=>"sa", "PWD"=>"123", "CharacterSet"=>"UTF-8");
	$con = sqlsrv_connect($serverName, $connectionInfo);
?>