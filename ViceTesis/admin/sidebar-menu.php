	<!-- Inicio de la barra lateral del menú -->
    <ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php 
	// fungsi untuk pengecekan menu aktif
	// jika menu home dipilih, menu home aktif
	if ($_GET["module"]=="home") { ?>
		<li class="active">
			<a href="?module=home"><i class="fa fa-home"></i> Inicio </a>
	  	</li>
	<?php
	}
	// jika tidak, menu home tidak aktif
	else { ?>
		<li>
			<a href="?module=home"><i class="fa fa-home"></i> Inicio </a>
	  	</li>
	<?php
	}


	// jika menu tesis dipilih, menu tesisaktif
	if ($_GET["module"]=="tesis" || $_GET["module"]=="form_tesis") { ?>
		<li class="active">
			<a href="?module=tesis"><i class="fa fa-desktop"></i> TESIS</a>
	  	</li>
	<?php
	}
	// jika tidak, menu tesis tidak aktif
	else { ?>
		<li>
			<a href="?module=tesis"><i class="fa fa-desktop"></i> TESIS</a>
	  	</li>
	<?php
	}



	?>
	</ul>
	<!--sidebar menu end-->