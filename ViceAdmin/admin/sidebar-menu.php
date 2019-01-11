	<!-- Inicio de la barra lateral del menú -->
    <ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php 
	// Función para comprobar los menús activos.
	// Si se selecciona el menú de inicio, el menú de inicio está activo.
	if ($_GET["module"]=="home") { ?>
		<li class="active">
			<a href=""><i class="fa fa-home"></i> Inicio </a>
	  	</li>
	<?php
	}
	// Si no, el menú de inicio no está activo.
	else { ?>
		<li>
			<a href="?module=home"><i class="fa fa-home"></i> Inicio </a>
	  	</li>
	<?php
	}

	// Si el menú sobre seleccionado, el menú sobre activo
if ($_GET["module"]=="about") { ?>
		<li class="active">
			<a href="?module=about"><i class="fa fa-envira"></i> Nosotros </a>
	  	</li>
	<?php
	}
	// Si no, el menú home de no está activo
	else { ?>
		<li>
			<a href="?module=about"><i class="fa fa-envira"></i> Nosotros </a>
	  	</li>
	<?php
	}


	// Si se selecciona el menú de convocatoria, el menú de convocatoria está activo.
if ($_GET["module"]=="convocatoria") { ?>
		<li class="active">
			<a href="?module=convocatoria"><i class="fa fa-list-ul"></i> Convocatoria </a>
	  	</li>
	<?php
	}
	// Si no, el menú de convocatoria no está activo.
	else { ?>
		<li>
			<a href="?module=convocatoria"><i class="fa fa-list-ul"></i> Convocatoria</a>
	  	</li>
	<?php
	}
	/////////////////////////////////////////////////////
	// Si el menú de eventos está seleccionado, el menú de eventos está activo
if ($_GET["module"]=="evento") { ?>
	  		<li class="active">
			<a href="?module=evento"><i class="fa fa-calendar-check-o"></i> Evento </a>
	  		</li>

	<?php
	}
	// Si no, el menú de eventos no está activo.
	else { ?>
			<li>
			<a href="?module=evento"><i class="fa fa-calendar-check-o"></i> Evento</a>
	  	</li>

		
	<?php
	}
	/////////////////////////////////////////////////////


	// Si se selecciona el menú de resolución, el menú de resolución está activo.
if ($_GET["module"]=="proyecto") { ?>
		<li class="active">
			<a href="?module=proyecto"><i class="fa fa-line-chart"></i> Proyectos </a>
	  	</li>
	<?php
	}
	// Si no, el menú de resolución no está activo.
	else { ?>
		<li>
			<a href="?module=proyecto"><i class="fa fa-line-chart"></i> Proyectos</a>
	  	</li>
	<?php
	}

	////////////////////////////////////////////////////



	// Si se selecciona el menú de resolución, el menú de resolución está activo.
if ($_GET["module"]=="resolucion") { ?>
		<li class="active">
			<a href="?module=resolucion"><i class="fa fa-files-o"></i> Resoluciones </a>
	  	</li>
	<?php
	}
	// Si no, el menú de resolución no está activo.
	else { ?>
		<li>
			<a href="?module=resolucion"><i class="fa fa-files-o"></i> Resoluciones</a>
	  	</li>
	<?php
	}

	////////////////////////////////////////////////////

	// Si se selecciona el menú de noticia , el menú de noticia está activo.
if ($_GET["module"]=="noticia") { ?>
		<li class="active">
			<a href="?module=noticia"><i class="fa fa-newspaper-o"></i> Noticias </a>
	  	</li>
	<?php
	}
	//  Si no, el menú de noticia no está activo.
	else { ?>
		<li>
			<a href="?module=noticia"><i class="fa fa-newspaper-o"></i> Noticias</a>
	  	</li>
	<?php
	}


	////////////////////////////////////////////////////

	// Si se selecciona el menú de Revista , el menú de noticia está activo.
if ($_GET["module"]=="revista") { ?>
		<li class="active">
			<a href="?module=revista"><i class="fa fa-bookmark"></i> Revista </a>
	  	</li>
	<?php
	}
	//  Si no, el menú de Revista no está activo.
	else { ?>
		<li>
			<a href="?module=revista"><i class="fa fa-bookmark"></i> Revista</a>
	  	</li>
	<?php
	}

	////////////////////////////////////////////////////

	// Si se selecciona el menú de Notificacion , el menú de noticia está activo.
if ($_GET["module"]=="notificacion") { ?>
		<li class="active">
			<a href="?module=notificacion"><i class="fa fa-bell"></i> Notificaciones </a>
	  	</li>
	<?php
	}
	//  Si no, el menú de Notificacion no está activo.
	else { ?>
		<li>
			<a href="?module=notificacion"><i class="fa fa-bell"></i> Notificaciones</a>
	  	</li>
	<?php
	}
	////////////////////////////////////////////////////

	// Si se selecciona el menú de suscriptor , el menú de suscriptor está activo.
if ($_GET["module"]=="suscriptor") { ?>
		<li class="active">
			<a href="?module=suscriptor"><i class="fa fa-users"></i> Suscriptores </a>
	  	</li>
	<?php
	}
	//  Si no, el menú de suscriptor no está activo.
	else { ?>
		<li>
			<a href="?module=suscriptor"><i class="fa fa-users"></i> Suscriptores</a>
	  	</li>
	<?php
	}



////////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////////////
	// Si se selecciona el menú de mensajes , el menú de mensajes está activo.
	if ($_GET["module"]=="message" || $_GET["module"]=="form_message") { ?>
		<li class="active">
			<a href="?module=message"><i class="fa fa-comments"></i> Mensajes </a>
	  	</li>
	<?php
	}
	// Si no, el menú de mensajes no está activo.
	else { ?>
		<li>
			<a href="?module=message"><i class="fa fa-comments"></i> Mensajes </a>
	  	</li>
	<?php
	}
	?>
	</ul>
	<!--sidebar menu end-->