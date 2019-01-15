 <?php  
if ($_GET['form']=='add') { ?> 
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-plus"></i> Agregar Nosotros
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
                <div class="col-sm-8" id="info">
                  <textarea id="texto" class="form-control" onkeypress="return limita(event, 500);" onkeyup="actualizaInfo(500)" placeholder="Maximo 500 caracteres..." maxlength="500" name="descripcion" autocomplete="off" style="max-width: 100%; max-height : 150px;"  required></textarea>
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
                <label class="col-sm-1 control-label">Vision</label>
                <div class="col-sm-8" id="info2">
                  <textarea id="texto2" class="form-control" onkeypress="return limita2(event, 500);" onkeyup="actualizaInfo2(500)" placeholder="Maximo 500 caracteres..." maxlength="500" name="vision" autocomplete="off" style="max-width: 100%; max-height : 150px;"  required></textarea>
                </div>
                 <div style="color: green" id="infoo"></div>
                            <script type="text/javascript">
                                  function limita2(elEvento, maximoCaracteres) {
                                    var elemento = document.getElementById("texto2");

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

                                  function actualizaInfo2(maximoCaracteres) {
                                    var elemento = document.getElementById("texto2");
                                    var info2 = document.getElementById("info2");

                                    if(elemento.value.length >= maximoCaracteres ) {
                                      infoo.innerHTML = "Máximo "+maximoCaracteres+" caracteres";
                                    }
                                    else {
                                     infoo.innerHTML = "Puedes escribir hasta "+(maximoCaracteres-elemento.value.length)+" caracteres adicionales";
                                    }
                                  }
                            </script>


              </div>


              <div class="form-group">
                <label class="col-sm-1 control-label">Mision</label>
                <div class="col-sm-8" id="info3">
                  <textarea id="texto3" class="form-control" onkeypress="return limita3(event, 500);" onkeyup="actualizaInfo3(500)" placeholder="Maximo 500 caracteres..." maxlength="500" name="mision" autocomplete="off" style="max-width: 100%; max-height : 150px;"  required></textarea>
                </div>
                 <div style="color: skyblue" id="infooo"></div>
                 <script type="text/javascript">
                                  function limita3(elEvento, maximoCaracteres) {
                                    var elemento = document.getElementById("texto3");

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

                                  function actualizaInfo3(maximoCaracteres) {
                                    var elemento = document.getElementById("texto3");
                                    var info2 = document.getElementById("info3");

                                    if(elemento.value.length >= maximoCaracteres ) {
                                      infooo.innerHTML = "Máximo "+maximoCaracteres+" caracteres";
                                    }
                                    else {
                                     infooo.innerHTML = "Puedes escribir hasta "+(maximoCaracteres-elemento.value.length)+" caracteres adicionales";
                                    }
                                  }
                            </script>
              </div>


              <div class="form-group">
                <label class="col-sm-1 control-label">Directorio</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="directorio" autocomplete="off" required>
                </div>
              </div>
              



              <div class="form-group">
                <label class="col-sm-1 control-label">Fecha</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="fecha" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Organigrama</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="image" autocomplete="off" >
                  <?php echo"<label style='color:red'><b> Tamaño maximo 3 MB !!</b></label>"?>
                </div>
              </div>

                            <div class="form-group">
                <label class="col-sm-1 control-label">Port 1</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="image1" autocomplete="off" >
                  <?php echo"<label style='color:red'><b> Tamaño maximo 2 MB !!</b></label>"?>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Port 2</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="image2" autocomplete="off" >
                  <?php echo"<label style='color:red'><b> Tamaño maximo 2 MB !!</b></label>"?>
                </div>
              </div>


              <div class="form-group">
                <label class="col-sm-1 control-label">Port 3</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="image3" autocomplete="off" >
                  <?php echo"<label style='color:red'><b> Tamaño maximo 2 MB !!</b></label>"?>
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
  <!-- form add data -->
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
                <div class="col-sm-8" id="info4">
                  <textarea id="texto4" class="form-control" onkeypress="return limita4(event, 500);" onkeyup="actualizaInfo4(500)" placeholder="Maximo 500 caracteres..." maxlength="500" name="descripcion" autocomplete="off" style="max-width: 100%; max-height : 150px;"  required><?php echo htmlspecialchars($data['descripcion_Nos']); ?></textarea>
                </div>
                <div style="color: orange" id="info5"></div>
                            <script type="text/javascript">
                                              function limita4(elEvento, maximoCaracteres) {
                                                var elemento = document.getElementById("texto4");

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

                                              function actualizaInfo4(maximoCaracteres) {
                                                var elemento = document.getElementById("texto4");
                                                var info4 = document.getElementById("info4");

                                                if(elemento.value.length >= maximoCaracteres ) {
                                                  info5.innerHTML = "Máximo "+maximoCaracteres+" caracteres";
                                                }
                                                else {
                                                 info5.innerHTML = "Puedes escribir hasta "+(maximoCaracteres-elemento.value.length)+" caracteres adicionales";
                                                }
                                              }
                                        </script>
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Vision</label>
                <div class="col-sm-8" id="info6">
                  <textarea id="texto6" class="form-control" onkeypress="return limita5(event, 500);" onkeyup="actualizaInfo5(500)" placeholder="Maximo 500 caracteres..." maxlength="500" name="vision" autocomplete="off" style="max-width: 100%; max-height : 150px;"  required><?php echo htmlspecialchars($data['vision_Nos']); ?></textarea>
                </div>
                                <div style="color: green" id="info7"></div>
                            <script type="text/javascript">
                                              function limita5(elEvento, maximoCaracteres) {
                                                var elemento = document.getElementById("texto6");

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

                                              function actualizaInfo5(maximoCaracteres) {
                                                var elemento = document.getElementById("texto6");
                                                var info6 = document.getElementById("info6");

                                                if(elemento.value.length >= maximoCaracteres ) {
                                                  info7.innerHTML = "Máximo "+maximoCaracteres+" caracteres";
                                                }
                                                else {
                                                 info7.innerHTML = "Puedes escribir hasta "+(maximoCaracteres-elemento.value.length)+" caracteres adicionales";
                                                }
                                              }
                                        </script>
              </div>

              
              <div class="form-group">
                <label class="col-sm-1 control-label">Mision</label>
                <div class="col-sm-8" id="info8">
                  <textarea id="texto7" class="form-control" onkeypress="return limita6(event, 500);" onkeyup="actualizaInfo6(500)" placeholder="Maximo 500 caracteres..." maxlength="500" name="mision" autocomplete="off" style="max-width: 100%; max-height : 150px;"  required><?php echo htmlspecialchars($data['mision_Nos']); ?></textarea>
                </div>
                                                <div style="color: skyblue" id="info9"></div>
                            <script type="text/javascript">
                                              function limita6(elEvento, maximoCaracteres) {
                                                var elemento = document.getElementById("texto7");

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

                                              function actualizaInfo6(maximoCaracteres) {
                                                var elemento = document.getElementById("texto7");
                                                var info8 = document.getElementById("info8");

                                                if(elemento.value.length >= maximoCaracteres ) {
                                                  info9.innerHTML = "Máximo "+maximoCaracteres+" caracteres";
                                                }
                                                else {
                                                 info9.innerHTML = "Puedes escribir hasta "+(maximoCaracteres-elemento.value.length)+" caracteres adicionales";
                                                }
                                              }
                                        </script>
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
                <?php echo"<label style='color:red'><b> Tamaño maximo 3 MB !!</b></label>"?>
                </div>

              </div>

                             <div class="form-group">
                <label class="col-sm-1 control-label">Portada 1</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="image1" autocomplete="off">
                  <br>
                  <img src="../images/about/portada/<?php echo $data['portada_Unos']; ?>" height="150">
                  <br>
                <?php echo $data['portada_Unos']; ?><br>
                <?php echo"<label style='color:red'><b> Tamaño maximo 2 MB !!</b></label>"?>
                </div>

              </div>

               <div class="form-group">
                <label class="col-sm-1 control-label">Portada 2</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="image2" autocomplete="off">
                  <br>
                  <img src="../images/about/portada/<?php echo $data['portada_Dnos']; ?>" height="150">
                  <br>
                <?php echo $data['portada_Dnos']; ?><br>
                <?php echo"<label style='color:red'><b> Tamaño maximo 2 MB !!</b></label>"?>
                </div>

              </div>

               <div class="form-group">
                <label class="col-sm-1 control-label">Portada 3</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="image3" autocomplete="off">
                  <br>
                  <img src="../images/about/portada/<?php echo $data['portada_Tnos']; ?>" height="150">
                  <br>
                <?php echo $data['portada_Tnos']; ?><br>
                <?php echo"<label style='color:red'><b> Tamaño maximo 2 MB !!</b></label>"?>
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