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
            $volumen             = $_POST['volumen'];
            $numero                  = $_POST['numero'];
            $anio                   = $_POST['anio'];
            $tipo                  = $_POST['selectTipo'];

            $nama_file          = $_FILES['image']['name'];
            $ukuran_file        = $_FILES['image']['size'];
            $tipe_file          = $_FILES['image']['type'];
            $tmp_file           = $_FILES['image']['tmp_name'];
            
            // determinar la extensión permisible
            $allowed_extensions = array('jpg','jpeg','png');
            
            // Establecer una ruta de carpeta para almacenar la imagen
            $path               = "../../../images/revista/".$nama_file;
            
            // Comprobar la extensión
            $file               = explode(".", $nama_file);
            $extension          = array_pop($file);

            // Compruebe si el tipo de archivo que esté cargado de conformidad con las extensiones permitidas
            if(in_array($extension, $allowed_extensions)) {
                // Si el tipo de archivo que esté cargado de conformidad con las extensiones permitidas:
                if($ukuran_file <= 6000000) { // Comprueba si el tamaño del archivo subido menos igual a 1 MB
                    //Si el tamaño del archivo es menor o igual a 1 MB, hacer:
                    //El proceso de carga
                    if(move_uploaded_file($tmp_file, $path)) { // Compruebe si la imagen fue subida o no con éxito
                        // Si la imagen ha cargado correctamente, Marca:
                        // consultar comando para guardar los datos en la tabla is_portfolio
            $query = sqlsrv_query($mysqli, "INSERT INTO 
                revistaBE(
                vol,
                num,
                anio,
                imagenRev,
                id_tipoReRevista)
                            VALUES(
                '$volumen',
                '$numero',
                '$anio',
                '$nama_file',
                '$tipo')")
                                              or die('Hubo un error en la consulta de inserción : '.sqlsrv_errors($mysqli));
                        // comprobar consulta
                        if ($query) {
                            // si tiene éxito mensaje indican exitosa almacén de datos
                            header("location: ../../main.php?module=revista&alert=1");
                        }   
                    } else {
                        // Si la imagen no se ha subido, mostrar un mensaje no se ha subido
                        header("location: ../../main.php?module=revista&alert=4");
                    }
                } else {
                    // Si el tamaño del archivo es de menos de 1 MB, mostrar un mensaje no se ha subido
                    header("location: ../../main.php?module=revista&alert=5");
                }
            } else {
                //Si el tipo de archivo subido no es JPG / JPEG / PNG, mostrar un mensaje no se ha subido
                header("location: ../../main.php?module=revista&alert=6");
            }  
        }   
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['save'])) {
            if (isset($_POST['id_revista'])) {
                // Captura de datos desde el formulario
                $id       = $_POST['id_revista'];
                $volumen           = $_POST['volumen'];
                $numero            = $_POST['numero'];
                $anio              = $_POST['anio'];
                $tipo              = $_POST['selectTipo'];
                
                $nama_file          = $_FILES['image']['name'];
                $ukuran_file        = $_FILES['image']['size'];
                $tipe_file          = $_FILES['image']['type'];
                $tmp_file           = $_FILES['image']['tmp_name'];
                
                // determinar la extensión permisible
                $allowed_extensions = array('jpg','jpeg','png');
                
                // Establecer una ruta de carpeta para almacenar revista
                $path               = "../../../images/revista/".$nama_file;
                
                // Comprobar la extensión
                $file               = explode(".", $nama_file);
                $extension          = array_pop($file);

                // si la imagen no se cambia
                if (empty($nama_file)) {
                    // consultar comando para cambiar los datos de la tabla nosotrosBE
                     $query = sqlsrv_query($mysqli, "UPDATE revistaBE SET 
                        vol = '$volumen ',
                        num= '$numero',
                        anio = '$anio',
                        id_tipoReRevista = '$tipo'

                        WHERE id_revista = '$id'")
                                                    or die('Datos acttualizados correctamente : '.sqlsrv_errors($mysqli));

                    // ejecutar consulta
                    if ($query) {
                        // si tiene éxito mensaje indican exitosa actualización de datos
                        header("location: ../../main.php?module=revista&alert=2");
                    } 
                }
                // si la imagen se ha cambiado
                else {
                    //Compruebe si el tipo de archivo que esté cargado de conformidad con las extensiones permitidas
                    if(in_array($extension, $allowed_extensions)) {
                        // Si el tipo de archivo que esté cargado de conformidad con las extensiones permitidas, hacer:
                        if($ukuran_file <= 6000000) { // Comprueba si el tamaño del archivo subido menos igual a 1 MB
                            // Si el tamaño del archivo es menor o igual a 1 MB, hacer:
                            // El proceso de carga
                            if(move_uploaded_file($tmp_file, $path)) { // Compruebe si la imagen subida o no con éxito
                                // Si la imagen ha cargado correctamente, Marca:
                                // consultar comando para cambiar los datos sobre la tabla convocatoriaBE
                                $query = sqlsrv_query($mysqli, "UPDATE revistaBE SET 
                                    vol = '$volumen',
                                    num = '$numero',
                                    anio = '$anio',
                                    id_tipoReRevista = '$tipo',
                                    imagenRev       = '$nama_file'
                                             WHERE id_revista = '$id'")
                                                                or die('se produjo un error en una consulta de actualización : '.sqlsrv_errors($mysqli));

                                // Ejecutar consulta
                                if ($query) {
                                    // si tiene éxito mensaje indican exitosa actualización de datos
                                    header("location: ../../main.php?module=revista&alert=2");
                                }
                            } else {
                                // Si la imagen no se ha subido, mostrar un mensaje no se ha subido
                                header("location: ../../main.php?module=arevista&alert=4");
                            }
                        } else {
                            // Si el tamaño del archivo es de menos de 1 MB, mostrar un mensaje no se ha subido
                            header("location: ../../main.php?module=revista&alert=5");
                        }
                    } else {
                        //Si el tipo de archivo subido no es JPG / JPEG / PNG, mostrar un mensaje no se ha subido
                        header("location: ../../main.php?module=revista&alert=6");
                    } 
                }      
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id_revista'])) {
            $id = $_GET['id_revista'];

            // consultar comando para eliminar los datos de la tabla nosotrosBE
             $query = sqlsrv_query($mysqli, "DELETE FROM revistaBE WHERE id_revista='$id'")
                                            or die('Hubo un error en la consulta de eliminación : '.sqlsrv_errors($mysqli));

            // comprobar los resultados de la consulta
            if ($query) {
                // si tiene éxito mensaje se indican los datos de eliminación con éxito
                header("location: ../../main.php?module=revista&alert=3");
            }
        }
    }  
///////////////////////////////////////////////////////////////////////////////////////////////////

        if ($_GET['act']=='insertTipo') {
        if (isset($_POST['save'])) {
            //capturA ID del usuario que inserto los datos
            $user_id = $_SESSION['user_id'];

            // captura de datos desde un formulario 
            $nombre           = $_POST['nombre'];
            $estado               = $_POST['gender'];

            $nama_file          = $_FILES['Tipoimage']['name'];
            $ukuran_file        = $_FILES['Tipoimage']['size'];
            $tipe_file          = $_FILES['Tipoimage']['type'];
            $tmp_file           = $_FILES['Tipoimage']['tmp_name'];
            
            // determinar la extensión permisible
            $allowed_extensions = array('jpg','jpeg','png');
            
            // Establecer una ruta de carpeta para almacenar la imagen
            $path               = "../../../images/tiporev/".$nama_file;
            
            // Comprobar la extensión
            $file               = explode(".", $nama_file);
            $extension          = array_pop($file);

            // Compruebe si el tipo de archivo que esté cargado de conformidad con las extensiones permitidas
            if(in_array($extension, $allowed_extensions)) {
                // Si el tipo de archivo que esté cargado de conformidad con las extensiones permitidas:
                if($ukuran_file <= 6000000) { // Comprueba si el tamaño del archivo subido menos igual a 1 MB
                    //Si el tamaño del archivo es menor o igual a 1 MB, hacer:
                    //El proceso de carga
                    if(move_uploaded_file($tmp_file, $path)) { // Compruebe si la imagen fue subida o no con éxito
                        // Si la imagen ha cargado correctamente, Marca:
                        // consultar comando para guardar los datos en la tabla is_portfolio
            $query = sqlsrv_query($mysqli, "INSERT INTO 
                tipoRevistaBE(
                nombre,
                estado,
                imagenTipo)
                            VALUES(
                '$nombre',
                '$estado',
                '$nama_file')")
                                              or die('Hubo un error en la consulta de inserción : '.sqlsrv_errors($mysqli));
                        // comprobar consulta
                        if ($query) {
                            // si tiene éxito mensaje indican exitosa almacén de datos
                            header("location: ../../main.php?module=form_revista&form=addTipo");
                        }   
                    } else {
                        // Si la imagen no se ha subido, mostrar un mensaje no se ha subido
                        header("location: ../../main.php?module=revista&alert=4");
                    }
                } else {
                    // Si el tamaño del archivo es de menos de 1 MB, mostrar un mensaje no se ha subido
                    header("location: ../../main.php?module=revista&alert=5");
                }
            } else {
                //Si el tipo de archivo subido no es JPG / JPEG / PNG, mostrar un mensaje no se ha subido
                header("location: ../../main.php?module=revista&alert=6");
            }  
                   
            } 
            else {
                        // Si no se pudo registrar
                        header("location: ../../main.php?module=form_revista&form=addTipo");
                    }
         
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    elseif ($_GET['act']=='updateTipo') {
        if (isset($_POST['save'])) {
            if (isset($_POST['id_tipoRevista'])) {
                // Captura de datos desde el formulario
                $id       = $_POST['id_tipoRevista'];
                $nombre           = $_POST['nombre'];
                $estado               = $_POST['gender'];
                
                $nama_file          = $_FILES['Tipoimage']['name'];
                $ukuran_file        = $_FILES['Tipoimage']['size'];
                $tipe_file          = $_FILES['Tipoimage']['type'];
                $tmp_file           = $_FILES['Tipoimage']['tmp_name'];
                
                // determinar la extensión permisible
                $allowed_extensions = array('jpg','jpeg','png');
                
                // Establecer una ruta de carpeta para almacenar revista
                $path               = "../../../images/tiporev/".$nama_file;
                
                // Comprobar la extensión
                $file               = explode(".", $nama_file);
                $extension          = array_pop($file);

                // si la imagen no se cambia
                if (empty($nama_file)) {
                    // consultar comando para cambiar los datos de la tabla nosotrosBE
                     $query = sqlsrv_query($mysqli, "UPDATE tipoRevistaBE SET 
                        nombre = '$nombre ',
                        estado= '$estado'

                        WHERE id_tipoRevista= '$id'")
                                                    or die('Datos acttualizados correctamente : '.sqlsrv_errors($mysqli));

                    // ejecutar consulta
                    if ($query) {
                        // si tiene éxito mensaje indican exitosa actualización de datos
                        header("location: ../../main.php?module=form_revista&form=addTipo");
                    } 
                }
                // si la imagen se ha cambiado
                else {
                    //Compruebe si el tipo de archivo que esté cargado de conformidad con las extensiones permitidas
                    if(in_array($extension, $allowed_extensions)) {
                        // Si el tipo de archivo que esté cargado de conformidad con las extensiones permitidas, hacer:
                        if($ukuran_file <= 6000000) { // Comprueba si el tamaño del archivo subido menos igual a 1 MB
                            // Si el tamaño del archivo es menor o igual a 1 MB, hacer:
                            // El proceso de carga
                            if(move_uploaded_file($tmp_file, $path)) { // Compruebe si la imagen subida o no con éxito
                                // Si la imagen ha cargado correctamente, Marca:
                                // consultar comando para cambiar los datos sobre la tabla convocatoriaBE
                                $query = sqlsrv_query($mysqli, "UPDATE tipoRevistaBE SET 
                                    nombre = '$nombre',
                                    estado = '$estado',
                                    imagenTipo       = '$nama_file'
                                             WHERE id_tipoRevista = '$id'")
                                                                or die('se produjo un error en una consulta de actualización : '.sqlsrv_errors($mysqli));

                                // Ejecutar consulta
                                if ($query) {
                                    // si tiene éxito mensaje indican exitosa actualización de datos
                                    header("location: ../../main.php?module=form_revista&form=addTipo");
                                }
                            } else {
                                // Si la imagen no se ha subido, mostrar un mensaje no se ha subido
                                header("location: ../../main.php?module=arevista&alert=4");
                            }
                        } else {
                            // Si el tamaño del archivo es de menos de 1 MB, mostrar un mensaje no se ha subido
                            header("location: ../../main.php?module=revista&alert=5");
                        }
                    } else {
                        //Si el tipo de archivo subido no es JPG / JPEG / PNG, mostrar un mensaje no se ha subido
                        header("location: ../../main.php?module=revista&alert=6");
                    } 
                }
     
            }
        }
    }

    ///////////////////////////////////////////////////////////////////////////////////////////////////
        elseif ($_GET['act']=='deleteTipo') {
        if (isset($_GET['id_tipoRevista'])) {
            $id_tipoRevista = $_GET['id_tipoRevista'];

            // consultar comando para eliminar los datos de la tabla convocatoriaBE
             $query = sqlsrv_query($mysqli, "DELETE FROM tipoRevistaBE WHERE id_tipoRevista='$id_tipoRevista'")
                                            or die('Hubo un error en la consulta de eliminación : '.sqlsrv_errors($mysqli));

            // comprobar los resultados de la consulta
            if ($query) {
                // si tiene éxito mensaje se indican los datos de eliminación con éxito
                header("location: ../../main.php?module=form_revista&form=addTipo");

            }
        }
        else{
            // si no tiene éxito mensaje se indican los datos de eliminación no se realizo con éxito
            header("location: ../../main.php?module=form_revista&form=addTipo");
        }
    }




///////////////////////////////////////////////////////////////////////////////////////////////////




}       
?>