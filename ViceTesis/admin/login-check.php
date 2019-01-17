<?php
/* Agrega conexion a la base de datos*/
require_once "../config/database.php";

// datos enviados desde el formulario de inicio de sesion
$username = trim($_POST['username']);
$password = trim($_POST['password']);

// asegúrese de que el nombre de usuario y la contraseña es en forma de letras o números.
if (!ctype_alnum($username) OR !ctype_alnum($password)) {
	header("Location: index.php?alert=1");
}
else {
	// comprobación de los datos
	//Se comprueba los datos
	$query = sqlsrv_query($mysqli, 
		"SELECT * FROM usuarioTesisBE WHERE nombre_Usu='$username' AND clave_Usu='$password'", array(), array( "Scrollable" => 'static' ))or die ('Usuario no encontrado: '.sqlsrv_errors($mysqli));

	$rows=sqlsrv_num_rows($query);

	// Si los datos estan correctos, entonces inicio sesion
	if ($rows > 0) {
		$data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);

		session_start();
		$_SESSION['user_id']  = $data['id_UsuTesis'];
		$_SESSION['username'] = $data['nombre_Usu'];
		$_SESSION['password'] = $data['clave_Usu'];
		$_SESSION['escuela'] = $data['idEscuela'];
		
		// Redirecciona a la pagina principal
		header("Location: main.php?module=home");
	}

	// Sino existen los datos entonces envio de nuevo al login mostrando un error alert=1
	else {
		header("Location: hola.php?alert=1");
	}
}
?>