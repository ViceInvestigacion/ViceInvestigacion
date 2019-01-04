<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    
    <div>
      <i class="fa fa-line-chart icon-title"></i> Detalle Proyecto

      <a style=" margin: 7px" class="btn btn-primary btn-social pull-right" href="?module=form_proyecto&form=add">
      <i class="fa fa-plus"></i> Agregar
      </a>
      
      <a style=" margin: 7px" class="btn btn-success btn-social pull-right" href="?module=form_proyecto&form=addPro">
      <i class="fa fa-plus-square"></i> Proyecto
      </a>

      <a style=" margin: 7px" class="btn btn-info btn-social pull-right" href="?module=form_proyecto&form=addFproy">
      <i class="fa fa-money"></i> Fondo Proyecto
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
              El elemento ha sido eliminado exitosamente.
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
              Se genero un error para eactualizar!!.
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
                <th class="center">Nombre Proyecto</th>
                <th class="center">Descripcion</th>
                <th class="center">Actividad</th>
                <th class="center">Presupuesto</th>
                <th class="center">Escuela</th>
                <th class="center">Facultad</th>
                <th class="center">Url</th>
                <th class="center">Fec Ejecucion</th>
                <th class="center">Estado</th>
                <th class="center">Acciones</th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;

            // funciones de consulta para mostrar los datos en la tabla 
            
$query = sqlsrv_query($mysqli, "SELECT * FROM fechaProyBE INNER JOIN proyectoBE ON fechaProyBE.proyecto_FP = proyectoBE.id_Proyecto 
              INNER JOIN escuelaBE ON proyectoBE.escuelaId_Proyecto = escuelaBE.id_Escuela
              INNER JOIN facultadBE ON escuelaBE.facultadId_Escuela = facultadBE.id_Facu
              INNER JOIN fechaEjeBE ON fechaProyBE.fechaEje_FP = fechaEjeBE.id_FE order by id_FP desc") or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));
            // almacena en un array data
            while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) 
            { 
              //$result = $data['fecha']->format('Y-m-d H:i:s');
              if ($data['estado_Proyecto']<1)
                   {
                        $cond='<b><span style="color: red; text-align: center">Desaprobado</apan>';
                       
                   }
                   elseif ($data['estado_Proyecto']==1) {
                        $cond='<b><span style="color: blue; text-align: center">Proceso</apan>';
                       }
                 elseif($data['estado_Proyecto']==2){
                        $cond='<b><span style="color: green; text-align: center">Aprobado</apan>';
                        
                    }
              // mostrar los datos
              echo "<tr>
                      <td width='40' class='center'>$no</td>
                      <td width='150'>$data[titulo_Proyecto]</td>
                      <td width='150'>$data[descripcion_Proyecto]</td>
                      <td width='150'>$data[actividad_FE]</td>
                      <td width='150'>$data[presupuesto_Proyecto]</td>
                      <td width='150'>$data[nombre_Escuela]</td>
                      <td width='150'class='center'>$data[nombre_Facu]</td>
                      <td width='150' class='center'>$data[enlace_Proyecto]</td>
                      <td width='80' class='center'>$data[fecha]</td>
                      <td width='80' class='center'>$cond</td>
                      <td class='center' width='80'>
                        <div>
                          <a data-toggle='tooltip' data-placement='top' title='Editar' style='margin-right:5px' class='btn btn-warning btn-sm' href='?module=form_proyecto&form=edit&id=$data[id_FP]'>
                              <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                          </a>
                          ";
            ?>
                          
                          <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" href="modules/proyecto/proses.php?act=delete&id_FP=<?php echo $data['id_FP'];?>" onclick="return confirm('Estas seguro que quieres eliminar ?');">
                              <i style="color:#fff" class="glyphicon glyphicon-trash"></i>
                          </a>
            <?php

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