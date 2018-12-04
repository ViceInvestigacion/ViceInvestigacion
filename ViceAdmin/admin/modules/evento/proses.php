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
            //capturA ID del usuario que inserto los datos
            $user_id = $_SESSION['user_id'];
            // captura de datos desde un formulario 
            $nombre                 = $_POST['nombre'];
            $descripcion            = $_POST['descripcion'];
            $tipo                   = $_POST['selectTipo'];
            $duracion              = $_POST['duracion'];
            $fecha_Inicio           = $_POST['fecha_Inicio'];
            $fecha_Fin              = $_POST['fecha_Fin'];
            $horaInicio             = $_POST['horaInicio'];
            $horaFin                = $_POST['horaFin'];
            $cgsn                   = $_POST['cgsn'];
            $cgcn                   = $_POST['cgcn'];
            $cgan                   = $_POST['cgan'];

            $nama_file          = $_FILES['image']['name'];
            $ukuran_file        = $_FILES['image']['size'];
            $tipe_file          = $_FILES['image']['type'];
            $tmp_file           = $_FILES['image']['tmp_name'];
            
            // determinar la extensión permisible
            $allowed_extensions = array('jpg','jpeg','png');
            
            // Establecer una ruta de carpeta para almacenar la imagen
            $path               = "../../../images/evento/".$nama_file;
            
            // Comprobar la extensión
            $file               = explode(".", $nama_file);
            $extension          = array_pop($file);

            // Compruebe si el tipo de archivo que esté cargado de conformidad con las extensiones permitidas
            if(in_array($extension, $allowed_extensions)) {
                // Si el tipo de archivo que esté cargado de conformidad con las extensiones permitidas:
                if($ukuran_file <= 1000000) { // Comprueba si el tamaño del archivo subido menos igual a 1 MB
                    //Si el tamaño del archivo es menor o igual a 1 MB, hacer:
                    //El proceso de carga
                    if(move_uploaded_file($tmp_file, $path)) { // Compruebe si la imagen fue subida o no con éxito
                        // Si la imagen ha cargado correctamente, Marca:
                        // consultar comando para guardar los datos en la tabla is_portfolio

$query = sqlsrv_query($mysqli, "INSERT INTO 
    eventoBE(
            nombre_Evento, descripcion_Evento, tipo_Evento,duracion_Evento, fecInicio_Evento, fecFin_Evento, horaInicio_Evento,
            horaFin_Evento, cstGSnCertificado_Evento, cstGCnCertificado_Evento, cstFCnCertificado_Evento,
            imagen_Evento, usuReg_Evento)
    VALUES('$nombre','$descripcion','$tipo','$duracion','$fecha_Inicio','$fecha_Fin','$horaInicio',
            '$horaFin','$cgsn','$cgcn','$cgan','$nama_file','$user_id')"  )
                                              or die('Hubo un error en la consulta de inserción : '.sqlsrv_errors($mysqli));
                        // comprobar consulta
                        if ($query) {
                            // si tiene éxito mensaje indican exitosa almacén de datos
                            header("location: ../../main.php?module=evento&alert=1");
                        }   
                    } else {
                        // Si la imagen no se ha subido, mostrar un mensaje no se ha subido
                        header("location: ../../main.php?module=evento&alert=4");
                    }
                } else {
                    // Si el tamaño del archivo es de menos de 1 MB, mostrar un mensaje no se ha subido
                    header("location: ../../main.php?module=evento&alert=5");
                }
            } else {
                //Si el tipo de archivo subido no es JPG / JPEG / PNG, mostrar un mensaje no se ha subido
                header("location: ../../main.php?module=evento&alert=6");
            }  
        }   
    }
    
    ////////////////////////////////////////////////////////////////////////////////////////////////////

    
    ///////////////////////////////////////////////////////////////////////////////////////////////////

    elseif ($_GET['act']=='update') {
        if (isset($_POST['save'])) {
            if (isset($_POST['id_Evento'])) {
                // Captura de datos desde el formulario
                $id_Evento       = $_POST['id_Evento'];
            $nombre                 = $_POST['nombre'];
            $descripcion            = $_POST['descripcion'];
           $tipo                   = $_POST['selectTipo'];
            //$tipo='2';
            $duracion              = $_POST['duracion'];
            $fecha_Inicio           = $_POST['fecha_Inicio'];
            $fecha_Fin              = $_POST['fecha_Fin'];
            $horaInicio             = $_POST['horaInicio'];
            $horaFin                = $_POST['horaFin'];
            $cgsn                   = $_POST['cgsn'];
            $cgcn                   = $_POST['cgcn'];
            $cgan                   = $_POST['cgan'];
                
                $nama_file          = $_FILES['image']['name'];
                $ukuran_file        = $_FILES['image']['size'];
                $tipe_file          = $_FILES['image']['type'];
                $tmp_file           = $_FILES['image']['tmp_name'];
                // determinar la extensión permisible
                $allowed_extensions = array('jpg','jpeg','png');
                // Establecer una ruta de carpeta para almacenar evento
                $path               = "../../../images/evento/".$nama_file;
                // Comprobar la extensión
                $file               = explode(".", $nama_file);
                $extension          = array_pop($file);
                // si la imagen no se cambia
                if (empty($nama_file)) {
                    // consultar comando para cambiar los datos de la tabla eventoBE
                     $query = sqlsrv_query($mysqli, "UPDATE eventoBE SET 
                                                    nombre_Evento = '$nombre',
                                                    descripcion_Evento='$descripcion',
                                                    tipo_Evento='$tipo',
                                                    duracion_Evento='$duracion',
                                                    fecInicio_Evento=' $fecha_Inicio', 
                                                    fecFin_Evento=' $fecha_Fin ', 
                                                    horaInicio_Evento='$horaInicio',
                                                    horaFin_Evento='$horaFin',
                                                    cstGSnCertificado_Evento=' $cgsn',
                                                    cstGCnCertificado_Evento='$cgcn', 
                                                    cstFCnCertificado_Evento='$cgan'
                                                                      WHERE id_Evento = '$id_Evento'")
                                                    or die('Datos acttualizados correctamente : '.sqlsrv_errors($mysqli));
                    // ejecutar consulta
                    if ($query) {
                        // si tiene éxito mensaje indican exitosa actualización de datos
                        header("location: ../../main.php?module=evento&alert=2");
                    } 
                }
                // si la imagen se ha cambiado
                else {
                    //Compruebe si el tipo de archivo que esté cargado de conformidad con las extensiones permitidas
                    if(in_array($extension, $allowed_extensions)) {
                        // Si el tipo de archivo que esté cargado de conformidad con las extensiones permitidas, hacer:
                        if($ukuran_file <= 1000000) { // Comprueba si el tamaño del archivo subido menos igual a 1 MB
                            // Si el tamaño del archivo es menor o igual a 1 MB, hacer:
                            // El proceso de carga
                            if(move_uploaded_file($tmp_file, $path)) { // Compruebe si la imagen subida o no con éxito
                                // Si la imagen ha cargado correctamente, Marca:
                                // consultar comando para cambiar los datos sobre la tabla convocatoriaBE
                                $query = sqlsrv_query($mysqli, "UPDATE eventoBE SET nombre_Evento = '$nombre',
                                                    descripcion_Evento='$descripcion',
                                                    tipo_Evento='$tipo',
                                                    duracion_Evento='$duracion',
                                                    fecInicio_Evento='$fecha_Inicio', 
                                                    fecFin_Evento='$fecha_Fin', 
                                                    horaInicio_Evento='$horaInicio',
                                                    horaFin_Evento='$horaFin',
                                                    cstGSnCertificado_Evento='$cgsn',
                                                    cstGCnCertificado_Evento='$cgcn', 
                                                    cstFCnCertificado_Evento='$cgan',
                                                    imagen_Evento='$nama_file'
                                                                                  WHERE id_Evento = '$id_Evento'")
                                                                or die('se produjo un error en una consulta de actualización : '.sqlsrv_errors($mysqli));

                                // Ejecutar consulta
                                if ($query) {
                                    // si tiene éxito mensaje indican exitosa actualización de datos
                                    header("location: ../../main.php?module=evento&alert=2");
                                }
                            } else {
                                // Si la imagen no se ha subido, mostrar un mensaje no se ha subido
                                header("location: ../../main.php?module=evento&alert=4");
                            }
                        } else {
                            // Si el tamaño del archivo es de menos de 1 MB, mostrar un mensaje no se ha subido
                            header("location: ../../main.php?module=evento&alert=5");
                        }
                    } else {
                        //Si el tipo de archivo subido no es JPG / JPEG / PNG, mostrar un mensaje no se ha subido
                        header("location: ../../main.php?module=evento&alert=6");
                    } 
                }      
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id_Evento'])) {
            $id_Evento = $_GET['id_Evento'];

            // consultar comando para eliminar los datos de la tabla convocatoriaBE
             $query = sqlsrv_query($mysqli, "DELETE FROM eventoBE WHERE id_Evento='$id_Evento'")
                                            or die('Hubo un error en la consulta de eliminación : '.sqlsrv_errors($mysqli));

            // comprobar los resultados de la consulta
            if ($query) {
                // si tiene éxito mensaje se indican los datos de eliminación con éxito
                header("location: ../../main.php?module=evento&alert=3");
            }
        }
        else{
            // si no tiene éxito mensaje se indican los datos de eliminación no se realizo con éxito
            header("location: ../../main.php?module=evento&alert=9");
        }
    } 

        elseif ($_GET['act']=='deleteTipo') {
        if (isset($_GET['id_TipoEv'])) {
            $id_TipoEv = $_GET['id_TipoEv'];

            // consultar comando para eliminar los datos de la tabla convocatoriaBE
             $query = sqlsrv_query($mysqli, "DELETE FROM tipoEventoBE WHERE id_TipoEv='$id_TipoEv'")
                                            or die('Hubo un error en la consulta de eliminación : '.sqlsrv_errors($mysqli));

            // comprobar los resultados de la consulta
            if ($query) {
                // si tiene éxito mensaje se indican los datos de eliminación con éxito
                header("location: ../../main.php?module=evento&alert=12");
            }
        }
        else{
            // si no tiene éxito mensaje se indican los datos de eliminación no se realizo con éxito
            header("location: ../../main.php?module=evento&alert=13");
        }
    }


        if ($_GET['act']=='insertTipo') {
        if (isset($_POST['save'])) {
            //capturA ID del usuario que inserto los datos
            $user_id = $_SESSION['user_id'];
            // captura de datos desde un formulario 
            
            $descripcion            = $_POST['descripcion'];

                $query = sqlsrv_query($mysqli, "INSERT INTO 
                    tipoEventoBE(
            descripcion_TipoEv, usuReg_TipoEv)
    VALUES('$descripcion ','$user_id')"  )
                                              or die('Hubo un error en la consulta de inserción : '.sqlsrv_errors($mysqli));
                        // comprobar consulta
                        if ($query) {
                            // si tiene éxito mensaje indican exitosa almacén de datos
                            header("location: ../../main.php?module=evento&alert=10");
                        }   
                   
            } 
            else {
                        // Si no se pudo registrar
                        header("location: ../../main.php?module=evento&alert=11");
                    }
         
    }
/////
    if ($_GET['act']=='insertDet') {
        if (isset($_POST['save'])) {
            //capturA ID del usuario que inserto los datos
            $user_id = $_SESSION['user_id'];
            // captura de datos desde un formulario 
            
            $descripcion            = $_POST['descripcion'];
            $event                   = $_POST['selectEvento'];
            $ponent                   = $_POST['selectPon'];

                $query = sqlsrv_query($mysqli, "INSERT INTO 
                    eventoDetalleBE(
            descripcion_EventoDet,ponente_EventoDet,evento_EventoDet, usuReg_EventoDet)
    VALUES('$descripcion ','$ponent','$event','$user_id')"  )
                                              or die('Hubo un error en la consulta de inserción : '.sqlsrv_errors($mysqli));
                        // comprobar consulta
                        if ($query) {
                            // si tiene éxito mensaje indican exitosa almacén de datos
                            header("location: ../../main.php?module=evento&alert=14");
                        }   
                   
            } 
            else {
                        // Si no se pudo registrar
                        header("location: ../../main.php?module=evento&alert=11");
                    }
         
    }
///////////////
elseif ($_GET['act']=='deleteDet') {
        if (isset($_GET['id_EventoDet'])) {
            $id_EventoDet = $_GET['id_EventoDet'];

            // consultar comando para eliminar los datos de la tabla convocatoriaBE
             $query = sqlsrv_query($mysqli, "DELETE FROM eventoDetalleBE WHERE id_EventoDet='$id_EventoDet'")
                                            or die('Hubo un error en la consulta de eliminación : '.sqlsrv_errors($mysqli));

            // comprobar los resultados de la consulta
            if ($query) {
                // si tiene éxito mensaje se indican los datos de eliminación con éxito
                header("location: ../../main.php?module=evento&alert=12");
            }
        }
        else{
            // si no tiene éxito mensaje se indican los datos de eliminación no se realizo con éxito
            header("location: ../../main.php?module=evento&alert=13");
        }
    }
////////////////
    elseif ($_GET['act']=='updateDet') {
        if (isset($_POST['save'])) {
            if (isset($_POST['id_EventoDet'])) {
                // Captura de datos desde el formulario
            $id_EventoDet            = $_POST['id_EventoDet'];
            $descripcion             = $_POST['descripcion'];
            $ponente                 = $_POST['selectPon'];
            $evento                  = $_POST['selectEvento'];
            //$tipo='2';

                    // consultar comando para cambiar los datos de la tabla eventoBE
                     $query = sqlsrv_query($mysqli, "UPDATE eventoDetalleBE SET 
                                                
                                                    descripcion_EventoDet='$descripcion',
                                                    ponente_EventoDet='$ponente',
                                                    evento_EventoDet='$evento'
                                                    
                                                                      WHERE id_EventoDet = '$id_EventoDet'")
                                                    or die('Datos acttualizados correctamente : '.sqlsrv_errors($mysqli));
                    // ejecutar consulta
                    if ($query) {
                        // si tiene éxito mensaje indican exitosa actualización de datos
                        header("location: ../../main.php?module=evento&alert=2");
                    } 
                    else
                    {
                        header("location: ../../main.php?module=evento&alert=11");
                    }
     
            }
        }
    }

//////////////////
if ($_GET['act']=='insertPon') {
        if (isset($_POST['save'])) {
            //capturA ID del usuario que inserto los datos
            $user_id = $_SESSION['user_id'];
            // captura de datos desde un formulario 
            
            $nombre                 = $_POST['nombre'];
            $apellido               = $_POST['apellido'];
            $doc                    = $_POST['dni'];
            $esp                    = $_POST['selectEsp'];
            $uni                    = $_POST['selectUni'];
            $fechNac                = $_POST['fech_nac'];
            $correo                 = $_POST['correo'];
            $telefono               = $_POST['telefono'];

                $query = sqlsrv_query($mysqli, "INSERT INTO 
                    ponenteBE(
            nombres_Ponente,apellidos_Ponente,dni_Ponente,especialidad_Ponente,univProc_Ponente,fecNac_Ponente,correo_Ponente,telefono_Ponente, usuReg_Ponente)
    VALUES('$nombre','$apellido','$doc','$esp','$uni','$fechNac','$correo','$telefono','$user_id')"  )
                                              or die('Hubo un error en la consulta de inserción : '.sqlsrv_errors($mysqli));
                        // comprobar consulta
                        if ($query) {
                            // si tiene éxito mensaje indican exitosa almacén de datos
                            header("location: ../../main.php?module=evento&alert=1");
                        }   
                   
            } 
            else {
                        // Si no se pudo registrar
                        header("location: ../../main.php?module=evento&alert=11");
                    }
         
    }

}       
?>