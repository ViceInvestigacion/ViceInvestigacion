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
            $descripcion              = $_POST['descripcion'];
            $fecha             = $_POST['fecha'];

            $nama_file          = $_FILES['image']['name'];
            $ukuran_file        = $_FILES['image']['size'];
            $tipe_file          = $_FILES['image']['type'];
            $tmp_file           = $_FILES['image']['tmp_name'];
            
            // determinar la extensión permisible
            $allowed_extensions = array('jpg','jpeg','png');
            
            // Establecer una ruta de carpeta para almacenar la imagen
            $path               = "../../../images/convocatoria/".$nama_file;
            
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

                         $query = sqlsrv_query($mysqli, "INSERT INTO convocatoriaBE(descripcion_Conv,imagen_Conv,fecha_Conv,estado_Conv,usuReg_Conv)
                            VALUES('$descripcion','$nama_file','$fecha','1','$user_id')")
                                              or die('Hubo un error en la consulta de inserción : '.sqlsrv_errors($mysqli));
                        // comprobar consulta
                        if ($query) {
                            // si tiene éxito mensaje indican exitosa almacén de datos
                            header("location: ../../main.php?module=convocatoria&alert=1");
                        }   
                    } else {
                        // Si la imagen no se ha subido, mostrar un mensaje no se ha subido
                        header("location: ../../main.php?module=convocatoria&alert=4");
                    }
                } else {
                    // Si el tamaño del archivo es de menos de 1 MB, mostrar un mensaje no se ha subido
                    header("location: ../../main.php?module=convocatoria&alert=5");
                }
            } else {
                //Si el tipo de archivo subido no es JPG / JPEG / PNG, mostrar un mensaje no se ha subido
                header("location: ../../main.php?module=convocatoria&alert=6");
            }  
        }   
    }
    
    ////////////////////////////////////////////////////////////////////////////////////////////////////

    elseif ($_GET['act']=='insertResultado') {
        if (isset($_POST['save'])) {
            //capturA ID del usuario que inserto los datos
            $user_id = $_SESSION['user_id'];
            // captura de datos desde un formulario 
            $descripcion              = $_POST['descripcion'];
            $a              =$_POST['convoca2'];

            $nama_file          = $_FILES['doc']['name'];
            $ukuran_file        = $_FILES['doc']['size'];
            $tipe_file          = $_FILES['doc']['type'];
            $tmp_file           = $_FILES['doc']['tmp_name']; 
            // determinar la extensión permisible
            $allowed_extensions = array('pdf','doc','docx','xls','xlxs');
            
            // Establecer una ruta de carpeta para almacenar la imagen
            $path               = "../../../files/convocatoriaResultados/".$nama_file;
            // Comprobar la extensión
            $file               = explode(".", $nama_file);
            $extension          = array_pop($file);
            // Compruebe si el tipo de archivo que esté cargado de conformidad con las extensiones permitidas
            if(in_array($extension, $allowed_extensions)) {
                // Si el tipo de archivo que esté cargado de conformidad con las extensiones permitidas:
                if($ukuran_file <= 6000000) { // Comprueba si el tamaño del archivo subido menos igual a 6 MB
                    //Si el tamaño del archivo es menor o igual a 25 MB, hacer:
                    //El proceso de carga
                    if(move_uploaded_file($tmp_file, $path)) { // Compruebe si la imagen fue subida o no con éxito
                        // Si la imagen ha cargado correctamente, Marca:
                        // consultar comando para guardar los datos en la tabla is_portfolio
                         $query = sqlsrv_query($mysqli, "INSERT INTO resultadoBE(
        descripcion_Resultado,archivo_Resultado,concurso_Resultado,estado_Resultado,usuReg_Resultado)
VALUES('$descripcion','$nama_file','$a','1','$user_id')")
                                              or die('Hubo un error en la consulta de inserción : '.sqlsrv_errors($mysqli));
                        // comprobar consulta
                        if ($query) {
                            // si tiene éxito mensaje indican exitosa almacén de datos
                            header("location: ../../main.php?module=convocatoria&alert=1");
                        }   
                    } else {
                        // Si la imagen no se ha subido, mostrar un mensaje no se ha subido
                        header("location: ../../main.php?module=convocatoria&alert=4");
                    }
                } else {
                    // Si el tamaño del archivo es de menos de 6 MB, mostrar un mensaje no se ha subido
                    header("location: ../../main.php?module=convocatoria&alert=8");
                }
            } else {
                //Si el tipo de archivo subido no es *.pdf/*.doc/*.docx/*.xls/*.xlxs., mostrar un mensaje no se ha subido
                header("location: ../../main.php?module=convocatoria&alert=7");
            }  
        }   
    }


    ///////////////////////////////////////////////////////////////////////////////////////////////////

    elseif ($_GET['act']=='update') {
        if (isset($_POST['save'])) {
            if (isset($_POST['id_Conv'])) {
                // Captura de datos desde el formulario
                $id_Conv       = $_POST['id_Conv'];
                $descripcion_Conv   = $_POST['descripcion'];
                $fecha_Conv         = $_POST['fecha'];
                
                $nama_file          = $_FILES['image']['name'];
                $ukuran_file        = $_FILES['image']['size'];
                $tipe_file          = $_FILES['image']['type'];
                $tmp_file           = $_FILES['image']['tmp_name'];
                
                // determinar la extensión permisible
                $allowed_extensions = array('jpg','jpeg','png');
                
                // Establecer una ruta de carpeta para almacenar convcatoria
                $path               = "../../../images/convocatoria/".$nama_file;
                
                // Comprobar la extensión
                $file               = explode(".", $nama_file);
                $extension          = array_pop($file);

                // si la imagen no se cambia
                if (empty($nama_file)) {
                    // consultar comando para cambiar los datos de la tabla convocatoriaBE
                     $query = sqlsrv_query($mysqli, "UPDATE convocatoriaBE SET descripcion_Conv = '$descripcion_Conv',fecha_Conv='$fecha_Conv'
                                                                      WHERE id_Conv = '$id_Conv'")
                                                    or die('Datos acttualizados correctamente : '.sqlsrv_errors($mysqli));

                    // ejecutar consulta
                    if ($query) {
                        // si tiene éxito mensaje indican exitosa actualización de datos
                        header("location: ../../main.php?module=convocatoria&alert=2");
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
                                $query = sqlsrv_query($mysqli, "UPDATE convocatoriaBE SET descripcion_Conv        = '$descripcion_Conv',
                                                                                     fecha_Conv        = '$fecha_Conv',
                                                                                        imagen_Conv        = '$nama_file'
                                                                                  WHERE id_Conv = '$id_Conv'")
                                                                or die('se produjo un error en una consulta de actualización : '.sqlsrv_errors($mysqli));

                                // Ejecutar consulta
                                if ($query) {
                                    // si tiene éxito mensaje indican exitosa actualización de datos
                                    header("location: ../../main.php?module=convocatoria&alert=2");
                                }
                            } else {
                                // Si la imagen no se ha subido, mostrar un mensaje no se ha subido
                                header("location: ../../main.php?module=convocatoria&alert=4");
                            }
                        } else {
                            // Si el tamaño del archivo es de menos de 1 MB, mostrar un mensaje no se ha subido
                            header("location: ../../main.php?module=convocatoria&alert=5");
                        }
                    } else {
                        //Si el tipo de archivo subido no es JPG / JPEG / PNG, mostrar un mensaje no se ha subido
                        header("location: ../../main.php?module=convocatoria&alert=6");
                    } 
                }      
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id_Conv'])) {
            $id_Conv = $_GET['id_Conv'];

            // consultar comando para eliminar los datos de la tabla convocatoriaBE
             $query = sqlsrv_query($mysqli, "DELETE FROM convocatoriaBE WHERE id_Conv='$id_Conv'")
                                            or die('Hubo un error en la consulta de eliminación : '.sqlsrv_errors($mysqli));

            // comprobar los resultados de la consulta
            if ($query) {
                // si tiene éxito mensaje se indican los datos de eliminación con éxito
                header("location: ../../main.php?module=convocatoria&alert=3");
            }
        }
    } 
elseif ($_GET['act']=='deleteResult') {
        if (isset($_GET['id_Conv'])) {
            $id_Conv = $_GET['id_Conv'];

            // consultar comando para eliminar los datos de la tabla convocatoriaBE
             $query = sqlsrv_query($mysqli, "DELETE FROM resultadoBE WHERE concurso_Resultado='$id_Conv'")
                                            or die('Hubo un error en la consulta de eliminación : '.sqlsrv_errors($mysqli));

            // comprobar los resultados de la consulta
            if ($query) {
                // si tiene éxito mensaje se indican los datos de eliminación con éxito
                header("location: ../../main.php?module=convocatoria&alert=3");
            }
        }
    } 




}       
?>