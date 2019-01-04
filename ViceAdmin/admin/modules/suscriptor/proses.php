<?php
session_start();

// Llamar el archivo de conexion a la base de datos
require_once "../../../config/database.php";
// función para comprobar el estado del usuario conectado
// si el usuario no está conectado, cambie a la página de inicio de sesión y envie mensaje en pantalla = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    
}
// si el usuario ya ha iniciado sesión, a continuación, ejecutar el comando para actualizar y borrar
else {
    if ($_GET['act']=='update_estado') {
        if (isset($_GET['id'])) {
            // captura de datos desde el formulario
            $id_Susc = $_GET['id'];
            $estado     = "y";
            // Consulta a la tabla suscriptorBE
            $query = sqlsrv_query($mysqli, "UPDATE suscriptorBE SET estado_Susc     = '$estado'
                            WHERE id_Susc = '$id_Susc'")
                         or die('Se produjo un error en las actualizaciones de estado de consulta : '.sqlsrv_errors($mysqli));
            
            // Ejecutar consulta
            if ($query) {
                //Si se actualizo los datos correctamente
                header("location: ../../main.php?module=form_suscriptor&form=detail&id=$id_Susc");
            }       
        }
    }
       
}       
?>