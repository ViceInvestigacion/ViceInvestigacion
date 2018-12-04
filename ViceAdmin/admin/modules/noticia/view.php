<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-bell icon-title"></i> Noticias
    <a class="btn btn-primary btn-social pull-right" href="?module=form_noticia&form=add">
      <i class="fa fa-plus"></i> Agregar
    </a>
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
 
    // Mensaje para Agregar Noticias
    elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Bien hecho!</h4>
              Los datos se han guardado con éxito.
            </div>";
    }
    // Mensaje para Editar Noticias
    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Bien hecho</h4>
              Los datos de Noticias han sido actualizado exitosamente.
            </div>";
    }
    // Mensaje para Eliminar Noticias
    elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Bien hecho!</h4>
              Los datos han sido eliminado exitosamente.
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
    ?>

      <div class="box box-primary">
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Titulo</th>
                <th class="center">Descripcion</th>
                <th class="center">Fecha</th>
                <th class="center">Imagen</th>
                <th class="center">Acciones</th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;

            // funciones de consulta para mostrar los datos en la tabla 
            $query = sqlsrv_query($mysqli, "SELECT * FROM noticiaBE ORDER BY id_Noticia DESC")
                                            or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));
            // almacenas los datos en la variable data
            while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) { 
              // agregas valores a los campos de la tabla
              echo "<tr>
                      <td width='40' class='center'>$no</td>
                      <td width='150'>$data[titulo_Noticia]</td>
                      <td width='150'>$data[descripcion_Noticia]</td>
                      <td width='150'>$data[fecha_Noticia]</td>
                      <td width='200' class='center'>
                        <img src='../images/noticia/$data[imagen_Noticia]' height='150'>
                      </td>
                      <td class='center' width='80'>
                        <div>
                          <a data-toggle='tooltip' data-placement='top' title='Editar' style='margin-right:5px' class='btn btn-warning btn-sm' href='?module=form_noticia&form=edit&id=$data[id_Noticia]'>
                              <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                          </a>";
            ?>
                          <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" href="modules/noticia/proses.php?act=delete&id_Noticia=<?php echo $data['id_Noticia'];?>" onclick="return confirm('Estas seguro que quieres eliminar ?');">
                              <i style="color:#fff" class="glyphicon glyphicon-trash"></i>
                          </a>
            <?php
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