	<!-- Inicio de la barra lateral del menú -->
    <ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php 
	// fungsi untuk pengecekan menu aktif
	// jika menu home dipilih, menu home aktif
	if ($_GET["module"]=="home") { ?>
		<li class="active">
			<a href=""><i class="fa fa-home"></i> Inicio </a>
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

	// jika menu about dipilih, menu about aktif
if ($_GET["module"]=="about") { ?>
		<li class="active">
			<a href="?module=about"><i class="fa fa-leaf"></i> Nosotros </a>
	  	</li>
	<?php
	}
	// jika tidak, menu about tidak aktif
	else { ?>
		<li>
			<a href="?module=about"><i class="fa fa-leaf"></i> Nosotros </a>
	  	</li>
	<?php
	}


	// jika menu convocatoria dipilih, menu convocatoria aktif
if ($_GET["module"]=="convocatoria") { ?>
		<li class="active">
			<a href="?module=convocatoria"><i class="fa fa-leaf"></i> Convocatoria </a>
	  	</li>
	<?php
	}
	// jika tidak, menu convocatoria tidak aktif
	else { ?>
		<li>
			<a href="?module=convocatoria"><i class="fa fa-leaf"></i> Convocatoria</a>
	  	</li>
	<?php
	}

	// jika menu evento dipilih, menu evento aktif
if ($_GET["module"]=="evento") { ?>
	  		<li class="active">
			<a href="?module=evento"><i class="fa fa-leaf"></i> Evento </a>
	  		</li>

	<?php
	}
	// jika tidak, menu evento tidak aktif
	else { ?>
			<li>
			<a href="?module=evento"><i class="fa fa-leaf"></i> Evento</a>
	  	</li>

		
	<?php
	}

	/////////////////////////////////////////////////////


	// jika menu resolucion dipilih, menu resolucion aktif
if ($_GET["module"]=="resolucion") { ?>
		<li class="active">
			<a href="?module=resolucion"><i class="fa fa-leaf"></i> Resoluciones </a>
	  	</li>
	<?php
	}
	// jika tidak, menu resolucion tidak aktif
	else { ?>
		<li>
			<a href="?module=resolucion"><i class="fa fa-leaf"></i> Resoluciones</a>
	  	</li>
	<?php
	}

	////////////////////////////////////////////////////

	// jika menu evento dipilih, menu evento aktif
if ($_GET["module"]=="noticia") { ?>
		<li class="active">
			<a href="?module=noticia"><i class="fa fa-leaf"></i> Noticias </a>
	  	</li>
	<?php
	}
	// jika tidak, menu evento tidak aktif
	else { ?>
		<li>
			<a href="?module=noticia"><i class="fa fa-leaf"></i> Noticias</a>
	  	</li>
	<?php
	}

	// jika menu service dipilih, menu service aktif
	if ("service") { ?>
		<li class="active">
			<a href=""><i class="fa fa-check-square-o"></i> Servicios </a>
	  	</li>
	<?php
	}
	// jika tidak, menu service tidak aktif
	else { ?>
		<li>
			<a href=""><i class="fa fa-check-square-o"></i> Servicios </a>
	  	</li>
	<?php
	}

	// jika menu portfolio dipilih, menu portfolio aktif
	if ("portfolio") { ?>
		<li class="active">
			<a href=""><i class="fa fa-desktop"></i> Portafolio</a>
	  	</li>
	<?php
	}
	// jika tidak, menu portfolio tidak aktif
	else { ?>
		<li>
			<a href=""><i class="fa fa-desktop"></i> Portafolio</a>
	  	</li>
	<?php
	}

	// jika menu revista dipilih, menu revista aktif
	if ("revista") { ?>
		<li class="active">
			<a href=""><i class="fa fa-bell"></i> Revistas</a>
	  	</li>
	<?php
	}
	// jika tidak, menu revista tidak aktif
	else { ?>
		<li>
			<a href=""><i class="fa fa-bell"></i> Revistas</a>
	  	</li>
	<?php
	}

	// jika menu message dipilih, menu message aktif
	if ($_GET["module"]=="message" || $_GET["module"]=="form_message") { ?>
		<li class="active">
			<a href="?module=message"><i class="fa fa-envelope"></i> Mensajes </a>
	  	</li>
	<?php
	}
	// jika tidak, menu message tidak aktif
	else { ?>
		<li>
			<a href="?module=message"><i class="fa fa-envelope"></i> Mensajes </a>
	  	</li>
	<?php
	}
	?>
	</ul>
	<!--sidebar menu end-->