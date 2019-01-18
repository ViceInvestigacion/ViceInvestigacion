<?php
session_start();

// Llamar el archivo de conexion a la base de datos
require_once "../../../config/database.php";

// función para comprobar el estado del usuario conectado
// si el usuario no está conectado, cambie a la página de inicio de sesión y envie mensaje en pantalla = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
//  el usuario ya ha iniciado sesión, a continuación, ejecutar el comando para insertar, actualizar y borrar
else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['save'])) {
            //captuamos el id usuario activo
             $user_id = $_SESSION['user_id'];
            // captura de datos desde un formulario 
            $title              = $_POST['title'];
            $fecha            = $_POST['fecha'];
            
          
                        $query = sqlsrv_query($mysqli, "INSERT INTO tesisBE(titulo_Tesis,fecha_Tesis,usuRegTesis)
                                                        VALUES('$title','$fecha',$user_id)")
                                                        or die('Hubo un error en la consulta de inserción : '.sqlsrv_errors($mysqli));
                    if ($query) {
                                    header("location: ../../main.php?module=tesis&alert=1");              
                                } 
                    else{
                         header("location: ../../main.php?module=tesis&alert=6");
                    }

                    
            } 
        }  

        ///////////////////////////////////////////////////////////////////////////////////////////////////
    elseif ($_GET['act']=='update') {
        if (isset($_POST['save'])) {
            if (isset($_POST['tesis_id'])) {
                //capturas id
                $id       = $_POST['tesis_id'];
                // Captura de datos desde el formulario
            $titulo         = $_POST['title'];
            $fecha            = $_POST['fecha'];
            //$tipo='2';

                    // consultar comando para cambiar los datos de la tabla eventoBE
                     $query = sqlsrv_query($mysqli, "UPDATE tesisBE SET 
                                                
                                                   titulo_Tesis='$titulo',
                                                   fecha_Tesis='$fecha'
                                                    
                                                                      WHERE id_Tesis = '$id'")
                                                    or die('Datos acttualizados correctamente : '.sqlsrv_errors($mysqli));
                    // ejecutar consulta
                    if ($query) {
                        // si tiene éxito mensaje indican exitosa actualización de datos
                        header("location: ../../main.php?module=tesis&alert=2");
                    } 
                    else
                    {
                        header("location: ../../main.php?module=tesis&alert=4");
                    }
     
            }
        }
    } 

        ///////////////////////////////////////////////////////////////////////////////////////////////////
        elseif ($_GET['act']=='delete') {
        if (isset($_GET['id_Tesis'])) {
            $id = $_GET['id_Tesis'];

            // consultar comando para eliminar los datos de la tabla convocatoriaBE
             $query = sqlsrv_query($mysqli, "DELETE FROM tesisBE WHERE id_Tesis='$id'")
                                            or die('Hubo un error en la consulta de eliminación : '.sqlsrv_errors($mysqli));

            // comprobar los resultados de la consulta
            if ($query) {
                // si tiene éxito mensaje se indican los datos de eliminación con éxito
                header("location: ../../main.php?module=tesis&alert=3");

            }
        }
        else{
            // si no tiene éxito mensaje se indican los datos de eliminación no se realizo con éxito
            header("location: ../../main.php?module=tesis&alert=5");
        }
    }


    
     
}       
?>