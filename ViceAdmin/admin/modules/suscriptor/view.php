<!-- Content Header (Page header) -->
<section class="content-header">

          
  <h1>
    <div>
    <i class="fa fa-users icon-title"></i> Suscriptores
    <a style=" margin: 7px" class="btn btn-info btn-warning pull-right" target="_blank" href="https://ui.benchmarkemail.com/es/Login">
      <i class="fa fa-plus"></i> Enviar Boletin
      </a>
      <?php  
    $query = sqlsrv_query($mysqli, "SELECT count(*) as registros from suscriptorBE where estado_Susc ='n' ")
                         or die('Se produjo un error en las actualizaciones de estado de consulta : '.sqlsrv_errors($mysqli));
      while ($datex = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC)) { 
         //convertimos el datatime a string
        $total_result=$datex['registros'];
    }  

    if ($total_result=='0') {
     // $total_result=document.getElementById("aea").disabled=true; 
     echo "
    <a style='margin: 7px' disabled class='btn btn-success btn-success pull-right'  href='modules/suscriptor/reporte.php'>
      <i class='fa fa-print'></i> Imprimir
      </a>              
    ";
    }
    elseif ($total_result>'0')
    {

  echo "
    <a style='margin: 7px' class='btn btn-success btn-success pull-right'  href='modules/suscriptor/reporte.php'>
      <i class='fa fa-print'></i> Imprimir
      </a>
<script type='text/javascript'>

   setTimeout(function(){

       location.reload();

   },10000);

</script>

    ";

    }


    /*
 <a data-toggle='tooltip' data-placement='top' title='Imprimir Reporte' style='margin-right:5px'  class='btn btn-success btn-sm' href='modules/suscriptor/reporte.php' ><i style='color:#fff' class='fa fa-print'></i>&nbsp;&nbsp;Imprimir</a>



  <a class="btn btn-warning btn-social pull-right" name="aea" href="modules/suscriptor/reporte.php" >
      <i class="fa fa-print"></i> Reporte
    </a>


    echo "
    <a data-toggle='tooltip' data-placement='top' title='Imprimir Reporte' style='margin-right:5px'  class='btn btn-success btn-sm' href='modules/suscriptor/reporte.php' ><i style='color:#fff' class='fa fa-print'></i></a>
    ";
    */


    ?>


 </div>

  </h1>
  
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
    <?php  
    // funciones para mostrar mensajes
    if (empty($_GET['alert'])) {
      echo "";
    } 
    // Mostrar mensaje de éxito "mensaje ha sido eliminado"
    elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Bien hecho!</h4>
              El Exportado correctamente.
            </div>";
    }
    ?>

      <div class="box box-primary">
        <div class="box-body">
          <!-- tabel pesan -->
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
            <!--  tabel header -->
            <thead>
             
              <tr>
                <th class="center">No.</th>
                <th class="center">Nombre</th>
                <th class="center">Apellidos</th>
                <th class="center">Email</th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;
            // Consultar tabla de mensajes
            $query = sqlsrv_query($mysqli, "SELECT * FROM suscriptorBE where estado_Susc='n' ORDER BY id_Susc DESC")
                    or die('Hubo un error en la consulta de datos: '.sqlsrv_errors($mysqli));

            // Los datos que se muestran
            while ($data  = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) { 

            if ($data['estado_Susc']=='y') {
                $warna = "";
              } else {
                //$warna = "#fcf8e3";
                $warna = "#E8DAEF";
              }
              // cargamos los datos para el formulario
              echo "<tr style='background:$warna'>
                      <td width='40' class='center'>$no</td>
                      <td width='150'>$data[nombres_Susc]</td>
                      <td width='150'>$data[apellidos_Susc]</td>
                      <td width='120'>$data[correo_Susc]</td>
                      
                      
                         ";            ?>

            <?php
              echo "    
                      
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