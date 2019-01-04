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
            $proy                   = $_POST['selectProy'];
            $fech                   = $_POST['selectFech'];
            

        $query = sqlsrv_query($mysqli, "INSERT INTO 
    fechaProyBE( proyecto_FP, fechaEje_FP)
    VALUES('$proy','$fech')"  )
                                              or die('Hubo un error en la consulta de inserción : '.sqlsrv_errors($mysqli));
                        // comprobar consulta
            if ($query) {
                            // si tiene éxito mensaje indican exitosa almacén de datos
            header("location: ../../main.php?module=proyecto&alert=1");
            }   

                

            else {
                //Error al insertar
                header("location: ../../main.php?module=proyecto&alert=11");
            }  
  
    }
  } 
    ////////////////////////////////////////////////////////////////////////////////////////////////////

    elseif ($_GET['act']=='update') {
        if (isset($_POST['save'])) {
            if (isset($_POST['id_FP'])) {
                // Captura de datos desde el formulario
                $id_FP                  = $_POST['id_FP'];
                $proy                   = $_POST['selectProy'];
                $fech                   = $_POST['selectFech'];


                     $query = sqlsrv_query($mysqli, "UPDATE fechaProyBE SET 
                                                    
                                                    proyecto_FP='$proy',
                                                    fechaEje_FP='$fech' WHERE id_FP = '$id_FP'")
                                                    or die('Datos acttualizados correctamente : '.sqlsrv_errors($mysqli));
                    // ejecutar consulta
                    if ($query) {
                        // si tiene éxito mensaje indican exitosa actualización de datos
                        header("location: ../../main.php?module=proyecto&alert=2");
                    } 

                    else {
                        //hubo un error al actualizar
                        header("location: ../../main.php?module=proyecto&alert=6");
                        } 
            }
        }
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id_FP'])) {
            $id_FP = $_GET['id_FP'];

            // consultar comando para eliminar los datos de la tabla convocatoriaBE
             $query = sqlsrv_query($mysqli, "DELETE FROM fechaProyBE WHERE id_FP='$id_FP'")
                                            or die('Hubo un error en la consulta de eliminación : '.sqlsrv_errors($mysqli));

            // comprobar los resultados de la consulta
            if ($query) {
                // si tiene éxito mensaje se indican los datos de eliminación con éxito
                header("location: ../../main.php?module=proyecto&alert=3");
            }
        
        else{
            // si no tiene éxito mensaje se indican los datos de eliminación no se realizo con éxito
            header("location: ../../main.php?module=proyecto&alert=9");
        }
    } 
}
///////////////////////////////////////////////////////////////////////////////////////////////////
        elseif ($_GET['act']=='deletePro') {
        if (isset($_GET['id_Proyecto'])) {
            $id_Proyecto = $_GET['id_Proyecto'];

            // consultar comando para eliminar los datos de la tabla convocatoriaBE
             $query = sqlsrv_query($mysqli, "DELETE FROM proyectoBE WHERE id_Proyecto='$id_Proyecto'")
                                            or die('Hubo un error en la consulta de eliminación : '.sqlsrv_errors($mysqli));

            // comprobar los resultados de la consulta
            if ($query) {
                // si tiene éxito mensaje se indican los datos de eliminación con éxito
                //header("location: ../../main.php?module=proyecto&alert=12");
                header("location: ../../main.php?module=form_proyecto&form=addPro");
            }
             else{
            // si no tiene éxito mensaje se indican los datos de eliminación no se realizo con éxito
            header("location: ../../main.php?module=form_proyecto&form=addPro");
        }
        }
       
        else{
            // si no tiene éxito mensaje se indican los datos de eliminación no se realizo con éxito
            header("location: ../../main.php?module=form_proyecto&form=addPro");
        }
    }
///////////////////////////////////////////////////////////////////////////////////////////////////

        if ($_GET['act']=='insertPro') {
        if (isset($_POST['save'])) {
            //capturA ID del usuario que inserto los datos
            $user_id = $_SESSION['user_id'];
            // captura de datos desde un formulario 
            
            $titulo            = $_POST['titulo'];
            $descripcion       = $_POST['descripcion'];
            $presupuesto       = $_POST['presupuesto'];
            $enlace            = $_POST['enlace'];
            $escuela           = $_POST['selectEsc'];
            $estado            = $_POST['selectEstado'];


                $query = sqlsrv_query($mysqli, "INSERT INTO 
                    proyectoBE(
            titulo_Proyecto, descripcion_Proyecto, presupuesto_Proyecto, enlace_Proyecto, escuelaId_Proyecto, estado_Proyecto, usuReg)
            VALUES('$titulo','$descripcion ','$presupuesto ','$enlace ','$escuela ','$estado ','$user_id')"  )
            or die('Hubo un error en la consulta de inserción : '.sqlsrv_errors($mysqli));
                        // comprobar consulta
                        if ($query) {
                            // si tiene éxito mensaje indican exitosa almacén de datos
                            header("location: ../../main.php?module=proyecto&alert=1");
                            header("location: ../../main.php?module=form_proyecto&form=addPro");
                        }   
                   
            } 
            else {
                        // Si no se pudo registrar
                        header("location: ../../main.php?module=proyecto&alert=11");
                    }
         
    }
///////////////////////////////////////////////////////////////////////////////////////////////////
    elseif ($_GET['act']=='updatePro') {
        if (isset($_POST['save'])) {
            if (isset($_POST['id_Proyecto'])) {
                // Captura de datos desde el formulario
            $id_Proyecto          = $_POST['id_Proyecto'];
            $titulo            = $_POST['titulo'];
            $descripcion       = $_POST['descripcion'];
            $presupuesto       = $_POST['presupuesto'];
            $enlace            = $_POST['enlace'];
            $escuela           = $_POST['selectEsc'];
            $estado            = $_POST['selectEstado'];

                    // consultar comando para cambiar los datos de la tabla eventoBE
                     $query = sqlsrv_query($mysqli, "UPDATE proyectoBE SET 
                                                    titulo_Proyecto='$titulo',
                                                    descripcion_Proyecto='$descripcion',
                                                    presupuesto_Proyecto='$presupuesto',
                                                    enlace_Proyecto='$enlace',
                                                    escuelaId_Proyecto='$escuela',
                                                    estado_Proyecto='$estado'
                                                    
                                                                      WHERE id_Proyecto = '$id_Proyecto'")
                                                    or die('Datos acttualizados correctamente : '.sqlsrv_errors($mysqli));
                    // ejecutar consulta
                    if ($query) {
                        // si tiene éxito mensaje indican exitosa actualización de datos
                        header("location: ../../main.php?module=proyecto&alert=2");
                        header("location: ../../main.php?module=form_proyecto&form=addPro");

                    } 
                    else
                    {
                        header("location: ../../main.php?module=proyecto&alert=11");
                    }
     
            }
        }
    }




///////////////////////////////////////////////////////////////////////////////////////////////////
    if ($_GET['act']=='insertFech') {
        if (isset($_POST['save'])) {
            //capturA ID del usuario que inserto los datos
            $user_id = $_SESSION['user_id'];
            // captura de datos desde un formulario 
            
            $actividad            = $_POST['actividad'];
            $fecha                  = $_POST['fecha'];

                $query = sqlsrv_query($mysqli, "INSERT INTO 
                    fechaEjeBE(
            actividad_FE,fecha)
    VALUES('$actividad ','$fecha')"  )
                                              or die('Hubo un error en la consulta de inserción : '.sqlsrv_errors($mysqli));
                        // comprobar consulta
                        if ($query) {
                            // si tiene éxito mensaje indican exitosa almacén de datos
                            header("location: ../../main.php?module=proyecto&alert=1");
                            header("Location: ../../main.php?module=form_proyecto&form=addFech");
                        }   
                   
            } 
            else {
                        // Si no se pudo registrar
                        header("location: ../../main.php?module=proyecto&alert=11");
                    }
         
    }
///////////////
elseif ($_GET['act']=='deleteFech') {
        if (isset($_GET['id_FE'])) {
            $id_FE = $_GET['id_FE'];

            // consultar comando para eliminar los datos de la tabla convocatoriaBE
             $query = sqlsrv_query($mysqli, "DELETE FROM fechaEjeBE WHERE id_FE='$id_FE'")
                                            or die('Hubo un error en la consulta de eliminación : '.sqlsrv_errors($mysqli));

            // comprobar los resultados de la consulta
            if ($query) {
                // si tiene éxito mensaje se indican los datos de eliminación con éxito
                header("location: ../../main.php?module=proyecto&alert=12");
                header("Location: ../../main.php?module=form_proyecto&form=addFech");
            }
        }
        else{
            // si no tiene éxito mensaje se indican los datos de eliminación no se realizo con éxito
            header("location: ../../main.php?module=proyecto&alert=13");
        }
    }
////////////////
    elseif ($_GET['act']=='updateFech') {
        if (isset($_POST['save'])) {
            if (isset($_POST['id_FE'])) {
                // Captura de datos desde el formulario
            $id_FE            = $_POST['id_FE'];
            $actividad             = $_POST['actividad'];
            $fecha               = $_POST['fecha'];

                    // consultar comando para cambiar los datos de la tabla eventoBE
                     $query = sqlsrv_query($mysqli, "UPDATE fechaEjeBE SET 
                                                
                                                    actividad_FE='$actividad',
                                                    fecha='$fecha'
                                                    
                                                                      WHERE id_FE = '$id_FE'")
                                                    or die('Datos acttualizados correctamente : '.sqlsrv_errors($mysqli));
                    // ejecutar consulta
                    if ($query) {
                        // si tiene éxito mensaje indican exitosa actualización de datos
                        header("location: ../../main.php?module=proyecto&alert=2");
                        header("Location: ../../main.php?module=form_proyecto&form=addFech");
                    } 
                    else
                    {
                        header("location: ../../main.php?module=proyecto&alert=6");
                    }
     
            }
        }
    }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($_GET['act']=='insertEsc') {
        if (isset($_POST['save'])) {
            //capturA ID del usuario que inserto los datos
            $user_id = $_SESSION['user_id'];
            // captura de datos desde un formulario 
            
            $nombre                 = $_POST['nombre'];
            $fac                    = $_POST['selectFac'];

                $query = sqlsrv_query($mysqli, "INSERT INTO 
                    escuelaBE(
            nombre_Escuela,facultadId_Escuela) VALUES('$nombre','$fac')"  ) or die('Hubo un error en la consulta de inserción : '.sqlsrv_errors($mysqli));
                        // 
                        if ($query) {
                            // 

                            header("location: ../../main.php?module=form_proyecto&form=addEsc");
                            
                        }   
                   
            } 
            else {
                        // 
                        header("location: ../../main.php?module=form_proyecto&form=addEsc");
                    }
         
    }
    //////////////////
elseif ($_GET['act']=='deleteEsc') {
        if (isset($_GET['id_Escuela'])) {
            $id_Esc = $_GET['id_Escuela'];

            // consultar comando para eliminar los datos de la tabla escuelaBE
             $query = sqlsrv_query($mysqli, "DELETE FROM escuelaBE WHERE id_Escuela='$id_Esc'")
                                            or die('Hubo un error en la consulta de eliminación : '.sqlsrv_errors($mysqli));

            // 
            if ($query) {
                // 
                header("location: ../../main.php?module=form_proyecto&form=addEsc");
            }
        }
    }
    ///////////////////////////////////////////
        elseif ($_GET['act']=='updateEsc') {
        if (isset($_POST['save'])) {
            if (isset($_POST['id_Escuela'])) {
                // Captura de datos desde el formulario
            $id_Escuela          = $_POST['id_Escuela'];
            $nombre                 = $_POST['nombre'];
            $fac                    = $_POST['selectFac'];

                    // consultar comando para cambiar los datos de la tabla escuelaBE
                     $query = sqlsrv_query($mysqli, "UPDATE escuelaBE SET 
                                                    nombre_Escuela       ='$nombre',
                                                    facultadId_Escuela   ='$fac'
                                                                      WHERE id_Escuela = '$id_Escuela'")
                                                    or die('Datos acttualizados correctamente : '.sqlsrv_errors($mysqli));
                    // ejecutar consulta
                    if ($query) {
                        // si tiene éxito mensaje indican exitosa actualización de datos
                        header("location: ../../main.php?module=form_proyecto&form=addEsc");
                    } 
            }
        }
    }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if ($_GET['act']=='insertFac') {
        if (isset($_POST['save'])) {
            //capturA ID del usuario que inserto los datos
            $user_id = $_SESSION['user_id'];
            // captura de datos desde un formulario 
            
            $nombre               = $_POST['nombre'];

                $query = sqlsrv_query($mysqli, "INSERT INTO 
                    facultadBE( nombre_Facu)VALUES('$nombre')"  ) or die('Hubo un error en la consulta de inserción : '.sqlsrv_errors($mysqli));
                        // comprobar consulta
                        if ($query) {
                            // si tiene éxito mensaje indican exitosa almacén de datos
                            header("location: ../../main.php?module=form_proyecto&form=addFac");
                        }   
                   
            } 
            else {
                        // Si no se pudo registrar
                        //header("location: ../../main.php?module=evento&alert=11");
                    }
         
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET['act']=='deleteFac') {
        if (isset($_GET['id_Facu'])) {
            $id_Facu = $_GET['id_Facu'];

            // consultar comando para eliminar los datos de la tabla convocatoriaBE
             $query = sqlsrv_query($mysqli, "DELETE FROM facultadBE WHERE id_Facu='$id_Facu'")or die('Hubo un error en la consulta de eliminación : '.sqlsrv_errors($mysqli));

            // comprobar los resultados de la consulta
            if ($query) {
                // si tiene éxito mensaje se indican los datos de eliminación con éxito
                 header("location: ../../main.php?module=form_proyecto&form=addFac");
            }
        }
        else{
            // si no tiene éxito mensaje se indican los datos de eliminación no se realizo con éxito
            //header("location: ../../main.php?module=evento&alert=13");
            header("location: ../../main.php?module=form_proyecto&form=addFac");
        }
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET['act']=='updateFac') {
        if (isset($_POST['save'])) {
            if (isset($_POST['id_Facu'])) {
                // Captura de datos desde el formulario
            $id_Facu           = $_POST['id_Facu'];
            $nombre               = $_POST['nombre'];
                    // consultar comando para cambiar los datos de la tabla eventoBE
                     $query = sqlsrv_query($mysqli, "UPDATE facultadBE SET 
                                                    nombre_Facu        ='$nombre'
                                                                      WHERE id_Facu= '$id_Facu'")
                                                    or die('Datos acttualizados correctamente : '.sqlsrv_errors($mysqli));
                    // ejecutar consulta
                    if ($query) {
                        // si tiene éxito mensaje indican exitosa actualización de datos
                         header("location: ../../main.php?module=form_proyecto&form=addFac");
                    } 
                    else
                    {
                       // header("location: ../../main.php?module=evento&alert=11");
                    }
     
            }
        }
    }
///////////////////////////////////////////***UNIVERSIDAD***////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($_GET['act']=='insertFproy') {
        if (isset($_POST['save'])) {
            //capturA ID del usuario que inserto los datos
            $user_id = $_SESSION['user_id'];
            // captura de datos desde un formulario 
            
            $proyecto               = $_POST['selectPro'];
            $fpro               = $_POST['selectFpro'];

                $query = sqlsrv_query($mysqli, "INSERT INTO 
                    fondoGProyBE( idProy,idFondo)VALUES('$proyecto','$fpro')"  ) or die('Hubo un error en la consulta de inserción : '.sqlsrv_errors($mysqli));
                        // comprobar consulta
                        if ($query) {
                            // si tiene éxito mensaje indican exitosa almacén de datos
                            header("location: ../../main.php?module=form_proyecto&form=addFproy");
                        }   
                   
            } 
            else {
                        // Si no se pudo registrar
                        //header("location: ../../main.php?module=evento&alert=11");
                    }
         
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET['act']=='deleteFproy') {
        if (isset($_GET['id_FGP'])) {
            $id_FGP = $_GET['id_FGP'];

            // consultar comando para eliminar los datos de la tabla convocatoriaBE
             $query = sqlsrv_query($mysqli, "DELETE FROM fondoGProyBE WHERE id_FGP='$id_FGP'")or die('Hubo un error en la consulta de eliminación : '.sqlsrv_errors($mysqli));

            // comprobar los resultados de la consulta
            if ($query) {
                // si tiene éxito mensaje se indican los datos de eliminación con éxito
                 header("location: ../../main.php?module=form_proyecto&form=addFproy");
            }
        }
        else{
            // si no tiene éxito mensaje se indican los datos de eliminación no se realizo con éxito
            //header("location: ../../main.php?module=evento&alert=13");
            //header("location: ../../main.php?module=form_proyecto&form=addFac");
        }
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET['act']=='updateFproy') {
        if (isset($_POST['save'])) {
            if (isset($_POST['id_FGP'])) {
                // Captura de datos desde el formulario
           // $idf         = $_POST['id_FGP'];
            $idf         = $_POST['id_FGP'];
            $proy               = $_POST['selectPro1'];
            $fondo              = $_POST['selectFpro1'];
                    // consultar comando para cambiar los datos de la tabla eventoBE
                     $query = sqlsrv_query($mysqli, "UPDATE fondoGProyBE SET 
                                                    idProy='$proy',
                                                    idFondo='$fondo'
                                                    WHERE id_FGP= '$idf'")
                                                    or die('Datos acttualizados correctamente : '.sqlsrv_errors($mysqli));
                    // ejecutar consulta
                    if ($query) {
                        // si tiene éxito mensaje indican exitosa actualización de datos
                         header("location: ../../main.php?module=form_proyecto&form=addFproy");
                    } 
                    else
                    {
                       // header("location: ../../main.php?module=evento&alert=11");
                    }
     
            }
        }
    }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if ($_GET['act']=='insertFond') {
        if (isset($_POST['save'])) {
            //capturA ID del usuario que inserto los datos
            $user_id = $_SESSION['user_id'];
            // captura de datos desde un formulario 
            
            $descripcion               = $_POST['descripcion'];
            $estado               = $_POST['gender'];

                $query = sqlsrv_query($mysqli, "INSERT INTO 
                    fondoGobBE( descripcion_fondoGob,estado_fondoGob)VALUES('$descripcion','$estado')"  ) or die('Hubo un error en la consulta de inserción : '.sqlsrv_errors($mysqli));
                        // comprobar consulta
                        if ($query) {
                            // si tiene éxito mensaje indican exitosa almacén de datos
                            header("location: ../../main.php?module=form_proyecto&form=addFond");
                        }   
                   
            } 
            else {
                        // Si no se pudo registrar
                        //header("location: ../../main.php?module=evento&alert=11");
                    }
         
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET['act']=='deleteFond') {
        if (isset($_GET['id_fondoGob'])) {
            $id_fondoGob = $_GET['id_fondoGob'];

            // consultar comando para eliminar los datos de la tabla convocatoriaBE
             $query = sqlsrv_query($mysqli, "DELETE FROM fondoGobBE WHERE id_fondoGob='$id_fondoGob'")or die('Hubo un error en la consulta de eliminación : '.sqlsrv_errors($mysqli));

            // comprobar los resultados de la consulta
            if ($query) {
                // si tiene éxito mensaje se indican los datos de eliminación con éxito
                 header("location: ../../main.php?module=form_proyecto&form=addFond");
            }
        }
        else{
            // si no tiene éxito mensaje se indican los datos de eliminación no se realizo con éxito
            //header("location: ../../main.php?module=evento&alert=13");
            //header("location: ../../main.php?module=form_proyecto&form=addFac");
        }
    }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    elseif ($_GET['act']=='updateFond') {
        if (isset($_POST['save'])) {
            if (isset($_POST['id_fondoGob'])) {
                // Captura de datos desde el formulario
            $id_fondoGob        = $_POST['id_fondoGob'];
            $descripcion               = $_POST['descripcion'];
            $estado               = $_POST['gender'];
                    // consultar comando para cambiar los datos de la tabla eventoBE
                     $query = sqlsrv_query($mysqli, "UPDATE fondoGobBE SET 
                                                    descripcion_fondoGob='$descripcion',
                                                    estado_fondoGob='$estado'
                                                    WHERE id_fondoGob= '$id_fondoGob'")
                                                    or die('Datos acttualizados correctamente : '.sqlsrv_errors($mysqli));
                    // ejecutar consulta
                    if ($query) {
                        // 
                         header("location: ../../main.php?module=form_proyecto&form=addFond");
                    } 
                    else
                    {
                       // header("location: ../../main.php?module=evento&alert=11");
                    }
     
            }
        }
    }
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}       
?>