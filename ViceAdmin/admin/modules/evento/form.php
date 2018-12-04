 <?php  
if ($_GET['form']=='add') { ?> 
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Agregar Evento
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=evento"> Evento </a></li>
      <li class="active"> Agregar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/evento/proses.php?act=insert" method="POST" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-1 control-label">Nombre Evento</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="nombre" autocomplete="off" placeholder="Nombre Evento" required>
                </div>
              </div>
              
              <br>
              <div class="form-group">
                <label class="col-sm-1 control-label">Descripcion</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="descripcion" autocomplete="off" placeholder="Descripcion Evento" required>
                </div>
              </div>
              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Tipo Evento</label>
                <div class="col-sm-8">
                  <select style="width: 795px" name="selectTipo" required  title="Seleccione">
                    <option>-Seleccione-</option>
                    <?php
                    $query = sqlsrv_query($mysqli, "SELECT id_TipoEv,descripcion_TipoEv
                    FROM  tipoEventoBE ORDER BY id_TipoEv DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){

                    echo "<option value=";
                    echo $data['id_TipoEv'];
                    echo ">";
                   echo $data['descripcion_TipoEv']; 
                    echo "</option>";
                    }
                    ?>
                    ?>
                  </select>
                </div>
              </div>
              <br>

              <div class="form-group">

                <label class="col-sm-1 control-label">Duracion Evento</label>
                <div class="col-sm-8">
                  <input placeholder="Duracion Evento" type="text" class="form-control" name="duracion" autocomplete="off" required>
                </div>
              </div>
              <br>
              <div class="form-group">
                <label class="col-sm-1 control-label">Fecha Inicio</label>
                <div class="col-sm-8">
                  <input  type="date" class="form-control" name="fecha_Inicio" autocomplete="off" required>
                </div>
              </div>
              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Fecha Fin</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="fecha_Fin" autocomplete="off" required>
                </div>
              </div>
              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Hora Inicio</label>
                <div class="col-sm-8">
                  <input type="time" class="form-control" name="horaInicio" autocomplete="off" required>
                </div>
              </div>
              <br>
              
              <div class="form-group">
                <label class="col-sm-1 control-label">Hora Fin</label>
                <div class="col-sm-8">
                  <input type="time" class="form-control" name="horaFin" autocomplete="off" required>
                </div>
              </div>
              <br>
              
              <div class="form-group">
                <label class="col-sm-1 control-label">Costo General Sin Certificado</label>
                <div class="col-sm-8">
                  <input placeholder="max 1000.0" type="number" min="0.00" max="1000.00" step="0.01" class="form-control" name="cgsn" autocomplete="off" required>
                </div>
              </div>
              <br>
              
              <div class="form-group">
                <label class="col-sm-1 control-label">Costo General Conn Certificado</label>
                <div class="col-sm-8">
                  <input placeholder="max 1000.0" type="number" min="0.00" max="1000.00" step="0.01" class="form-control" name="cgcn" autocomplete="off" required>
                </div>
              </div>
              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Costo Alumno Con Certificado</label>
                <div class="col-sm-8">
                  <input placeholder="max 1000.0"  type="number" min="0.00" max="1000.00" step="0.01" class="form-control" name="cgan" autocomplete="off" required>
                </div>
              </div>
              <br>
              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label" >Imagen</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="image" autocomplete="off" >
                  <?php echo"<h4 style='color:red'><b> Tamaño maximo 1 MB !!</b></h4>"?>
                </div>
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=evento" class="btn btn-default btn-reset">Cancelar</a>
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
     $query = sqlsrv_query($mysqli, "SELECT * FROM eventoBE INNER JOIN tipoEventoBE ON eventoBE.tipo_Evento = tipoEventoBE.id_TipoEv where id_Evento='$_GET[id]' ORDER BY id_Evento DESC")
                                            or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));
            // almacena en un array data
          $data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
    }
?>
  <!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Editar Convocatoria
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=evento"> Evento</a></li>
      <li class="active"> Editar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/evento/proses.php?act=update" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              
              <input type="hidden" name="id_Evento" value="<?php echo $data['id_Evento']; ?>">

              <div class="form-group">
                <label class="col-sm-1 control-label">Nombre Evento</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="nombre" autocomplete="off" placeholder="Nombre Evento" value="<?php echo $data['nombre_Evento']; ?>" required>
                </div>
              </div>
              
              <br>
              <div class="form-group">
                <label class="col-sm-1 control-label">Descripcion</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="descripcion" value="<?php echo $data['descripcion_Evento']; ?>" autocomplete="off" placeholder="Descripcion Evento" required>
                </div>
              </div>
              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Tipo Evento</label>
                  

                <div class="col-sm-8">
                  <select style="width: 795px" required name="selectTipo"  title="Seleccione">
                    <?php
                    $gg=$data['id_TipoEv'];
                    /*<option value="<?php $data['tipo_Evento']; ?>"><?php echo $data['descripcion_TipoEv']; ?></option>*/
                    $query = sqlsrv_query($mysqli, "SELECT id_TipoEv,descripcion_TipoEv
                    FROM  tipoEventoBE where id_TipoEv='$gg' ORDER BY id_TipoEv DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($wp  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    echo "<option value=";
                    echo $wp['id_TipoEv'];
                    echo ">";
                   echo $wp['descripcion_TipoEv']; 
                    echo "</option>";
                    }

                    ?>

                    
                    <?php
                    /*<option value="<?php $data['tipo_Evento']; ?>"><?php echo $data['descripcion_TipoEv']; ?></option>*/
                    $query = sqlsrv_query($mysqli, "SELECT id_TipoEv,descripcion_TipoEv
                    FROM  tipoEventoBE ORDER BY id_TipoEv DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($data2  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    echo "<option value=";
                    echo $data2['id_TipoEv'];
                    echo ">";
                   echo $data2['descripcion_TipoEv']; 
                    echo "</option>";
                    }

                    ?>

                  </select>
                </div>
              </div>
              <br>

              <div class="form-group">

                <label class="col-sm-1 control-label">Duracion Evento</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="duracion" autocomplete="off" placeholder="Duracion Evento"  value="<?php echo $data['duracion_Evento']; ?>" required>            
                </div>
              </div>
              <br>
              <div class="form-group">
                <label class="col-sm-1 control-label">Fecha Inicio</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control"  name="fecha_Inicio" autocomplete="off" value="<?php echo $data['fecInicio_Evento']; ?>" >
                </div>
              </div>
              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Fecha Fin</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control"  name="fecha_Fin" value="<?php echo $data['fecFin_Evento']; ?>"  autocomplete="off">
                </div>
              </div>
              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Hora Inicio</label>
                <div class="col-sm-8">
                  <input type="time" class="form-control" name="horaInicio" value="<?php echo $data['horaInicio_Evento']; ?>"  autocomplete="off" required>
                </div>
              </div>
              <br>
              
              <div class="form-group">
                <label class="col-sm-1 control-label">Hora Fin</label>
                <div class="col-sm-8">
                  <input type="time" class="form-control" name="horaFin" value="<?php echo $data['horaFin_Evento']; ?>"  autocomplete="off" required>
                </div>
              </div>
              <br>
              
              <div class="form-group">
                <label class="col-sm-1 control-label">Costo General Sin Certificado</label>
                <div class="col-sm-8">
                  <input placeholder="max 1000.0" type="number" min="0.00" max="1000.00"  step="0.01"  class="form-control" name="cgsn" autocomplete="off" value="<?php echo $data['cstGSnCertificado_Evento']; ?>"  required>
                </div>
              </div>
              <br>
              
              <div class="form-group">
                <label class="col-sm-1 control-label">Costo General Con Certificado</label>
                <div class="col-sm-8">
                  <input placeholder="max 1000.0" type="number" min="0.00" max="1000.00" step="0.01" class="form-control" name="cgcn" autocomplete="off" value="<?php echo $data['cstGCnCertificado_Evento']; ?>" required>
                </div>
              </div>
              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Costo Alumno Con Certificado</label>
                <div class="col-sm-8">
                  <input placeholder="max 1000.0"  type="number" min="0.00" max="1000.00" step="0.01" class="form-control" name="cgan" autocomplete="off" value="<?php echo $data['cstFCnCertificado_Evento']; ?>" required>
                </div>
              </div>
              <br>
              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Imagen</label>
                <div class="col-sm-8">
                  <input style="height:35px" type="file" name="image" autocomplete="off">
                  <br>
                  <img src="../images/evento/<?php echo $data['imagen_Evento']; ?>" height="150">
                  <br>
                <?php echo $data['imagen_Evento']; ?><br>
                <?php echo"<label style='color:red'><b> Tamaño maximo 1 MB !!</b></label>"?>
                </div>

              </div>


            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=evento" class="btn btn-default btn-reset">Cancelar</a>
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

elseif ($_GET['form']=='addTipo') { 

?>
<!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Tipo Evento
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=evento"> Evento </a></li>
      <li class="active">Eventos </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
            <form role="form" class="form-horizontal" action="modules/evento/proses.php?act=insertTipo" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-1 control-label">Descripcion</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="descripcion" autocomplete="off" required>
                </div>                
              </div>
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=evento" class="btn btn-default btn-reset">Cancelar</a>
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
                <th class="center">Descripcion Evento</th>
                <th class="center">Acciones</th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;

            // funciones de consulta para mostrar los datos en la tabla 
           /* $query = sqlsrv_query($mysqli, "SELECT * FROM eventoBE ORDER BY id_Evento DESC")
                                            or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));*/
            
$query = sqlsrv_query($mysqli, "SELECT * FROM tipoEventoBE ORDER BY id_TipoEv DESC")
                                            or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));
            // almacena en un array data
            while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) { 
              // mostrar los datos
              echo "<tr>
                      <td width='40' class='center'>$no</td>
                      <td width='150'>$data[descripcion_TipoEv]</td>
                      <td class='center' width='80'>
                        <div>
                          
                          ";
            ?>
                          
                          <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" href="modules/evento/proses.php?act=deleteTipo&id_TipoEv=<?php echo $data['id_TipoEv'];?>" onclick="return confirm('Estas seguro que quieres eliminar ?');">
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
<?php
}   
elseif ($_GET['form']=='addDet') { 

?>
<!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Evento Detalle

    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=evento"> Evento </a></li>
      <li class="active">Evento Detalle </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
            <form role="form" class="form-horizontal" action="modules/evento/proses.php?act=insertDet" method="POST" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-1 control-label">Descripcion</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="descripcion" autocomplete="off" required>
                </div>                
              </div>

              <div class="form-group">
                <a class="btn btn-default  pull-right" href="?module=form_evento&form=addPon">
                <i class="fa fa-plus"></i> Ponente
                </a>
                <label class="col-sm-1 control-label">Ponente</label>
                <div class="col-sm-8">
                  <select style="width: 795px" name="selectPon" required  title="Seleccione">
                    <option>-Seleccione-</option>
                    <?php
                    $query = sqlsrv_query($mysqli, "SELECT id_Ponente,nombres_Ponente,apellidos_Ponente FROM  ponenteBE ORDER BY id_Ponente DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){

                    echo "<option value=";
                    echo $data['id_Ponente'];
                    echo ">";
                   echo $data['nombres_Ponente'].''.$data['apellidos_Ponente']; 
                    echo "</option>";
                    }
                    ?>
                    ?>
                  </select>
                </div>
              </div>
              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Evento</label>
                <div class="col-sm-8">
                  <select style="width: 795px" name="selectEvento" required  title="Seleccione">
                    <option>-Seleccione-</option>
                    <?php
                    $query = sqlsrv_query($mysqli, "SELECT id_Evento,nombre_Evento FROM  eventoBE ORDER BY id_Evento DESC;") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){

                    echo "<option value=";
                    echo $data['id_Evento'];
                    echo ">";
                   echo $data['nombre_Evento']; 
                    echo "</option>";
                    }
                    ?>
                  </select>
                </div>
              </div>
              

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=evento" class="btn btn-default btn-reset">Cancelar</a>
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
                <th class="center">Descripcion</th>
                <th class="center">Ponente</th>
                <th class="center">Evento</th>
                <th class="center">Acciones</th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;

  $query = sqlsrv_query($mysqli, "SELECT id_EventoDet as id,descripcion_EventoDet,ponente_EventoDet,evento_EventoDet,eventoDetalleBE.id_EventoDet, EventoBE.nombre_Evento,eventoDetalleBE.id_EventoDet,ponenteBE.nombres_Ponente,apellidos_Ponente
FROM eventoDetalleBE INNER JOIN EventoBE ON eventoDetalleBE.evento_EventoDet = eventoBE.id_Evento JOIN ponenteBE ON eventoDetalleBE.ponente_EventoDet=ponenteBE.id_Ponente ORDER BY id DESC")
                                            or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));
            // almacena en un array data
            while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) { 
              // mostrar los datos
              echo "<tr>
                      <td width='40' class='center'>$no</td>
                      <td width='150'>$data[descripcion_EventoDet]</td>
                      <td width='150'>$data[nombres_Ponente], $data[apellidos_Ponente]</td>
                      <td width='150'>$data[nombre_Evento]</td>
                      <td class='center' width='80'>
                        <div>
                          <a data-toggle='tooltip' data-placement='top' title='Editar' style='margin-right:5px' class='btn btn-warning btn-sm' href='?module=form_evento&form=editDet&id=$data[id_EventoDet]'>
                              <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                          </a>
                          ";
            ?>
                          
                          <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" href="modules/evento/proses.php?act=deleteDet&id_EventoDet=<?php echo $data['id_EventoDet'];?>" onclick="return confirm('Estas seguro que quieres eliminar ?');">
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
<?php
}  

elseif ($_GET['form']=='editDet') { 
  if (isset($_GET['id'])) {

      // funcion de consulta para mostrar los datos de la tabla convocatoria
     $query = sqlsrv_query($mysqli, "SELECT * FROM eventoDetalleBE INNER JOIN EventoBE ON eventoDetalleBE.evento_EventoDet = eventoBE.id_Evento JOIN ponenteBE ON eventoDetalleBE.ponente_EventoDet=ponenteBE.id_Ponente where id_EventoDet='$_GET[id]';")
                                            or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));
            // almacena en un array data
          $data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
    } 
?>
<!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Editar Evento Detalle
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=evento"> Evento</a></li>
      <li class="active"> Editar Evento Detalle </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/evento/proses.php?act=updateDet" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              
              <input type="hidden" name="id_EventoDet" value="<?php echo $data['id_EventoDet']; ?>">
              <div class="form-group">
                <label class="col-sm-1 control-label">Descripcion </label>

                <div class="col-sm-8">
                  <input type="text" class="form-control" name="descripcion" value="<?php echo $data['descripcion_EventoDet']?>" autocomplete="off" placeholder="Descripcion Evento Detalle" required>
                </div>
              </div>
              <br>

              <div class="form-group">
                <label class="col-sm-1 control-label">Ponente</label>
                  

                <div class="col-sm-8">
                  <select style="width: 795px" required name="selectPon"  title="Seleccione">
                    <?php
                    $ss=$data['id_Ponente'];
                    $query = sqlsrv_query($mysqli, "SELECT id_Ponente,nombres_Ponente,apellidos_Ponente FROM  ponenteBE where id_Ponente='$ss' ORDER BY id_Ponente DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($exp  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    echo "<option value=";
                    echo $exp['id_Ponente'];
                    echo ">";
                   echo $exp['nombres_Ponente'].''.$exp['apellidos_Ponente']; 
                    echo "</option>";
                    }
                    ?>

                    <?php
                    $query = sqlsrv_query($mysqli, "SELECT id_Ponente,nombres_Ponente,apellidos_Ponente FROM  ponenteBE ORDER BY id_Ponente DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($data2  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    echo "<option value=";
                    echo $data2['id_Ponente'];
                    echo ">";
                   echo $data2['nombres_Ponente'].''.$data2['apellidos_Ponente']; 
                    echo "</option>";
                    }
                    ?>
                  </select>
                </div>
              </div>
              <br>

               <div class="form-group">
                <label class="col-sm-1 control-label">Evento</label>
                <div class="col-sm-8">
                  <select onclick="Seleccione" style="width: 795px"  name="selectEvento"  title="Seleccione">
                    <?php
                    $dd=$data['id_Evento'];
                    $query = sqlsrv_query($mysqli, "SELECT * FROM  eventoBE where id_Evento='$dd' ORDER BY id_Evento DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($o  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    echo "<option value=";
                    echo $o['id_Evento'];
                    echo ">";
                   echo $o['nombre_Evento']; 
                    echo "</option>";
                    }
                    ?>
                   

                    <?php
                    $b=$data['id_Evento'];
                    $query = sqlsrv_query($mysqli, "SELECT id_Evento,nombre_Evento FROM  eventoBE  ORDER BY id_Evento DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($data2  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    echo "<option value=";
                    echo $data2['id_Evento'];
                    echo ">";
                   echo $data2['nombre_Evento']; 
                    echo "</option>";
                    }

                    ?>

                  </select>
                </div>
              </div>
              <br>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=evento" class="btn btn-default btn-reset">Cancelar</a>
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
elseif ($_GET['form']=='addPon') { 
?>
<!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Ponente Detalle

    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=evento"> Evento </a></li>
      <li class="active">Ponente Detalle </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
            <form role="form" class="form-horizontal" action="modules/evento/proses.php?act=insertPon" method="POST" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-1 control-label">Nombres </label>
                <div class="col-sm-8">
                  <input placeholder="Nombres" type="text" class="form-control" name="nombre" autocomplete="off" required>
                </div>                
              </div>
              <div class="form-group">
                <label class="col-sm-1 control-label">Apellidos </label>
                <div class="col-sm-8">
                  <input placeholder="Apellidos" type="text" class="form-control" name="apellido" autocomplete="off" required>
                </div>                
              </div>
              <div class="form-group">
                <label class="col-sm-1 control-label">Doc Identificacion</label>
                <div class="col-sm-8">
                  <input placeholder="0-0-0-0-0-0-0-0-0-0-0-0-0-0-0"  min="0" max="999999999999999"  type="number" class="form-control" name="dni" autocomplete="off" required>
                </div>                
              </div>

              <div class="form-group">
                <a class="btn btn-success  pull-right" href="?module=form_evento&form=#">
                <i class="fa fa-plus"></i> Especialidad
                </a>
                <label class="col-sm-1 control-label">Especialidad</label>
                <div class="col-sm-8">
                  <select style="width: 795px" name="selectEsp" required  title="Seleccione">
                    <option>-Seleccione-</option>
                    <?php
                    // 
                    $query = sqlsrv_query($mysqli, "SELECT * FROM  especialidadBE ORDER BY id_Espe DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){

                    echo "<option value=";
                    echo $data['id_Espe'];
                    echo ">";
                   echo $data['descripcion_Espe']; 
                    echo "</option>";
                    }
                    ?>
                    ?>
                  </select>
                </div>
              </div>
              <br>

              <div class="form-group">
                <a class="btn btn-success  pull-right" href="?module=form_evento&form=#">
                <i class="fa fa-plus"></i> Universidad
                </a>
                <label class="col-sm-1 control-label">Universidad</label>
                <div class="col-sm-8">
                  <select style="width: 795px" name="selectUni" required  title="Seleccione">
                    <option>-Seleccione-</option>
                    <?php
                    $query = sqlsrv_query($mysqli, "SELECT * FROM universidadBE ORDER BY id_Uni DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){

                    echo "<option value=";
                    echo $data['id_Uni'];
                    echo ">";
                   echo $data['nombre_Uni']; 
                    echo "</option>";
                    }
                    ?>
                  </select>
                </div>
              </div>
              <BR>
              <div class="form-group">
                <label class="col-sm-1 control-label">Fecha Nac</label>
                <div class="col-sm-8">
                  <input placeholder="00/00/0000" type="date"  class="form-control" name="fech_nac" autocomplete="off" required>
                </div>                
              </div>
              <div class="form-group">
                <label class="col-sm-1 control-label">E-mail</label>
                <div class="col-sm-8">
                  <input placeholder="******@****.**" type="text" class="form-control" name="correo" autocomplete="off" required>
                </div>                
              </div>
              <div class="form-group">
                <label class="col-sm-1 control-label">Telefono</label>
                <div class="col-sm-8">
                  <input placeholder="Telefono de Contacto" type="text" class="form-control" name="telefono" autocomplete="off" required>
                </div>                
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit"  class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=evento" class="btn btn-default btn-reset">Cancelar</a>
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
                <th class="center">Nombres</th>
                <th class="center">Apellidos</th>
                <th class="center">Doc Indent</th>
                <th class="center">Especialidad</th>
                <th class="center">Universidad Procedencia</th>
                <th class="center">Fecha de Nac</th>
                <th class="center">E-mail</th>
                <th class="center">Telefono</th>
                <th class="center">Acciones</th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;

  $query = sqlsrv_query($mysqli, "SELECT * FROM ponenteBE INNER JOIN especialidadBE ON ponenteBE.especialidad_Ponente = especialidadBE.id_Espe JOIN universidadBE ON ponenteBE.univProc_Ponente=universidadBE.id_Uni ORDER BY id_Ponente DESC")
                                            or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));
            // almacena en un array data
            while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) { 
              // mostrar los datos
              echo "<tr>
                      <td width='40' class='center'>$no</td>
                      <td width='150'>$data[nombres_Ponente]</td>
                      <td width='150'>$data[apellidos_Ponente]</td>
                      <td width='150'>$data[dni_Ponente]</td>
                      <td width='150'>$data[descripcion_Espe]</td>
                      <td width='150'>$data[nombre_Uni]</td>
                      <td width='150'>$data[fecNac_Ponente]</td>
                      <td width='150'>$data[correo_Ponente]</td>
                      <td width='150'>$data[telefono_Ponente]</td>
                      <td class='center' width='80'>
                        <div>
                          <a data-toggle='tooltip' data-placement='top' title='Editar' style='margin-right:5px' class='btn btn-warning btn-sm' href='?module=form_evento&form=editPon&id=$data[id_Ponente]'>
                              <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                          </a>
                          ";
            ?>
                          
                          <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" href="modules/evento/proses.php?act=deletePon&id_Ponente=<?php echo $data['id_Ponente'];?>" onclick="return confirm('Estas seguro que quieres eliminar ?');">
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
<?php
}  

?>