<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    
    <div>
      <i class="fa fa-bell icon-title"></i> Evento

      <a class="btn btn-primary btn-social pull-right" href="?module=form_evento&form=add">
      <i class="fa fa-plus"></i> Agregar
    </a>
    <a class="btn btn-success btn-social pull-right" href="?module=form_evento&form=addTipo">
      <i class="fa fa-plus"></i> Tipo Evento
    </a>

    <a class="btn btn-warning btn-social pull-right" href="?module=form_evento&form=addDet">
      <i class="fa fa-list"></i> Detalle
    </a>

    <a class="btn btn-info btn-social pull-right" href="?module=form_evento&form=addPon">
      <i class="fa fa-plus"></i> Ponente
    </a>
    </div>
    

  </h1>

</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
    <?php  
    // función para mostrar mensajes
    if (empty($_GET['alert'])) {
      echo "";
    } 
 
    // Mensaje para Agregar Evento
    elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Bien hecho!</h4>
              El nuevo dato se ha guardado con éxito.
            </div>";
    }
    // Mensaje para Editar Evento
    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Bien hecho</h4>
              El elemento ha sido actualizado exitosamente.
            </div>";
    }
    // Mensaje para Eliminar Evento
    elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Bien hecho!</h4>
              El evento ha sido eliminado exitosamente.
            </div>";
    }
    // Error de subida para mostrar el mensaje "Asegúrese de que el archivo que se sube es correcta"
    elseif ($_GET['alert'] == 4) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-times-circle'></i> Error!</h4>
              Asegúrese de que el archivo subido es correcto.
            </div>";
    }
     // Error de subida para mostrar el mensaje "Asegúrese de que el tamaño de la imagen no es más que 1 MB"
    elseif ($_GET['alert'] == 5) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-times-circle'></i> Error!</h4>
             Asegúrese de que el tamaño de la imagen no sea superior a 1 Mb.
            </div>";
    }
    // Archivos permitidos *.JPG, *.JPEG, *.PNG"
    elseif ($_GET['alert'] == 6) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-times-circle'></i> Error!</h4>
              Asegúrese de que el archivo cargado está en *.JPG / *.JPEG / *.PNG.
            </div>";
    }
    // Archivos permitidos  *.pdf,*.doc,*.docx,*.xls,*.xlxs
    elseif ($_GET['alert'] == 7) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-times-circle'></i> Error!</h4>
              Asegúrese de que el archivo cargado está en *.pdf/*.doc/*.docx/*.xls/*.xlxs.
            </div>";
    }
    // Error de subida para mostrar el mensaje "Asegúrese de que el tamaño de la imagen no es más que 1 MB"
    elseif ($_GET['alert'] == 8) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-times-circle'></i> Error!</h4>
             Asegúrese de que el tamaño del archivo no sea superior a 6 Mb.
            </div>";
    }
        // Mensaje para Eliminar Evento
    elseif ($_GET['alert'] == 9) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Error!</h4>
              Se genero un error para eliminar!!.
            </div>";
    }
        // Mensaje para insertar tipo evento
    elseif ($_GET['alert'] == 10) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Bien hecho!</h4>
               El nuevo Tipo Evento se ha guardado con éxito.
            </div>";
    }
        // Mensaje error no se pudo Eliminar TipoEvento
    elseif ($_GET['alert'] == 11) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Bien hecho!</h4>
              Error!! no se pudo registrar.
            </div>";
    }
        // Mensaje para Eliminar TipoEvento
    elseif ($_GET['alert'] == 12) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Bien hecho!</h4>
              Eliminado exitosamente.
            </div>";
    }
           // Mensaje de error al Eliminar tipoEvento
    elseif ($_GET['alert'] == 13) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Bien hecho!</h4>
              Error.. No se pudo Eliminar!!.
            </div>";
    }
    // Mensaje para Insertar DetalleEvento
    elseif ($_GET['alert'] == 14) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Bien hecho!</h4>
              El nuevo Evento Detalle se ha guardado con éxito.
            </div>";
    }

   // Mensaje para Editar DetalleEvento
    elseif ($_GET['alert'] == 15) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Bien hecho</h4>
              El Evento Detalle ha sido actualizado exitosamente.
            </div>";
    }
    // Mensaje para Eliminar DetalleEvento
    elseif ($_GET['alert'] == 16) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Bien hecho!</h4>
              El Evento Detalle  ha sido eliminado exitosamente.
            </div>";
    }
    ?>

      <div class="box box-primary">
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Nombre Evento</th>
                <th class="center">Descripcion</th>
                <th class="center">Tipo Evento</th>
                <th class="center">Duracion Evento</th>
                <th class="center">Fec Inicio</th>
                <th class="center">Fec Fin</th>
                <th class="center">Hora Inicio</th>
                <th class="center">Hora Fin</th>
                <th class="center">Costo General SC</th>
                <th class="center">Costo General CC</th>
                <th class="center">Costo Alumn</th>
                <th class="center">Imagen Evento</th>
                <th class="center">Acciones</th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;

            // funciones de consulta para mostrar los datos en la tabla 
           /* $query = sqlsrv_query($mysqli, "SELECT * FROM eventoBE ORDER BY id_Evento DESC")
                                            or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));*/
            
$query = sqlsrv_query($mysqli, "SELECT id_Evento as id,nombre_Evento,descripcion_Evento,duracion_Evento,fecInicio_Evento,fecFin_Evento,horaInicio_Evento,horaFin_Evento,cstGSnCertificado_Evento,cstGCnCertificado_Evento,cstFCnCertificado_Evento,imagen_Evento,eventoBE.id_Evento, tipoEventoBE.descripcion_TipoEv
FROM eventoBE INNER JOIN tipoEventoBE ON eventoBE.tipo_Evento = tipoEventoBE.id_TipoEv ORDER BY id_Evento DESC")
                                            or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));
            // almacena en un array data
            while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) { 
              // mostrar los datos
              echo "<tr>
                      <td width='40' class='center'>$no</td>
                      <td width='150'>$data[nombre_Evento]</td>
                      <td width='150'>$data[descripcion_Evento]</td>
                      <td width='150'>$data[descripcion_TipoEv]</td>
                      <td width='150'>$data[duracion_Evento]</td>
                      <td width='150'>$data[fecInicio_Evento]</td>
                      <td width='150'>$data[fecFin_Evento]</td>
                      <td width='150'>$data[horaInicio_Evento]</td>
                      <td width='150'>$data[horaFin_Evento]</td>
                      <td width='150'>$data[cstGSnCertificado_Evento]</td>
                      <td width='150'>$data[cstGCnCertificado_Evento]</td>
                      <td width='150'>$data[cstFCnCertificado_Evento]</td>

                      <td width='200' class='center'>
                        <img src='../images/evento/$data[imagen_Evento]' height='150'>
                      </td>
                      <td class='center' width='80'>
                        <div>
                          <a data-toggle='tooltip' data-placement='top' title='Editar' style='margin-right:5px' class='btn btn-warning btn-sm' href='?module=form_evento&form=edit&id=$data[id_Evento]'>
                              <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                          </a>
                          ";
            ?>
                          
                          <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" href="modules/evento/proses.php?act=delete&id_Evento=<?php echo $data['id_Evento'];?>" onclick="return confirm('Estas seguro que quieres eliminar ?');">
                              <i style="color:#fff" class="glyphicon glyphicon-trash"></i>
                          </a>
            <?php
            //btn-info    btn-succes   btn-warning
            //class="glyphicon glyphicon-list-alt"
              echo "    </div>
                      </td>
                    </tr>";
              $no++;
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content