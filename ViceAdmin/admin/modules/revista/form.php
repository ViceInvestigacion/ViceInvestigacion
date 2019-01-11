 <?php  
if ($_GET['form']=='add') { ?> 
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-plus"></i> Agregar Revista
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=revista"> Revista </a></li>
      <li class="active"> Agregar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/revista/proses.php?act=insert" method="POST" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-1 control-label">Volumen</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="volumen" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Nùm Revista</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" name="numero" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Año</label>
                <div class="col-sm-8">
                   <input type="date" class="form-control" name="anio" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <a class="btn btn-success pull-right" href="?module=form_revista&form=addTipo">
                <i class="fa fa-plus"></i> Tipo Revista
                </a>
                <label class="col-sm-1 control-label">Tipo Revista</label>
                <div class="col-sm-8">
                  <select style="width: 795px" name="selectTipo" required  title="Seleccione">
                    <option>-Seleccione-</option>
                    <?php
                    $query = sqlsrv_query($mysqli, "SELECT * from tipoRevistaBE order by id_tipoRevista desc") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){

                    echo "<option value=";
                    echo $data['id_tipoRevista'];
                    echo ">";
                   echo $data['nombre']; 
                    echo "</option>";
                    }
                    ?>
                    ?>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Imagen Revista</label>
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
                  <a href="?module=revista" class="btn btn-default btn-reset">Cancelar</a>
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
      $query = sqlsrv_query($mysqli, "SELECT * from revistaBE inner join tipoRevistaBE on
  tipoRevistaBE.id_tipoRevista=revistaBE.id_tipoReRevista WHERE id_revista='$_GET[id]'") 
                                      or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
      $data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
    }
?>
  <!-- form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Editar Revista
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=revista"> Revista </a></li>
      <li class="active"> Editar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/revista/proses.php?act=update" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              
              <input type="hidden" name="id_revista" value="<?php echo $data['id_revista']; ?>">


              <div class="form-group">
                <label class="col-sm-1 control-label">Volumen</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="volumen" autocomplete="off" value="<?php echo $data['vol']; ?>" required>
                </div>
              </div>

              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Num Revista</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" name="numero" autocomplete="off" value="<?php echo $data['num']; ?>" required>
                </div>
              </div>

              <br>
              
              <div class="form-group">
                <label class="col-sm-1 control-label">Año</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="anio" autocomplete="off" value="<?php echo $data['anio']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Tipo Revista</label>
                  

                <div class="col-sm-8">
                  <select style="width: 795px" required name="selectTipo"  title="Seleccione">
                    <?php
                    $gg=$data['id_tipoReRevista'];
                    /*<option value="<?php $data['tipo_Evento']; ?>"><?php echo $data['descripcion_TipoEv']; ?></option>*/
                    $query = sqlsrv_query($mysqli, "SELECT * FROM  tipoRevistaBE where id_tipoRevista='$gg' ORDER BY id_tipoRevista DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($wp  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    echo "<option value=";
                    echo $wp['id_tipoRevista'];
                    echo ">";
                   echo $wp['nombre']; 
                    echo "</option>";
                    }

                    ?>

                    
                    <?php
                    /*<option value="<?php $data['tipo_Evento']; ?>"><?php echo $data['descripcion_TipoEv']; ?></option>*/
                    $query = sqlsrv_query($mysqli, "SELECT * FROM  tipoRevistaBE ORDER BY id_tipoRevista DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($data2  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    echo "<option value=";
                    echo $data2['id_tipoRevista'];
                    echo ">";
                   echo $data2['nombre']; 
                    echo "</option>";
                    }

                    ?>

                  </select>
                </div>
              </div>


              <div class="form-group">
                <label class="col-sm-1 control-label">Imagen</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="image" autocomplete="off">
                  <br>
                  <img src="../images/revista/<?php echo $data['imagenRev']; ?>" height="150">
                  <br>
                <?php echo $data['imagenRev']; ?><br>
                <?php echo"<label style='color:red'><b> Tamaño maximo 1 MB !!</b></label>"?>
                </div>

              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=revista" class="btn btn-default btn-reset">Cancelar</a>
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
////Add TipoEvento
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET['form']=='addTipo') { 

?>
<!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Tipo Revista
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=revista"> Revista </a></li>
      <li class="active">Tipo Revista </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
            <form role="form" class="form-horizontal" action="modules/revista/proses.php?act=insertTipo" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-1 control-label">Nombre</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="nombre" autocomplete="off" required>
                </div>                
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
                <label class="col-sm-1 control-label" >Imagen</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="Tipoimage" autocomplete="off" >
                  <?php echo"<label style='color:red'><b> Tamaño maximo 1 MB !!</b></label>"?>
                </div>
              </div>


            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=form_revista&form=add" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
          <div class="box box-primary">
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th class="center">No.</th>
                <th class="center">Nombre Tipo</th>
                <th class="center">Imagen</th>
                <th class="center">Estado</th>
                <th class="center">Acciones</th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;

            // funciones de consulta para mostrar los datos en la tabla       
$query = sqlsrv_query($mysqli, "SELECT * FROM tipoRevistaBE ORDER BY id_tipoRevista DESC")
                                            or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));
            // almacena en un array data
            while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) { 
              if ($data['estado']<1)
                   {
                        $cond='<b><span style="color: red; text-align: center">Inactivo</apan>';
                       
                   }
                   elseif ($data['estado']==1) {
                        $cond='<b><span style="color: green; text-align: center">Activo</apan>';
                       }
              // mostrar los datos
              echo "<tr>
                      <td width='40' class='center'>$no</td>
                      <td width='150'>$data[nombre]</td>
                      <td width='200' class='center'>
                        <img  src='../images/tiporev/$data[imagenTipo]' height='150' alt='$data[imagenTipo]'>
                      </td>
                      <td width='150'>$cond</td>
                      <td class='center' width='80'>
                        <div>
                           <a data-toggle='tooltip' data-placement='top' title='Editar' style='margin-right:5px' class='btn btn-warning btn-sm' href='?module=form_revista&form=editTipo&id=$data[id_tipoRevista]'>
                              <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                          </a>
                          ";
            ?>
                          
                          <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" href="modules/revista/proses.php?act=deleteTipo&id_tipoRevista=<?php echo $data['id_tipoRevista'];?>" onclick="return confirm('Estas seguro que quieres eliminar ?');">
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
  </section><!-- /.content -->
<!--/. -->
<?php
}  
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET['form']=='editTipo') { 
  if (isset($_GET['id'])) {

      // funcion de consulta para mostrar los datos de la tabla convocatoria
     $query = sqlsrv_query($mysqli, "SELECT * FROM tipoRevistaBE  where id_tipoRevista='$_GET[id]';")
                                            or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));
            // almacena en un array data
          $data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
    } 
?>
<!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Editar Tipo Revista
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=revista"> Revista</a></li>
       <li><a href="?module=form_revista&form=addTipo"> Tipo Revista </a></li>
      <li class="active"> Editar Tipo Revista </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/revista/proses.php?act=updateTipo" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              
              <input type="hidden" name="id_tipoRevista" value="<?php echo $data['id_tipoRevista']; ?>">
              <div class="form-group">
                <label class="col-sm-1 control-label">Nombre</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="nombre" value="<?php echo $data['nombre']?>" autocomplete="off" placeholder="Nombre tipo" required>
                </div>
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
                  <input style="height:35px" type="file" name="Tipoimage" autocomplete="off">
                  <br>
                  <img src="../images/tiporev/<?php echo $data['imagenTipo']; ?>" height="150">
                  <br>
                <?php echo $data['imagenTipo']; ?><br>
                <?php echo"<label style='color:red'><b> Tamaño maximo 1 MB !!</b></label>"?>
                </div>

              </div>


            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=form_revista&form=addTipo" class="btn btn-default btn-reset">Cancelar</a>
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
//////////////////////////////////////////////////////////////////////////////////////////////////

?>