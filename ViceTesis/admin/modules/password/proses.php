<?php
session_start();

// Llamar el archivo de conexion a la base de datos
require_once "../../../config/database.php";

// función para comprobar el estado del usuario conectado
// si el usuario no está conectado, cambie a la página de inicio de sesión y envie mensaje en pantalla = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// Si esta conectado, entonces actualizo los datos
else {
    if (isset($_POST['save'])) {
        if (isset($_SESSION['user_id'])) {
            // Captura de datos del formulario
            $old_pass    = $_POST['old_pass'];
            $new_pass    = $_POST['new_pass'];
            $retype_pass = $_POST['retype_pass'];

            // descargar los datos de la sesión de usuario
            $user_id = $_SESSION['user_id'];

            // contraseñas de selección de la tabla de usuario se comprueban
            $sql = sqlsrv_query($mysqli, "SELECT clave_Usu FROM usuarioTesisBE WHERE id_UsuTesis=$user_id")
                                          or die('clave no encontrada : '.sqlsrv_errors($mysqli));
           $data  = sqlsrv_fetch_array($sql, SQLSRV_FETCH_ASSOC);

            // función para comprobar una contraseña antes de cambiar
            // Si la entrada no es la misma que la contraseña antigua en la base de datos de contraseñas, 
            // cambiar a cambiar la contraseña la página y mostrar un mensaje = 1
            if ($old_pass != $data['clave_Usu']){
                header("Location: ../../main.php?module=password&alert=1");
            }

            // Si la misma entrada antigua contraseña con la contraseña de la base de datos, ejecute el comando de nuevos controles
            else {

                // si la nueva introducción de la contraseña no es la misma que la entrada repetir la nueva contraseña,
                // cambiar a cambiar la contraseña la página y mostrar un mensaje = 2
                if ($new_pass != $retype_pass){
                        header("Location: ../../main.php?module=password&alert=2");
                }

               // ejecutar la actualización de la contraseña
                else {
                    // consultar comando para cambiar los datos en la tabla de usuario
                    $query = sqlsrv_query($mysqli, "UPDATE usuarioTesisBE SET clave_Usu = '$new_pass'
                                                                 WHERE id_UsuTesis = '$user_id'")
                                                    or die('Ada kesalahan pada query update password : '.sqlsrv_errors($mysqli));
                    // Ejecutar consulta
                    if ($query) {
                        // si tiene éxito mensaje indican exitosa actualización de datos
                        header("location: ../../main.php?module=password&alert=3");
                    }   
                }
            }
        }
    }   
}               
?>