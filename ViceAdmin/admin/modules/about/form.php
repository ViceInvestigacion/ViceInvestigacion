 <?php  
if ($_GET['form']=='add') { ?> 
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Agregar Nosotros
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=about"> Nosotros </a></li>
      <li class="active"> Agregar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/about/proses.php?act=insert" method="POST" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-1 control-label">Descripcion</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="descripcion" autocomplete="off" required>
                </div>
              </div>
              
              <br>
              
              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Vision</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="vision" autocomplete="off" required>
                </div>
              </div>
              
              <br>
              
              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Mision</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="mision" autocomplete="off" required>
                </div>
              </div>
              
              <br>
              
              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Directorio</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="directorio" autocomplete="off" required>
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
                <label class="col-sm-1 control-label">Organigrama</label>
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
                  <a href="?module=about" class="btn btn-default btn-reset">Cancelar</a>
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

      // funcion de consulta para mostrar los datos de la tabla is_portfolio
      $query = sqlsrv_query($mysqli, "SELECT * FROM nosotrosBE WHERE id_Nos='$_GET[id]'") 
                                      or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
      $data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
    }
?>
  <!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Editar Nosotros
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=about"> Nosotros </a></li>
      <li class="active"> Editar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/about/proses.php?act=update" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              
              <input type="hidden" name="id_Nos" value="<?php echo $data['id_Nos']; ?>">


              <div class="form-group">
                <label class="col-sm-1 control-label">Descripcion</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="descripcion" autocomplete="off" value="<?php echo $data['descripcion_Nos']; ?>" required>
                </div>
              </div>

              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Vision</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="vision" autocomplete="off" value="<?php echo $data['vision_Nos']; ?>" required>
                </div>
              </div>

              <br>
              
              <div class="form-group">
                <label class="col-sm-1 control-label">Mision</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="mision" autocomplete="off" value="<?php echo $data['mision_Nos']; ?>" required>
                </div>
              </div>

              <br>
              
              <div class="form-group">
                <label class="col-sm-1 control-label">Directorio</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="directorio" autocomplete="off" value="<?php echo $data['directorio_Nos']; ?>" required>
                </div>
              </div>

              <br>
              

              <div class="form-group">
                <label class="col-sm-1 control-label">Fecha</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="fecha" autocomplete="off" value="<?php echo $data['fecMod_Nos']; ?>" required>
                </div>
              </div>

              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Organigrama</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="image" autocomplete="off">
                  <br>
                  <img src="../images/about/<?php echo $data['organigrama_Nos']; ?>" height="150">
                  <br>
                <?php echo $data['organigrama_Nos']; ?><br>
                <?php echo"<label style='color:red'><b> Tamaño maximo 1 MB !!</b></label>"?>
                </div>

              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=about" class="btn btn-default btn-reset">Cancelar</a>
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