<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    <i class="fa fa-desktop icon-title"></i> Tesis

    <a class="btn btn-primary btn-social pull-right" href="?module=form_tesis&form=add">
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
 
    // Mensaje para Agregar portafolio
    elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Bien hecho!</h4>
               La nueva tesis se ha guardado con éxito.
            </div>";
    }
    // Mensaje para Editar portafolio
    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Bien hecho</h4>
              La tesis ha sido actualizado exitosamente.
            </div>";
    }
    // Mensaje para Eliminar portafolio
    elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Bien hecho!</h4>
              La tesis ha sido eliminado exitosamente.
            </div>";
    }
    // Error de subida para mostrar el mensaje "Asegúrese de que el archivo que se sube es correcta"
    elseif ($_GET['alert'] == 4) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-times-circle'></i> Error!</h4>
             No se pudo actualizar.
            </div>";
    }
     // Error de subida para mostrar el mensaje "Asegúrese de que el tamaño de la imagen no es más que 1 MB"
    elseif ($_GET['alert'] == 5) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-times-circle'></i> Error!</h4>
             No se pudo eliminar.
            </div>";
    }
    // Archivos permitidos *.JPG, *.JPEG, *.PNG"
    elseif ($_GET['alert'] == 6) {
      echo "<div class='alert alert-danger alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-times-circle'></i> Error!</h4>
              No se pudo registrar.
            </div>";
    }
    ?>

      <div class="box box-primary">
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Título Tesis</th>
                <th class="center">Fecha Publicacion</th>
                <th class="center">Escuela</th>
                <th class="center">Facultad</th>
                <th class="center">Fecha Registro</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $nombre=$_SESSION['username'];
            $id       = $_SESSION['user_id'] ;
            $esc       = $_SESSION['escuela'] ;
            $no = 1;
            ////////////////////////////////////////////////////////////////////////////////////////////////////77
            


            // funciones de consulta para mostrar los datos en la tabla 
            $query = sqlsrv_query($mysqli, "SELECT t.id_Tesis,t.titulo_Tesis,t.fecha_Tesis,t.fechaReg_Tesis,e.nombre_Escuela,f.nombre_Facu from tesisBE t
              inner join usuarioTesisBE u on t.usuRegTesis = u.id_UsuTesis
              inner join escuelaBE e on u.idEscuela=e.id_Escuela
              inner join facultadBE f on e.facultadId_Escuela = f.id_Facu
              where t.usuRegTesis='$id' and e.id_Escuela='$esc'
              order by id_Tesis desc")
                                            or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));

            // tampilkan data
            while ($data =sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) { 
              
              $result = $data['fechaReg_Tesis']->format('Y-m-d H:i:s');
              $var=$data['id_Tesis'];
              // menampilkan isi tabel dari database ke tabel di aplikasi
              echo "<tr>
                      <td width='40' class='center'>$no</td>
                      <td width='150'>$data[titulo_Tesis]</td>
                      <td width='150'>$data[fecha_Tesis]</td>
                      <td width='150'>$data[nombre_Escuela]</td>
                      <td width='150'>$data[nombre_Facu]</td>
                      <td width='150' center>$result</td>
                      <td class='center' width='80'>
                        <div>
                          <a data-toggle='tooltip' data-placement='top' title='Editar' style='margin-right:5px' class='btn btn-primary btn-sm' href='?module=form_tesis&form=edit&id=$var'>
                              <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                          </a>";
            ?>
                          <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" href="modules/tesis/proses.php?act=delete&id_Tesis=<?php echo $var;?>" onclick="return confirm('Estas seguro que quieres eliminar ?');">
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