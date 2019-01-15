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
            $vision                   = $_POST['vision'];
            $mision                   = $_POST['mision'];
            $directorio              = $_POST['directorio'];
            $fecha                    = $_POST['fecha'];

            $nama_file          = $_FILES['image']['name'];
            $nama_file1          = $_FILES['image1']['name'];
            $nama_file2          = $_FILES['image2']['name'];
            $nama_file3          = $_FILES['image3']['name'];

            $ukuran_file        = $_FILES['image']['size'];
            $ukuran_file1        = $_FILES['image1']['size'];
            $ukuran_file2        = $_FILES['image2']['size'];
            $ukuran_file3        = $_FILES['image3']['size'];

            $tipe_file          = $_FILES['image']['type'];
            $tipe_file1          = $_FILES['image1']['type'];
            $tipe_file2          = $_FILES['image2']['type'];
            $tipe_file3          = $_FILES['image3']['type'];

            $tmp_file           = $_FILES['image']['tmp_name'];
            $tmp_file1           = $_FILES['image1']['tmp_name'];
            $tmp_file2           = $_FILES['image2']['tmp_name'];
            $tmp_file3           = $_FILES['image3']['tmp_name'];
            
            // determinar la extensión permisible
            $allowed_extensions = array('jpg','jpeg','png');
            $allowed_extensions1 = array('jpg','jpeg','png');
            $allowed_extensions2 = array('jpg','jpeg','png');
            $allowed_extensions3 = array('jpg','jpeg','png');
            
            // Establecer una ruta de carpeta para almacenar la imagen
            $path               = "../../../images/about/".$nama_file;
            $path1              = "../../../images/about/portada/".$nama_file1;
            $path2               = "../../../images/about/portada/".$nama_file2;
            $path3              = "../../../images/about/portada/".$nama_file3;

            // Comprobar la extensión
            $file               = explode(".", $nama_file);
            $file1               = explode(".", $nama_file1);
            $file2               = explode(".", $nama_file2);
            $file3               = explode(".", $nama_file3);

            $extension          = array_pop($file);
            $extension1          = array_pop($file1);
            $extension2          = array_pop($file2);
            $extension3          = array_pop($file3);

            // Compruebe si el tipo de archivo que esté cargado de conformidad con las extensiones permitidas
            if(in_array($extension, $allowed_extensions )||in_array($extension1, $allowed_extensions1 )||in_array($extension2, $allowed_extensions2 )||in_array($extension3, $allowed_extensions3 )) {
                // Si el tipo de archivo que esté cargado de conformidad con las extensiones permitidas:
                if($ukuran_file <= 8000000||$ukuran_file1 <= 6000000||$ukuran_file2 <= 6000000||$ukuran_file3 <= 6000000) { // Comprueba si el tamaño del archivo subido menos igual a 1 MB
                    //Si el tamaño del archivo es menor o igual a 1 MB, hacer:
                    //El proceso de carga
                    if(move_uploaded_file($tmp_file, $path)) { // Compruebe si la imagen fue subida o no con éxito
                        // Si la imagen ha cargado correctamente, Marca:
                        // consultar comando para guardar los datos en la tabla nosotrosBE
                        move_uploaded_file($tmp_file1, $path1);
                        move_uploaded_file($tmp_file2, $path2);
                        move_uploaded_file($tmp_file3, $path3);
                                                $query = sqlsrv_query($mysqli, "INSERT INTO 
                                                    nosotrosBE(
                                                    descripcion_Nos,
                                                    vision_Nos,
                                                    mision_Nos,
                                                    organigrama_Nos,
                                                    directorio_Nos,
                                                    estado_Nos,
                                                    portada_Unos,
                                                    portada_Dnos,
                                                    portada_Tnos,
                                                    usuMod_Nos,
                                                    fecMod_Nos)
                                                                VALUES(
                                                    '$descripcion',
                                                    '$vision',
                                                    '$mision',
                                                    '$nama_file',
                                                    '$directorio',
                                                    '1',
                                                    '$nama_file1',
                                                    '$nama_file2',
                                                    '$nama_file3',
                                                    '$user_id',
                                                    '$fecha')")
                                              or die('Hubo un error en la consulta de inserción : '.sqlsrv_errors($mysqli));
                                                // comprobar consulta
                                                if ($query) {
                                                    // si tiene éxito mensaje indican exitosa almacén de datos
                                                    header("location: ../../main.php?module=about&alert=1");
                                                            }   
                    } 
                    else {
                        // Si la imagen no se ha subido, mostrar un mensaje no se ha subido
                        header("location: ../../main.php?module=about&alert=4");
                    }
                } else {
                    // Si el tamaño del archivo es de menos de 1 MB, mostrar un mensaje no se ha subido
                    header("location: ../../main.php?module=about&alert=5");
                }
            } else {
                //Si el tipo de archivo subido no es JPG / JPEG / PNG, mostrar un mensaje no se ha subido
                header("location: ../../main.php?module=about&alert=6");
            }  
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['save'])) {
            if (isset($_POST['id_Nos'])) {
                // Captura de datos desde el formulario
                $id       = $_POST['id_Nos'];
                $descripcion            = $_POST['descripcion'];
                $vision                   = $_POST['vision'];
                $mision                  = $_POST['mision'];
                $directorio              = $_POST['directorio'];
                $fecha                    = $_POST['fecha'];
                
                
            $nama_file          = $_FILES['image']['name'];
            $nama_file1          = $_FILES['image1']['name'];
            $nama_file2          = $_FILES['image2']['name'];
            $nama_file3          = $_FILES['image3']['name'];

            $ukuran_file        = $_FILES['image']['size'];
            $ukuran_file1        = $_FILES['image1']['size'];
            $ukuran_file2        = $_FILES['image2']['size'];
            $ukuran_file3        = $_FILES['image3']['size'];

            $tipe_file          = $_FILES['image']['type'];
            $tipe_file1          = $_FILES['image1']['type'];
            $tipe_file2          = $_FILES['image2']['type'];
            $tipe_file3          = $_FILES['image3']['type'];

            $tmp_file           = $_FILES['image']['tmp_name'];
            $tmp_file1           = $_FILES['image1']['tmp_name'];
            $tmp_file2           = $_FILES['image2']['tmp_name'];
            $tmp_file3           = $_FILES['image3']['tmp_name'];
            
            // determinar la extensión permisible
            $allowed_extensions = array('jpg','jpeg','png');
            $allowed_extensions1 = array('jpg','jpeg','png');
            $allowed_extensions2 = array('jpg','jpeg','png');
            $allowed_extensions3 = array('jpg','jpeg','png');
            
            // Establecer una ruta de carpeta para almacenar la imagen
            $path               = "../../../images/about/".$nama_file;
            $path1              = "../../../images/about/portada/".$nama_file1;
            $path2               = "../../../images/about/portada/".$nama_file2;
            $path3              = "../../../images/about/portada/".$nama_file3;

            // Comprobar la extensión
            $file               = explode(".", $nama_file);
            $file1               = explode(".", $nama_file1);
            $file2               = explode(".", $nama_file2);
            $file3               = explode(".", $nama_file3);

            $extension          = array_pop($file);
            $extension1          = array_pop($file1);
            $extension2          = array_pop($file2);
            $extension3          = array_pop($file3);

                // si la imagen no se cambia
                if (empty($nama_file)||empty($nama_file1)||empty($nama_file2)||empty($nama_file3)) {
                    // consultar comando para cambiar los datos de la tabla nosotrosBE
                     $query = sqlsrv_query($mysqli, "UPDATE nosotrosBE SET 
                        descripcion_Nos = '$descripcion ',
                        vision_Nos = '$vision',
                        mision_Nos = '$mision',
                        directorio_Nos = '$directorio',
                        fecMod_Nos='$fecha',
                        estado_Nos='1'

                        WHERE id_Nos = '$id'")
                                                    or die('Datos acttualizados correctamente : '.sqlsrv_errors($mysqli));

                    // ejecutar consulta
                    if ($query) {
                        // si tiene éxito mensaje indican exitosa actualización de datos
                        header("location: ../../main.php?module=about&alert=2");
                    } 
                }
                // si la imagen se ha cambiado
                else {
                    //Compruebe si el tipo de archivo que esté cargado de conformidad con las extensiones permitidas
                    if(in_array($extension, $allowed_extensions )||in_array($extension1, $allowed_extensions1 )||in_array($extension2, $allowed_extensions2 )||in_array($extension3, $allowed_extensions3 )) {
                        // Si el tipo de archivo que esté cargado de conformidad con las extensiones permitidas, hacer:
                        if($ukuran_file <= 8000000||$ukuran_file1 <= 6000000||$ukuran_file2 <= 6000000||$ukuran_file3 <= 6000000) { // Comprueba si el tamaño del archivo subido menos igual a 1 MB
                            // Si el tamaño del archivo es menor o igual a 1 MB, hacer:
                            // El proceso de carga
                            if(move_uploaded_file($tmp_file, $path)) { // Compruebe si la imagen subida o no con éxito
                                // Si la imagen ha cargado correctamente, Marca:
                                // consultar comando para cambiar los datos sobre la tabla convocatoriaBE
                                move_uploaded_file($tmp_file1, $path1);
                                move_uploaded_file($tmp_file2, $path2);
                                move_uploaded_file($tmp_file3, $path3);
                                $query = sqlsrv_query($mysqli, "UPDATE nosotrosBE SET 
                                    descripcion_Nos = '$descripcion',
                                    vision_Nos = '$vision',
                                    mision_Nos = '$mision',
                                    directorio_Nos = '$directorio',
                                    fecMod_Nos='$fecha',
                                    organigrama_Nos       = '$nama_file',
                                    estado_Nos='1',
                                    portada_Unos='$nama_file1',
                                    portada_Dnos='$nama_file2',
                                    portada_Tnos='$nama_file3'
                                             WHERE id_Nos = '$id'")
                                                                or die('se produjo un error en una consulta de actualización : '.sqlsrv_errors($mysqli));

                                // Ejecutar consulta
                                if ($query) {
                                    // si tiene éxito mensaje indican exitosa actualización de datos
                                    header("location: ../../main.php?module=about&alert=2");
                                }
                            } else {
                                // Si la imagen no se ha subido, mostrar un mensaje no se ha subido
                                header("location: ../../main.php?module=about&alert=4");
                            }
                        } else {
                            // Si el tamaño del archivo es de menos de 1 MB, mostrar un mensaje no se ha subido
                            header("location: ../../main.php?module=about&alert=5");
                        }
                    } else {
                        //Si el tipo de archivo subido no es JPG / JPEG / PNG, mostrar un mensaje no se ha subido
                        header("location: ../../main.php?module=about&alert=6");
                    } 
                }      
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id_Nos'])) {
            $id = $_GET['id_Nos'];

            // consultar comando para eliminar los datos de la tabla nosotrosBE
             $query = sqlsrv_query($mysqli, "DELETE FROM nosotrosBE WHERE id_Nos='$id'")
                                            or die('Hubo un error en la consulta de eliminación : '.sqlsrv_errors($mysqli));

            // comprobar los resultados de la consulta
            if ($query) {
                // si tiene éxito mensaje se indican los datos de eliminación con éxito
                header("location: ../../main.php?module=about&alert=3");
            }
        }
    }       
}       
?>