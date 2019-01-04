
 <?php  

if ($_GET['form']=='detail') { ?> 
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i style="margin-right:7px" class="fa fa-envelope-o"></i> Suscriptor
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=home"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=suscriptor"> Suscriptor </a></li>
      <li class="active"> Detalles </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <br>

        <?php
        // Consulta a la tabla
        $query = sqlsrv_query($mysqli, "SELECT * FROM suscriptorBE WHERE id_Susc='$_GET[id]'")
                                       
                           or die('Hubo un error en la consulta: '.sqlsrv_errors($mysqli));

        while ($data = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC)) { 
         //convertimos el datatime a string
        ?>
          <ul class="timeline">
            <li>
              <div class="timeline-item">
                
                <h3 class="timeline-header">
                  <a href="javascript:void(0);"> <i class="fa fa-user icon-title"></i> <?php echo $data['nombres_Susc'].''.$data['apellidos_Susc']; ?></a> (<?php echo $data['correo_Susc']; ?>)
                </h3>
                <div class="timeline-body"><?php echo $data['nombres_Susc']; ?></div>
              </div>
            </li>
          </ul>
        <?php
        }
        ?>

          <a href="?module=suscriptor" class="btn btn-default btn-reset">Atras</a>

      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}
?>