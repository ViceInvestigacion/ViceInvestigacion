<?php
session_start();
header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
header("Content-type:   application/x-msexcel; charset=utf-8");
header("Content-Disposition: attachment; filename=ReporteExcel.xls"); 
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private",false);



require_once "../../../config/database.php";


$query = sqlsrv_query($mysqli, "SELECT count(*) as registros from suscriptorBE where estado_Susc ='n' ")
                         or die('Se produjo un error en las actualizaciones de estado de consulta : '.sqlsrv_errors($mysqli));
      while ($data = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC)) { 
         //convertimos el datatime a string
      	$total_resultados=$data['registros'];
    }
        


$query = sqlsrv_query($mysqli, "SELECT * from suscriptorBE where estado_Susc ='n' ") or die('Se produjo un error en las actualizaciones de estado de consulta : '.sqlsrv_errors($mysqli));

$query2 = sqlsrv_query($mysqli, "UPDATE suscriptorBE SET estado_Susc     = 'y'")
                         or die('Se produjo un error en las actualizaciones de estado de consulta : '.sqlsrv_errors($mysqli));


$datos=array();
      while ($fila= sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC)) { 
         $datos[]=$fila;
      }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Suscriptores</title>
	<meta charset="utf-8">
</head>
<body>
<center><h1>Reporte suscriptor</h1></center>
<center>
		<?php
			echo 'Fecha de Impresion: '.date("d-m-Y H:i:s");
	?>

</center>

	<br/>
	<center><table border="1">
		<tr>
			<td>Id</td>
			<td>Nombres</td>
			<td>Apellidos</td>
			<td>E-mail</td>
		</tr>
<?php foreach($datos as $indice=>$info){ ?>
		<tr>
			<td><?php echo $info['id_Susc'] ?></td>
			<td><?php echo $info['nombres_Susc'] ?></td>
			<td><?php echo $info['apellidos_Susc'] ?></td>
			<td><?php echo $info['correo_Susc'] ?></td>
		</tr>
<?php } ?>
	</table></center>
	<?php 
	echo "<center>Total Suscriptores Nuevos : $total_resultados </center><br/>";


	 ?>		
<br>
</body>
</html>

 