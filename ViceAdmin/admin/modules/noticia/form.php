 <?php  
if ($_GET['form']=='add') { ?> 
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Agregar Noticia
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=noticia"> Noticia</a></li>
      <li class="active"> Agregar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/noticia/proses.php?act=insert" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-1 control-label">Titulo</label>
                <div class="col-sm-8">
                  <input placeholder="Titulo Noticia" type="text" class="form-control" name="titulo" autocomplete="off" required>
                </div>
              </div>           
              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Descripcion</label>
                <div class="col-sm-8">
                  <input placeholder="Descripcion" type="text" class="form-control" name="descripcion" autocomplete="off" required>
                </div>
              </div>           
              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Fecha</label>
                <div class="col-sm-8">
                  <input placeholder="Fecha:00/00/0000" type="date" class="form-control" name="fecha" autocomplete="off" required>
                </div>
              </div>
              
              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Imagen Noticia</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file"  name="image" autocomplete="off" >
                  <?php echo"<label style='color:red'><b> Tamaño maximo 1 MB !!</b></label>"?>
                </div>
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=noticia" class="btn btn-default btn-reset">Cancelar</a>
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
      $query = sqlsrv_query($mysqli, "SELECT * FROM noticiaBE WHERE id_Noticia='$_GET[id]'") 
                                      or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
      $data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
    }
?>
  <!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Editar Noticia
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=noticia"> Noticia </a></li>
      <li class="active"> Editar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/noticia/proses.php?act=update" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              
              <input type="hidden" name="id_Noticia" value="<?php echo $data['id_Noticia']; ?>">

              <div class="form-group">
                <label class="col-sm-1 control-label">Titulo</label>
                <div class="col-sm-8">
                  <input placeholder="Titulo" type="text" class="form-control" name="titulo" autocomplete="off" value="<?php echo $data['titulo_Noticia']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Descripcion</label>
                <div class="col-sm-8">
                  <input placeholder="Descripcion" type="text" class="form-control" name="descripcion" autocomplete="off" value="<?php echo $data['descripcion_Noticia']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Fecha</label>
                <div class="col-sm-8">
                  <input placeholder="Fecha:00/00/0000" type="date" class="form-control" name="fecha" autocomplete="off" value="<?php echo $data['fecha_Noticia']; ?>" required>
                </div>
              </div>

              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Imagen Noticia</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="image" autocomplete="off">
                  <br>
                  <img src="../images/noticia/<?php echo $data['imagen_Noticia']; ?>" height="150">
                  <br>
                <?php echo $data['imagen_Noticia']; ?><br>
                <?php echo"<label style='color:red'><b> Tamaño maximo 1 MB !!</b></label>"?>
                </div>

              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=noticia" class="btn btn-default btn-reset">Cancelar</a>
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