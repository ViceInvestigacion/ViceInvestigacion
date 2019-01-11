 <?php  
if ($_GET['form']=='add') { ?> 
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-plus"></i> Agregar Notificacion
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=notificacion"> Notificacion</a></li>
      <li class="active"> Agregar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/notificacion/proses.php?act=insert" method="POST" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-1 control-label">Titulo</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="titulo" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Descripcion</label>
                <div class="col-sm-8" id="info">
                  <textarea id="texto" class="form-control" onkeypress="return limita(event, 450);" onkeyup="actualizaInfo(450)" placeholder="Maximo 450 caracteres..." maxlength="500" name="descripcion" autocomplete="off" style="max-width: 100%; max-height : 200px;"  required></textarea>
                </div>
                <div style="color: orange" id="info1"></div>
                            <script type="text/javascript">
                                  function limita(elEvento, maximoCaracteres) {
                                    var elemento = document.getElementById("texto");

                                    // Obtener la tecla pulsada
                                    var evento = elEvento || window.event;
                                    var codigoCaracter = evento.charCode || evento.keyCode;
                                    // Permitir utilizar las teclas con flecha horizontal
                                    if(codigoCaracter == 37 || codigoCaracter == 39) {
                                      return true;
                                    }

                                    // Permitir borrar con la tecla Backspace y con la tecla Supr.
                                    if(codigoCaracter == 8 || codigoCaracter == 46) {
                                      return true;
                                    }
                                    else if(elemento.value.length >= maximoCaracteres ) {
                                      return false;
                                    }
                                    else {
                                      return true;
                                    }
                                  }

                                  function actualizaInfo(maximoCaracteres) {
                                    var elemento = document.getElementById("texto");
                                    var info = document.getElementById("info");

                                    if(elemento.value.length >= maximoCaracteres ) {
                                      info1.innerHTML = "Máximo "+maximoCaracteres+" caracteres";
                                    }
                                    else {
                                     info1.innerHTML = "Puedes escribir hasta "+(maximoCaracteres-elemento.value.length)+" caracteres adicionales";
                                    }
                                  }
                            </script>
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Estado </label>
                <div class="col-sm-8">
                  <fieldset id="group1">
                    <input type="radio" name="gender" value="0"> Inactivo<br>
                    <input type="radio" name="gender" value="1"> Activo
                  </fieldset>
                </div>                
              </div>


              <div class="form-group">
                <label class="col-sm-1 control-label">Imagen Notificacion</label>
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
                  <a href="?module=notificacion" class="btn btn-default btn-reset">Cancelar</a>
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
      $query = sqlsrv_query($mysqli, "SELECT * from alerta  WHERE id_alerta='$_GET[id]'") 
                                      or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
      $data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
    }
?>
  <!-- form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Editar Notificacion
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=notificacion"> Notificacion </a></li>
      <li class="active"> Editar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/notificacion/proses.php?act=update" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              
              <input type="hidden" name="id_alerta" value="<?php echo $data['id_alerta']; ?>">


              <div class="form-group">
                <label class="col-sm-1 control-label">Titulo</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="titulo" autocomplete="off" value="<?php echo $data['titulo']; ?>" required>
                </div>
              </div>

              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Descripcion</label>
                <div id="info" class="col-sm-8">
                  <textarea id="texto" class="form-control" onkeypress="return limita(event, 450);" onkeyup="actualizaInfo(450)" placeholder="Maximo 450 caracteres..." maxlength="500" name="descripcion" autocomplete="off" style="max-width: 100%; max-height : 200px;"  required><?php echo htmlspecialchars($data['descripcion']); ?></textarea>
                </div>
                <div style="color: orange" id="info2"></div>
                          <script type="text/javascript">
                                            function limita(elEvento, maximoCaracteres) {
                                              var elemento = document.getElementById("texto");

                                              // Obtener la tecla pulsada
                                              var evento = elEvento || window.event;
                                              var codigoCaracter = evento.charCode || evento.keyCode;
                                              // Permitir utilizar las teclas con flecha horizontal
                                              if(codigoCaracter == 37 || codigoCaracter == 39) {
                                                return true;
                                              }

                                              // Permitir borrar con la tecla Backspace y con la tecla Supr.
                                              if(codigoCaracter == 8 || codigoCaracter == 46) {
                                                return true;
                                              }
                                              else if(elemento.value.length >= maximoCaracteres ) {
                                                return false;
                                              }
                                              else {
                                                return true;
                                              }
                                            }

                                            function actualizaInfo(maximoCaracteres) {
                                              var elemento = document.getElementById("texto");
                                              var info = document.getElementById("info");

                                              if(elemento.value.length >= maximoCaracteres ) {
                                                info2.innerHTML = "Máximo "+maximoCaracteres+" caracteres";
                                              }
                                              else {
                                               info2.innerHTML = "Puedes escribir hasta "+(maximoCaracteres-elemento.value.length)+" caracteres adicionales";
                                              }
                                            }
                                      </script>
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Estado  </label>
                <div class="col-sm-8">
                 
                  <fieldset id="group1">
                    <input type="radio" name="gender" value="0" <?php if ($data['estado'] == '0') echo 'checked="checked"'; ?> > Inactivo<br>
                    <input type="radio" name="gender" value="1" <?php if ($data['estado']  == '1') echo 'checked="checked"'; ?> > Activo
                  </fieldset>
                </div>                
              </div>


              <div class="form-group">
                <label class="col-sm-1 control-label">Imagen</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="image" autocomplete="off">
                  <br>
                  <img src="../images/notificacion/<?php echo $data['imagen']; ?>" height="150">
                  <br>
                <?php echo $data['imagen']; ?><br>
                <?php echo"<label style='color:red'><b> Tamaño maximo 1 MB !!</b></label>"?>
                </div>

              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=notificacion" class="btn btn-default btn-reset">Cancelar</a>
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
////Add 
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


?>
