 <?php  
if ($_GET['form']=='add') { ?> 
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Agregar Proyecto
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=proyecto"> Proyecto </a></li>
      <li class="active"> Agregar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/proyecto/proses.php?act=insert" method="POST" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <a class="btn btn-info  pull-right" href="?module=form_proyecto&form=addPro">
                      <i class="fa fa-plus"></i> Proyecto
                      </a>
                <label class="col-sm-1 control-label">Proyecto</label>
                <div class="col-sm-8">
                  <select style="width: 795px" name="selectProy" required  title="Seleccione">
                    <option>-Seleccione-</option>
                    <?php
                    $query = sqlsrv_query($mysqli, "SELECT id_Proyecto,titulo_Proyecto FROM  proyectoBE ORDER BY id_Proyecto DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){

                    echo "<option value=";
                    echo $data['id_Proyecto'];
                    echo ">";
                   echo $data['titulo_Proyecto']; 
                    echo "</option>";
                    }
                    ?>
                    ?>
                  </select>
                </div>
              </div>
              <br>
        <div class="form-group">
                <a class="btn btn-info  pull-right" href="?module=form_proyecto&form=addFech">
                      <i class="fa fa-plus"></i> Actividad Fecha
                      </a>
                <label class="col-sm-1 control-label">Actividad y Fecha</label>
                <div class="col-sm-8">
                  <select style="width: 795px" name="selectFech" required  title="Seleccione">
                    <option>-Seleccione-</option>
                    <?php
                    $query = sqlsrv_query($mysqli, "SELECT * FROM  fechaEjeBE ORDER BY id_FE DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                  
                    echo "<option value=";
                    echo $data['id_FE'];
                    echo ">";
                   echo $data['actividad_FE'].'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.'&nbsp'.$data['fecha']; 
                    echo "</option>";
                    }
                    ?>
                    ?>
                  </select>
                </div>
              </div>
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=proyecto" class="btn btn-default btn-reset">Cancelar</a>
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
     $query = sqlsrv_query($mysqli, "SELECT * FROM fechaProyBE INNER JOIN proyectoBE ON fechaProyBE.proyecto_FP = proyectoBE.id_Proyecto INNER JOIN fechaEjeBE ON fechaProyBE.fechaEje_FP = fechaEjeBE.id_FE order by id_FP desc")
                                            or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));
            // almacena en un array data
          $data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
    }
?>
  <!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Editar Proyecto
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=proyecto"> Proyecto</a></li>
      <li class="active"> Editar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/proyecto/proses.php?act=update" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              
              <input type="hidden" name="id_FP" value="<?php echo $data['id_FP']; ?>">

              <div class="form-group">
                <label class="col-sm-1 control-label">Proyecto</label>
                  

                <div class="col-sm-8">
                  <select style="width: 795px" required name="selectProy"  title="Seleccione">
                    <?php
                    $gg=$data['id_Proyecto'];
                    /*<option value="<?php $data['tipo_Evento']; ?>"><?php echo $data['descripcion_TipoEv']; ?></option>*/
                    $query = sqlsrv_query($mysqli, "select id_Proyecto, titulo_Proyecto from proyectoBE where id_Proyecto='$gg'order by id_Proyecto desc") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($wp  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    echo "<option value=";
                    echo $wp['id_Proyecto'];
                    echo ">";
                   echo $wp['titulo_Proyecto']; 
                    echo "</option>";
                    }

                    ?>

                    
                    <?php
                    /*<option value="<?php $data['tipo_Evento']; ?>"><?php echo $data['descripcion_TipoEv']; ?></option>*/
                    $query = sqlsrv_query($mysqli, "SELECT id_Proyecto,titulo_Proyecto
                    FROM  proyectoBE ORDER BY id_Proyecto DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($data2  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    echo "<option value=";
                    echo $data2['id_Proyecto'];
                    echo ">";
                   echo $data2['titulo_Proyecto']; 
                    echo "</option>";
                    }

                    ?>

                  </select>
                </div>
              </div>
              <br>
          <div class="form-group">
                <label class="col-sm-1 control-label">Fecha Ejecucion</label>
                  

                <div class="col-sm-8">
                  <select style="width: 795px" required name="selectFech"  title="Seleccione">
                    <?php
                    $gg=$data['id_FE'];
                    /*<option value="<?php $data['tipo_Evento']; ?>"><?php echo $data['descripcion_TipoEv']; ?></option>*/
                    $query = sqlsrv_query($mysqli, "SELECT id_FE,actividad_FE,fecha
                    FROM  fechaEjeBE where id_FE='$gg' ORDER BY id_FE DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($wp  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    echo "<option value=";
                    echo $wp['id_FE'];
                    echo ">";
                   echo $wp['actividad_FE'].$wp['fecha']; 
                    echo "</option>";
                    }

                    ?>

                    
                    <?php
                    $query = sqlsrv_query($mysqli, "SELECT id_FE,actividad_FE,fecha
                    FROM  fechaEjeBE ORDER BY id_FE DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($data2  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    echo "<option value=";
                    echo $data2['id_FE'];
                    echo ">";
                   echo $data2['actividad_FE'].$data2['fecha']; 
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
                  <a href="?module=proyecto" class="btn btn-default btn-reset">Cancelar</a>
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
////Add Proyecto
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET['form']=='addPro') { 

?>
<!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Proyecto
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=proyecto"> Proyecto </a></li>
      <li class="active">Detalle </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
            <form role="form" class="form-horizontal" action="modules/proyecto/proses.php?act=insertPro" method="POST" enctype="multipart/form-data">

            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-1 control-label">Titulo</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="titulo" autocomplete="off" required>
                </div>                
              </div>
              
              <div class="form-group">
                <label class="col-sm-1 control-label">Descripcion</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="descripcion" autocomplete="off" required>
                </div>                
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Presupuesto</label>
                <div class="col-sm-8">
                  <input type="number" min="0" placeholder="0.00" step="0.001" class="form-control" name="presupuesto" autocomplete="off" required>
                </div>                
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">URL</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="enlace" autocomplete="off" required>
                </div>                
              </div>

              <div class="form-group">
                <a class="btn btn-info  pull-right" href="?module=form_proyecto&form=addEsc">
                <i class="fa fa-plus"></i> Escuela
                </a>
                <label class="col-sm-1 control-label">Escuela</label>
                  

                <div class="col-sm-8">
                  <select style="width: 795px" required name="selectEsc"  title="Seleccione">
                    <?php
                    /*<option value="<?php $data['tipo_Evento']; ?>"><?php echo $data['descripcion_TipoEv']; ?></option>*/
                    $query = sqlsrv_query($mysqli, "SELECT * from escuelaBE inner join facultadBE 
                    on escuelaBE.facultadId_Escuela=facultadBE.id_Facu 
                    order by id_Escuela desc") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($data2  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    echo "<option value=";
                    echo $data2['id_Escuela'];
                    echo ">";
                   echo $data2['nombre_Escuela'].'           '.'-'.'           '.$data2['nombre_Facu']; 
                    echo "</option>";
                    }

                    ?>

                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Estado</label>
                  

                <div class="col-sm-8">
                  <select style="width: 795px" required name="selectEstado"  title="Seleccione">
                    <option value="0">Desaprobado</option>
                    <option value="1">Proceso</option>
                    <option value="2">Aprobado</option>
                  </select>
                </div>
              </div>


            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=proyecto" class="btn btn-default btn-reset">Cancelar</a>
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
                <th class="center">Titulo</th>
                <th class="center">Descripcion</th>
                <th class="center">Escuela</th>
                <th class="center">Facultad</th>
                <th class="center">Presupuesto</th>
                <th class="center">Enlace</th>
                <th class="center">Estado</th>
                <th class="center">Acciones</th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;

            // funciones de consulta para mostrar los datos en la tabla       
$query = sqlsrv_query($mysqli, "SELECT * from proyectoBE inner join escuelaBE on proyectoBE.escuelaId_Proyecto = escuelaBE.id_Escuela inner join facultadBE on escuelaBE.facultadId_Escuela=facultadBE.id_Facu order by id_Proyecto desc ")
                                            or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));

            
            // almacena en un array data
            while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) 
            { 
             
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
                      <td width='150'>$data[nombre_Escuela]</td>
                      <td width='150'>$data[nombre_Facu]</td>
                      <td width='150'>$data[presupuesto_Proyecto]</td>
                      <td width='150'>$data[enlace_Proyecto]</td>
                      <td width='80' class='center'>$cond</td>
                      <td class='center' width='80'>
                        <div>
                           <a data-toggle='tooltip' data-placement='top' title='Editar' style='margin-right:5px' class='btn btn-warning btn-sm' href='?module=form_proyecto&form=editPro&id=$data[id_Proyecto]'>
                              <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                          </a>
                          ";
            ?>
                          
                          <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" href="modules/proyecto/proses.php?act=deletePro&id_Proyecto=<?php echo $data['id_Proyecto'];?>" onclick="return confirm('Desea Eliminar? - Primero verfique si el proyecto esta en uso');">
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
elseif ($_GET['form']=='editPro') { 
  if (isset($_GET['id'])) {

      // funcion de consulta para mostrar los datos de la tabla convocatoria
    /*
    SELECT * from proyectoBE inner join escuelaBE on proyectoBE.escuelaId_Proyecto = escuelaBE.id_Escuela inner join facultadBE on escuelaBE.facultadId_Escuela=facultadBE.id_Facu order by id_Proyecto desc

    */
     $query = sqlsrv_query($mysqli, "SELECT * from proyectoBE inner join escuelaBE on proyectoBE.escuelaId_Proyecto = escuelaBE.id_Escuela 
             inner join facultadBE on escuelaBE.facultadId_Escuela=facultadBE.id_Facu 
             where id_Proyecto='$_GET[id]' ")
                                            or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));
            // almacena en un array data
          $data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
    } 
?>
<!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Editar Proyecto
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=proyecto"> Proyecto</a></li>
       <li><a href="?module=form_proyecto&form=addPro"> Detalle Proyecto </a></li>
      <li class="active"> Editar Proyecto </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/proyecto/proses.php?act=updatePro" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              
              <input type="hidden" name="id_Proyecto" value="<?php echo $data['id_Proyecto']; ?>">

              <div class="box-body">
              <div class="form-group">
                <label class="col-sm-1 control-label">Titulo</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="titulo" value="<?php echo $data['titulo_Proyecto']?>" autocomplete="off" required>
                </div>                
              </div>
              
              <div class="form-group">
                <label class="col-sm-1 control-label">Descripcion</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="descripcion" value="<?php echo $data['descripcion_Proyecto']?>" autocomplete="off" required>
                </div>                
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Escuela</label>
                <div class="col-sm-8">
                  <select style="width: 795px" required name="selectEsc"  title="Seleccione">
                                       <?php
                    $ss=$data['id_Proyecto'];
                    $query = sqlsrv_query($mysqli, "SELECT * from escuelaBE inner join facultadBE 
                    on escuelaBE.facultadId_Escuela=facultadBE.id_Facu where id_Escuela='$ss'") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($exp  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    echo "<option value=";
                    echo $exp['id_Escuela'];
                    echo ">";
                   echo $exp['nombre_Escuela'].'           '.'-'.'           '.$exp['nombre_Facu']; 
                    echo "</option>";
                    }
                    ?>

                    <?php
                    /*<option value="<?php $data['tipo_Evento']; ?>"><?php echo $data['descripcion_TipoEv']; ?></option>*/
                    $query = sqlsrv_query($mysqli, "SELECT * from escuelaBE inner join facultadBE 
                    on escuelaBE.facultadId_Escuela=facultadBE.id_Facu 
                    order by id_Escuela desc") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($data2  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    echo "<option value=";
                    echo $data2['id_Escuela'];
                    echo ">";
                   echo $data2['nombre_Escuela'].'           '.'-'.'           '.$data2['nombre_Facu']; 
                    echo "</option>";
                    }

                    ?>

                  </select>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Presupuesto</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" name="presupuesto" value="<?php echo $data['presupuesto_Proyecto']?>" autocomplete="off" required>
                </div>                
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">URL</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="enlace" value="<?php echo $data['enlace_Proyecto']?>" autocomplete="off" required>
                </div>                
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Estado</label>
                <div class="col-sm-8">
                  <select style="width: 795px" required name="selectEstado"  title="Seleccione">
                    <?php
                    $ss=$data['id_Proyecto'];
                    $query = sqlsrv_query($mysqli, "SELECT * from proyectoBE  where id_Proyecto='$ss'") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($exp  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){

                    if ($exp['estado_Proyecto']<1)
                   {
                        $cond='<b><span style=" text-align: center">Desaprobado</apan>';
                       
                   }
                   elseif ($exp['estado_Proyecto']==1) {
                        $cond='<b><span style=" text-align: center">Proceso</apan>';
                       }
                 elseif($exp['estado_Proyecto']==2){
                        $cond='<b><span style=" text-align: center">Aprobado</apan>';
                        
                    }


                    echo "<option value=";
                    echo $exp['estado_Proyecto'];
                    echo ">";
                   echo $cond; 
                    echo "</option>";
                    }
                    ?>

                    <option value="0">Desaprobado</option>
                    <option value="1">Proceso</option>
                    <option value="2">Aprobado</option>

                  </select>
                </div>
              </div>


            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=form_proyecto&form=addPro" class="btn btn-default btn-reset">Cancelar</a>
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
/////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET['form']=='addFech') { 

?>
<!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Ejecucion Proyecto

    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=proyecto"> Proyecto </a></li>
      <li class="active">Ejecucion Detalle </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
            <form role="form" class="form-horizontal" action="modules/proyecto/proses.php?act=insertFech" method="POST" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-1 control-label">Actividad</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="actividad" autocomplete="off" required>
                </div>                
              </div>
              <div class="form-group">
                <label class="col-sm-1 control-label">Fecha</label>
                <div class="col-sm-8">
                  <input type="date" class="form-control" name="fecha" autocomplete="off" required>
                </div>                
              </div>
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=proyecto" class="btn btn-default btn-reset">Cancelar</a>
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
                <th class="center">Actividad</th>
                <th class="center">Fecha</th>
                <th class="center">Acciones</th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;

  $query = sqlsrv_query($mysqli, "SELECT * FROM fechaEjeBE  ORDER BY id_FE DESC")
          or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));
            // almacena en un array data
            while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) { 
              //$result = $data['fecha']->format('Y-m-d H:i:s');
              // mostrar los datos
              echo "<tr>
                      <td width='40' class='center'>$no</td>
                      <td width='150'>$data[actividad_FE]</td>
                      <td width='150' text-align='center'>$data[fecha]</td>
                      <td class='center' width='80'>
                        <div>
                          <a data-toggle='tooltip' data-placement='top' title='Editar' style='margin-right:5px' class='btn btn-warning btn-sm' href='?module=form_proyecto&form=editFech&id=$data[id_FE]'>
                              <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                          </a>
                          ";
            ?>
                          
                          <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" href="modules/proyecto/proses.php?act=deleteFech&id_FE=<?php echo $data['id_FE'];?>" onclick="return confirm('Estas seguro que quieres eliminar ?');">
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
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET['form']=='editFech') { 
  if (isset($_GET['id'])) {

      // funcion de consulta para mostrar los datos de la tabla convocatoria
     $query = sqlsrv_query($mysqli, "SELECT * FROM fechaEjeBE  where id_FE='$_GET[id]';")
                                            or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));
            // almacena en un array data
          $data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
        // $result = $data['fecha']->format('DD-MM-YYYY');
          //$obj_fecha = date_create_from_format('d-m-Y', $$data['fecha']);
    } 

?>
<!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Editar Ejecucion Proyecto
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=evento"> Proyecto</a></li>
       <li><a href="?module=form_proyecto&form=addFech"> Ejecuion Detalle </a></li>
      <li class="active"> Editar Ejecucion Proyecto </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/proyecto/proses.php?act=updateFech" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              
              <input type="hidden" name="id_FE" value="<?php echo $data['id_FE']; ?>">

              <div class="form-group">
                <label class="col-sm-1 control-label">Actividad </label>

                <div class="col-sm-8">
                  <input type="text" class="form-control" name="actividad" value="<?php echo $data['actividad_FE']?>" autocomplete="off" placeholder="Actividad" required>
                </div>
              </div>

            <div class="form-group">
                <label class="col-sm-1 control-label">Fecha</label>

                <div class="col-sm-8">
                  <input type="date" class="form-control" name="fecha" value="<?php echo $data['fecha']?>" autocomplete="off" placeholder="fecha" required>
                </div>
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=form_proyecto&form=addFech" class="btn btn-default btn-reset">Cancelar</a>
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
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET['form']=='addEsc') { 
?>
<!--  form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Escuela Detalle

    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=proyecto"> Proyectos </a></li>
      <li><a href="?module=form_proyecto&form=addPro"> Detalle Proyecto </a></li>
      <li class="active">Escuela Detalle </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
            <form role="form" class="form-horizontal" action="modules/proyecto/proses.php?act=insertEsc" method="POST" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-1 control-label">Nombre </label>
                <div class="col-sm-8">
                  <input placeholder="Nombre Escuela" type="text" class="form-control" name="nombre" autocomplete="off" required>
                  <div class="help-block with-errors alert-danger"></div>
                </div>                
              </div>

              <div class="form-group">
                <a class="btn btn-info  pull-right" href="?module=form_proyecto&form=addFac">
                <i class="fa fa-plus"></i> Facultad
                </a>
                <label class="col-sm-1 control-label">Facultad</label>
                <div class="col-sm-8">
                  <select style="width: 795px" name="selectFac" required  title="Seleccione">
                    <option>-Seleccione-</option>
                    <?php
                    // 
                    $query = sqlsrv_query($mysqli, "SELECT * FROM  facultadBE ORDER BY id_Facu DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){

                    echo "<option value=";
                    echo $data['id_Facu'];
                    echo ">";
                   echo $data['nombre_Facu']; 
                    echo "</option>";
                    }
                    ?>
                    ?>
                  </select>
                </div>
              </div>
              <br>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit"  class="btn btn-primary btn-submit" name="save" value="Guardar">

                  <a href="?module=form_proyecto&form=addPro" class="btn btn-default btn-reset">Cancelar</a>
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
                <th class="center">Nombre Escuela</th>
                <th class="center">Facultad</th>
                <th class="center">Acciones</th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;

  $query = sqlsrv_query($mysqli, "SELECT * from escuelaBE inner join facultadBE on escuelaBE.facultadId_Escuela=facultadBE.id_Facu order by id_Escuela desc")  or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));
            // almacena en un array data
            while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) { 
              // mostrar los datos
              echo "<tr>
                      <td width='40' class='center'>$no</td>
                      <td width='150'>$data[nombre_Escuela]</td>
                      <td width='150'>$data[nombre_Facu]</td>
                      <td class='center' width='80'>
                        <div>
                          <a data-toggle='tooltip' data-placement='top' title='Editar' style='margin-right:5px' class='btn btn-warning btn-sm' href='?module=form_proyecto&form=editEsc&id=$data[id_Escuela]'>
                              <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                          </a>
                          ";
            ?>
                          
                          <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" href="modules/proyecto/proses.php?act=deleteEsc&id_Escuela=<?php echo $data['id_Escuela'];?>" onclick="return confirm('Estas seguro que quieres eliminar ?');">
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
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET['form']=='editEsc') { 
  if (isset($_GET['id'])) {

      // funcion de consulta para mostrar los datos de la tabla convocatoria
     $query = sqlsrv_query($mysqli, "SELECT * from escuelaBE inner join facultadBE on escuelaBE.facultadId_Escuela=facultadBE.id_Facu where id_Escuela ='$_GET[id]';")  or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));
            // almacena en un array data
          $data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
    } 
?>
<!-- tampilan form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Editar Escuela Detalle
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=proyecto"> Proyecto</a></li>
      <li class="active"> Editar Escuela Detalle </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/proyecto/proses.php?act=updateEsc" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              
              <input type="hidden" name="id_Escuela" value="<?php echo $data['id_Escuela']; ?>">
              <div class="form-group">
                <label class="col-sm-1 control-label">Nombre</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="nombre" value="<?php echo $data['nombre_Escuela']?>" autocomplete="off" placeholder="Nombre Escuela" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Facultad</label>
                  

                <div class="col-sm-8">
                  <select style="width: 795px" required name="selectFac"  title="Seleccione">
                    <?php
                    $ss=$data['id_Facu'];
                    $query = sqlsrv_query($mysqli, "SELECT * FROM  facultadBE where id_Facu='$ss' ") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($exp  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    echo "<option value=";
                    echo $exp['id_Facu'];
                    echo ">";
                   echo $exp['nombre_Facu']; 
                    echo "</option>";
                    }
                    ?>

                    <?php
                    $query = sqlsrv_query($mysqli, "SELECT * FROM  FacultadBE ORDER BY id_Facu DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                    while ($data2  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                    echo "<option value=";
                    echo $data2['id_Facu'];
                    echo ">";
                   echo $data2['nombre_Facu']; 
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
                  <a href="?module=form_proyecto&form=addEsc" class="btn btn-default btn-reset">Cancelar</a>
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
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET['form']=='addFac') { 


?>


<!-- form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Detalle Facultad
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=proyecto"> Proyectos </a></li>
      <li><a href="?module=form_proyecto&form=addPro"> Detalle </a></li>
       <li><a href="?module=form_proyecto&form=addEsc"> Escuela </a></li>
      <li class="active">Detalle Facultad </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
            <form role="form" class="form-horizontal"  action="modules/proyecto/proses.php?act=insertFac" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-1 control-label">Nombre</label>
                <div class="col-sm-8">
                  <input type="text" placeholder="Nombre Facultad" class="form-control" name="nombre" autocomplete="off" required>
                </div>                
              </div>
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit"  name="save" value="Guardar">
                  <a href="?module=form_proyecto&form=addEsc" class="btn btn-default btn-reset">Cancelar</a>
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
                <th class="center">Nombre Facultad</th>
                <th class="center">Acciones</th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;

            // funciones de consulta para mostrar los datos en la tabla       
$query = sqlsrv_query($mysqli, "SELECT * FROM facultadBE ORDER BY id_Facu DESC")
                                            or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));
            // almacena en un array data
            while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) { 
              // mostrar los datos
              echo "<tr>
                      <td width='40' class='center'>$no</td>
                      <td width='150'>$data[nombre_Facu]</td>
                      <td class='center' width='80'>
                        <div>
                           <a data-toggle='tooltip' data-placement='top' title='Editar' style='margin-right:5px' class='btn btn-warning btn-sm' href='?module=form_proyecto&form=editFac&id=$data[id_Facu]'>
                              <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                          </a>
                          ";
            ?>
                          
                          <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" href="modules/proyecto/proses.php?act=deleteFac&id_Facu=<?php echo $data['id_Facu'];?>" onclick="return confirm('Estas seguro que quieres eliminar ?');">
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
  </section><!-- /.content -->
<!--/. -->
<?php
}  
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET['form']=='editFac') { 
  if (isset($_GET['id'])) {

      // funcion de consulta para mostrar los datos de la tabla convocatoria
     $query = sqlsrv_query($mysqli, "SELECT * FROM facultadBE  where id_Facu='$_GET[id]';")
                                            or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));
            // almacena en un array data
          $data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
    } 
?>
<!-- form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Editar Facultad Detalle
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=proyecto"> Proyecto </a></li>
       <li><a href="?module=form_evento&form=addEsc"> Escuela</a></li>
      <li class="active"> Editar Detalle Facultad </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/proyecto/proses.php?act=updateFac" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              
              <input type="hidden" name="id_Facu" value="<?php echo $data['id_Facu']; ?>">
              <div class="form-group">
                <label class="col-sm-1 control-label">Nombre</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="nombre" value="<?php echo $data['nombre_Facu']?>" autocomplete="off" placeholder="Nombre Facultad" required>
                </div>
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=form_proyecto&form=addFac" class="btn btn-default btn-reset">Cancelar</a>
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
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET['form']=='addFproy') { 

?>

<!-- form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Detalle Fondo Proyecto
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=proyecto"> Proyecto </a></li>
      <li class="active">Detalle Fondo Proyecto </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
            <form role="form" class="form-horizontal"  action="modules/proyecto/proses.php?act=insertFproy" method="POST" enctype="multipart/form-data">
            <div class="box-body">

                <div class="form-group">
                      <a class="btn btn-info  pull-right" href="?module=form_proyecto&form=addPro">
                      <i class="fa fa-plus"></i> Proyecto
                      </a>
                      <label class="col-sm-1 control-label">Proyecto</label>
                      <div class="col-sm-8">
                        <select style="width: 795px" name="selectPro" required  title="Seleccione">
                          <option>-Seleccione-</option>
                          <?php
                          // 
                          $query = sqlsrv_query($mysqli, "SELECT * FROM  proyectoBE ORDER BY id_Proyecto DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                          while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){

                          echo "<option value=";
                          echo $data['id_Proyecto'];
                          echo ">";
                         echo $data['titulo_Proyecto']; 
                          echo "</option>";
                          }
                          ?>
                          ?>
                        </select>
                      </div>
                </div>

                <div class="form-group">
                      <a class="btn btn-info  pull-right" href="?module=form_proyecto&form=addFond">
                      <i class="fa fa-plus"></i> Fondo Proyecto
                      </a>
                      <label class="col-sm-1 control-label">Fondo Proyecto</label>
                      <div class="col-sm-8">
                        <select style="width: 795px" name="selectFpro" required  title="Seleccione">
                          <option>-Seleccione-</option>
                          <?php
                          // 
                          $query = sqlsrv_query($mysqli, "SELECT * FROM  fondoGobBE ORDER BY id_fondoGob DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                          while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){

                          echo "<option value=";
                          echo $data['id_fondoGob'];
                          echo ">";
                         echo $data['descripcion_fondoGob']; 
                          echo "</option>";
                          }
                          ?>
                          ?>
                        </select>
                      </div>
                </div>



            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit"  name="save" value="Guardar">
                  <a href="?module=proyecto" class="btn btn-default btn-reset">Cancelar</a>
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
                <th class="center">Titulo Proyecto</th>
                <th class="center">Descripcion Proyecto</th>
                <th class="center">Presupuesto Proyecto</th>
                <th class="center">Enlace Proyecto</th>
                <th class="center">Estado Proyecto</th>
                <th class="center">Fondo Proyecto</th>
                <th class="center">Estado Fondo Proyecto</th>
                <th class="center">Acciones</th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;

            // funciones de consulta para mostrar los datos en la tabla       
$query = sqlsrv_query($mysqli, "SELECT * FROM fondoGProyBE inner join fondoGobBE on fondoGProyBE.idFondo=fondoGobBE.id_fondoGob inner join proyectoBE on fondoGProyBE.idProy=proyectoBE.id_Proyecto ORDER BY id_FGP desc")
                                            or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));
            // almacena en un array data
            while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) { 


              if ($data['estado_Proyecto']<1)
                   {
                        $pro='<b><span style="color: red; text-align: center">Desaprobado</apan>';
                       
                   }
                   elseif ($data['estado_Proyecto']==1) {
                        $pro='<b><span style="color: blue; text-align: center">Proceso</apan>';
                       }
                 elseif($data['estado_Proyecto']==2){
                        $pro='<b><span style="color: green; text-align: center">Aprobado</apan>';
                        
                    }


              if ($data['estado_fondoGob']<1)
                   {
                        $cond='<b><span style="color: red; text-align: center">Inactivo</apan>';
                       
                   }
                   elseif ($data['estado_fondoGob']==1) {
                        $cond='<b><span style="color: green; text-align: center">Activo</apan>';
                       }
              // mostrar los datos
              echo "<tr>
                      <td width='40' class='center'>$no</td>
                      <td width='150'>$data[titulo_Proyecto]</td>
                      <td width='150'>$data[descripcion_Proyecto]</td>
                      <td width='150'>$data[presupuesto_Proyecto]</td>
                      <td width='150'>$data[enlace_Proyecto]</td>
                      <td width='150'>$pro</td>
                      <td width='150'>$data[descripcion_fondoGob]</td>
                      <td width='150'>$cond</td>
                      <td class='center' width='80'>
                        <div>
                           <a data-toggle='tooltip' data-placement='top' title='Editar' style='margin-right:5px' class='btn btn-warning btn-sm' href='?module=form_proyecto&form=editFproy&id=$data[id_FGP]'>
                              <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                          </a>
                          ";
            ?>
                          
                          <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" href="modules/proyecto/proses.php?act=deleteFproy&id_FGP=<?php echo $data['id_FGP'];?>" onclick="return confirm('Estas seguro que quieres eliminar ?');">
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
  </section><!-- /.content -->
<!--/. -->
<?php
}  
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET['form']=='editFproy') { 
  if (isset($_GET['id'])) {

      // funcion de consulta para mostrar los datos de la tabla convocatoria
     $query = sqlsrv_query($mysqli, "SELECT * FROM fondoGProyBE  where id_FGP='$_GET[id]'") or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));
            // almacena en un array data
          $dat  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
    } 
?>
<!-- form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Editar Fondo Proyecto
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=proyecto"> Proyecto </a></li>
       <li><a href="?module=form_proyecto&form=addFproy"> Fondo Proyecto</a></li>
      <li class="active"> Editar Fondo Proyecto </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/proyecto/proses.php?act=updateFproy" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              
              <input type="hidden" name="id_FGP" value="<?php echo $dat['id_FGP']; ?>">
              
                <div class="form-group">
                      
                      <label class="col-sm-1 control-label">Proyecto</label>
                      <div class="col-sm-8">
                        <select style="width: 795px" name="selectPro1" required  title="Seleccione">
                          
                          <?php
                          //

                          $ss=$dat['idProy'];
                          $query = sqlsrv_query($mysqli, "SELECT * FROM proyectoBE where id_Proyecto='$ss' ") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                          while ($exp  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                          echo "<option value=";
                          echo $exp['id_Proyecto'];
                          echo ">";
                         echo $exp['titulo_Proyecto']; 
                          echo "</option>";
                          }
                          ?>

                          <?php


                          $query = sqlsrv_query($mysqli, "SELECT * FROM  proyectoBE ORDER BY id_Proyecto DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                          while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){

                          echo "<option value=";
                          echo $data['id_Proyecto'];
                          echo ">";
                         echo $data['titulo_Proyecto']; 
                          echo "</option>";
                          }
                          
                          ?>
                        </select>
                      </div>
                </div>

                <div class="form-group">
                      <label class="col-sm-1 control-label">Fondo Proyecto</label>
                      <div class="col-sm-8">
                        <select style="width: 795px" name="selectFpro1" required  title="Seleccione">
                          
                          <?php
                          // 
                          $ss=$dat['idFondo'];
                          $query = sqlsrv_query($mysqli, "SELECT * FROM  fondoGobBE where id_fondoGob='$ss' ") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                          while ($exp  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){
                          echo "<option value=";
                          echo $exp['id_fondoGob'];
                          echo ">";
                         echo $exp['descripcion_fondoGob']; 
                          echo "</option>";
                          }
                          ?>
                          <?php

                          $query = sqlsrv_query($mysqli, "SELECT * FROM  fondoGobBE ORDER BY id_fondoGob DESC") or die('Hubo un error en la consulta de los datos : '.sqlsrv_errors($mysqli));
                          while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){

                          echo "<option value=";
                          echo $data['id_fondoGob'];
                          echo ">";
                         echo $data['descripcion_fondoGob']; 
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
                  <a href="?module=form_proyecto&form=addFproy" class="btn btn-default btn-reset">Cancelar</a>
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
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET['form']=='addFond') { 

?>

<!-- form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Detalle Fondo
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=proyecto"> Proyecto </a></li>
      <li class="active">Detalle Fondo </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
            <form role="form" class="form-horizontal"  action="modules/proyecto/proses.php?act=insertFond" method="POST" enctype="multipart/form-data">
            <div class="box-body">

              <div class="form-group">
                <label class="col-sm-1 control-label">Descripcion </label>
                <div class="col-sm-8">
                  <input placeholder="Descripcion Fondo" type="text" class="form-control" name="descripcion" autocomplete="off" required>
                  <div class="help-block with-errors alert-danger"></div>
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

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit"  name="save" value="Guardar">
                  <a href="?module=form_proyecto&form=addFproy" class="btn btn-default btn-reset">Cancelar</a>
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
                <th class="center">Descripcion Fondo</th>
                <th class="center">Estado Fondo Proyecto</th>
                <th class="center">Acciones</th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;

            // funciones de consulta para mostrar los datos en la tabla       
$query = sqlsrv_query($mysqli, "SELECT * FROM  fondoGobBE ORDER BY id_fondoGob desc")
                                            or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));
            // almacena en un array data
            while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) { 

              if ($data['estado_fondoGob']<1)
                   {
                        $cond='<b><span style="color: red; text-align: center">Inactivo</apan>';
                       
                   }
                   elseif ($data['estado_fondoGob']==1) {
                        $cond='<b><span style="color: green; text-align: center">Activo</apan>';
                       }
              // mostrar los datos
              echo "<tr>
                      <td width='40' class='center'>$no</td>
                      <td width='150'>$data[descripcion_fondoGob]</td>
                      <td width='150'>$cond</td>
                      <td class='center' width='80'>
                        <div>
                           <a data-toggle='tooltip' data-placement='top' title='Editar' style='margin-right:5px' class='btn btn-warning btn-sm' href='?module=form_proyecto&form=editFond&id=$data[id_fondoGob]'>
                              <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
                          </a>
                          ";
            ?>
                          
                          <a data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger btn-sm" href="modules/proyecto/proses.php?act=deleteFond&id_fondoGob=<?php echo $data['id_fondoGob'];?>" onclick="return confirm('Estas seguro que quieres eliminar ?');">
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
  </section><!-- /.content -->
<!--/. -->
<?php
}  
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
elseif ($_GET['form']=='editFond') { 
  if (isset($_GET['id'])) {

      // funcion de consulta para mostrar los datos de la tabla convocatoria
     $query = sqlsrv_query($mysqli, "SELECT * FROM fondoGobBE  where id_fondoGob='$_GET[id]'") or die('Hubo un error en la consulta de los datos: '.sqlsrv_errors($mysqli));
            // almacena en un array data
          $dat  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC);
    } 
?>
<!-- form add data -->
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-edit"></i> Editar Fondo Proyecto
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=proyecto"> Proyecto </a></li>
       <li><a href="?module=form_proyecto&form=addFond"> Fondo Proyecto</a></li>
      <li class="active"> Editar Fondo Proyecto </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" method="POST" action="modules/proyecto/proses.php?act=updateFond" method="POST" enctype="multipart/form-data">
            <div class="box-body">
              
              <input type="hidden" name="id_fondoGob" value="<?php echo $dat['id_fondoGob']; ?>">
              
              <div class="form-group">
                <label class="col-sm-1 control-label">Descripcion </label>
                <div class="col-sm-8">
                  <input placeholder="Descripcion Fondo" type="text" class="form-control" value="<?php echo $dat['descripcion_fondoGob']; ?>" name="descripcion" autocomplete="off" required>
                  <div class="help-block with-errors alert-danger"></div>
                </div>                
              </div>

              <div class="form-group">
                <label class="col-sm-1 control-label">Estado  </label>
                <div class="col-sm-8">
                 
                  <fieldset id="group1">
                    <input type="radio" name="gender" value="0" <?php if ($dat['estado_fondoGob'] == '0') echo 'checked="checked"'; ?> > Inactivo<br>
                    <input type="radio" name="gender" value="1" <?php if ($dat['estado_fondoGob']  == '1') echo 'checked="checked"'; ?> > Activo
                  </fieldset>
                </div>                
              </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11">
                  <input type="submit" class="btn btn-primary btn-submit" name="save" value="Guardar">
                  <a href="?module=form_proyecto&form=addFond" class="btn btn-default btn-reset">Cancelar</a>
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
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
