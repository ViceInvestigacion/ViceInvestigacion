 <?php  
if ($_GET['form']=='add') { ?> 
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Agregar Convocatoria
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=convocatoria"> Convocatoria </a></li>
      <li class="active"> Agregar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/convocatoria/proses.php?act=insert" method="POST" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-1 control-label">Descripcion</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="descripcion" autocomplete="off" required>
                </div>
              </div>
              
              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Fecha</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="fecha" autocomplete="off" required>
                </div>
              </div>
              
              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label" >Imagen</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="image" autocomplete="off" >
                  <?php echo"<label style='color:red'><b> Tamaño maximo 1 MB !!</b></label>"?>
                </div>
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=convocatoria" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->

<?php
}


elseif ($_GET['form']=='edit') { 
  if (isset($_GET['id'])) {

      // funcion de consulta para mostrar los datos de la tabla convocatoria
      $query = sqlsrv_query($mysqli, "SELECT * FROM convocatoriaBE WHERE id_Conv='$_GET[id]'") 
                                      or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
      $data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);

      // funcion de consulta para mostrar los resultados de la convocatoria
      $query2 = sqlsrv_query($mysqli, "SELECT * FROM resultadoBE WHERE concurso_Resultado='$_GET[id]'") 
                                      or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
      $data2  = sqlsrv_fetch_array($query2, SQLSRV_FETCH_ASSOC);
    }
?>
  <!--  form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Editar Convocatoria
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=convocatoria"> Convocatoria </a></li>
      <li class="active"> Editar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/convocatoria/proses.php?act=update" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              
              <input type="hidden" name="id_Conv" value="<?php echo $data['id_Conv']; ?>">


              <div class="form-group">
                <label class="col-sm-1 control-label">Descripcion :</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="descripcion" autocomplete="off" value="<?php echo $data['descripcion_Conv']; ?>" required>
                </div>
              </div>

              <br>
              <div class="form-group">
                <label class="col-sm-1 control-label">Fecha :</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="fecha" autocomplete="off" value="<?php echo $data['fecha_Conv']; ?>" required>
                </div>
              </div>

              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Imagen :</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="image" autocomplete="off">
                  <br>
                  <img src="../images/convocatoria/<?php echo $data['imagen_Conv']; ?>" height="150">
                  <BR><?php echo $data['imagen_Conv']; ?>
                  <br>
                  <?php echo"<label style='color:red'><b> Tamaño maximo 1 MB !!</b></label>"?>
                </div>
              </div>
              <div>
                <label  role="button" class="col-sm-1 control-label">Resultado :</label>
                  <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger" href="modules/convocatoria/proses.php?act=deleteResult&id_Conv=<?php echo $data['id_Conv'];?>" onclick="return confirm('Estas seguro que quieres eliminar ?');">
                              </i>
                  Quitar</a>
                  
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=convocatoria" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}

elseif ($_GET['form']=='result') { 
  if (isset($_GET['id'])) {
      $query = sqlsrv_query($mysqli, "SELECT * FROM convocatoriaBE WHERE id_Conv='$_GET[id]'") 
                                      or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
      $data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);

      // funcion de consulta para mostrar los resultados de la convocatoria
      $query2 = sqlsrv_query($mysqli, "SELECT * FROM resultadoBE WHERE concurso_Resultado='$_GET[id]'") 
                                      or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
      $data2  = sqlsrv_fetch_array($query2, SQLSRV_FETCH_ASSOC);
    }
    
?>
  <!-- form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Resultado Convocatoria
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=convocatoria"> Convocatoria </a></li>
      <li class="active"> Resultados </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
            <form role="form" class="form-horizontal" action="modules/convocatoria/proses.php?act=insertResultado" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-1 control-label">Descripcion</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="descripcion" autocomplete="off" required>
                </div>                
              </div>
                
                <br>
                <div class="form-group">
                  <label class="col-sm-1 control-label">Convocatoria</label>
                  <div class="col-sm-8">
                  <select  style="width: 795px" name="convoca2" required  title="Seleccione">
                   
                    <?php
                    
                    echo "<option value=";
                    echo $data['id_Conv'];
                    echo ">";
                   echo $data['descripcion_Conv']; 
                    echo "</option>";
                    
                    ?>
                  </select>
                  </div>
                </div>
                <br>
                <div class="form-group">
                <label class="col-sm-1 control-label"> Archivo </label>
                  <div class="col-sm-8">
                  <input style="height:35px" type="file" name="doc" autocomplete="off" >
                  <?php echo"<label style='color:red'><b> Tamaño maximo 6 MB !!</b></label>"?>
                 </div>
               </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=convocatoria" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}   
?>
