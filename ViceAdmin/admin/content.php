<?php
/* Agrega conexion a la base de datos*/
require_once "../config/database.php";
/* llama a la funcion que contiene los formatos de fecha */
require_once "../config/date_format.php";

//función para comprobar el estado del usuario conectado
// si el usuario no está conectado, cambie a la página de inicio de sesión y envie mensaje en pantalla = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// si el usuario ya ha iniciado sesión, a continuación, ejecutar el script para llamar el contenido del archivo de paginación
else {
	// Si el contenido es home llamar la vista correspondiente
	if ($_GET['module'] == 'home') {
		include "modules/home/view.php";
	}

	// -----------------------------------------------------------------------------
	
	// Si el contenido es about llamar la vista correspondiente
	elseif ($_GET['module'] == 'about') {
		include "modules/about/view.php";
	}

	// Si el contenido es form_about llamar la vista correspondiente
	elseif ($_GET['module'] == 'form_about') {
		include "modules/about/form.php";
	}
	// -----------------------------------------------------------------------------
	// -----------------------------------------------------------------------------
	
	// Si el contenido es service llamar la vista correspondiente

	// -----------------------------------------------------------------------------

	// -----------------------------------------------------------------------------

		// Si el contenido es resolucion llamar la vista correspondiente
	elseif ($_GET['module'] == 'resolucion') {
		include "modules/resolucion/view.php";
	}

	// Si el contenido es form_resolucion llamar la vista correspondiente
	elseif ($_GET['module'] == 'form_resolucion') {
		include "modules/resolucion/form.php";
	}
	// -----------------------------------------------------------------------------


	// -----------------------------------------------------------------------------


		// Si el contenido es convocatoria llamar la vista correspondiente
	elseif ($_GET['module'] == 'convocatoria') {
		include "modules/convocatoria/view.php";
	}

	// Si el contenido es form_revista llamar la vista correspondiente
	elseif ($_GET['module'] == 'form_convocatoria') {
		include "modules/convocatoria/form.php";
	}
	// -----------------------------------------------------------------------------
			// Si el contenido es noticia llamar la vista correspondiente
	elseif ($_GET['module'] == 'noticia') {
		include "modules/noticia/view.php";
	}

	// Si el contenido es form_revista llamar la vista correspondiente
	elseif ($_GET['module'] == 'form_noticia') {
		include "modules/noticia/form.php";
	}

		// -----------------------------------------------------------------------------
			// Si el contenido es revista llamar la vista correspondiente
	elseif ($_GET['module'] == 'revista') {
		include "modules/revista/view.php";
	}

	// Si el contenido es form_revista llamar la vista correspondiente
	elseif ($_GET['module'] == 'form_revista') {
		include "modules/revista/form.php";
	}
	// -----------------------------------------------------------------------------
// Si el contenido es evento llamar la vista correspondiente
	elseif ($_GET['module'] == 'evento') {
		include "modules/evento/view.php";
	}

	// Si el contenido es form_revista llamar la vista correspondiente
	elseif ($_GET['module'] == 'form_evento') {
		include "modules/evento/form.php";
	}
	// Si el contenido es form_revista llamar la vista correspondiente
	elseif ($_GET['module'] == 'form_evento') {
		include "modules/evento/email.php";
	}
// -----------------------------------------------------------------------------
			// Si el contenido es notificacion llamar la vista correspondiente
	elseif ($_GET['module'] == 'notificacion') {
		include "modules/notificacion/view.php";
	}

	// Si el contenido es form_notificacion llamar la vista correspondiente
	elseif ($_GET['module'] == 'form_notificacion') {
		include "modules/notificacion/form.php";
	}
	// -----------------------------------------------------------------------------
	// Si el contenido es message llamar la vista correspondiente
	elseif ($_GET['module'] == 'message') {
		include "modules/message/view.php";
	}

	// Si el contenido es form_message llamar la vista correspondiente
	elseif ($_GET['module'] == 'form_message') {
		include "modules/message/form.php";
	}
	// -----------------------------------------------------------------------------
	// Si el contenido es proyecto llamar la vista correspondiente
	elseif ($_GET['module'] == 'proyecto') {
		include "modules/proyecto/view.php";
	}

	// Si el contenido es form_proyecto llamar la vista correspondiente
	elseif ($_GET['module'] == 'form_proyecto') {
		include "modules/proyecto/form.php";
	}
	// -----------------------------------------------------------------------------
	// Si el contenido es password llamar la vista correspondiente
	elseif ($_GET['module'] == 'password') {
		include "modules/password/view.php";
	}

	elseif ($_GET['module'] == 'password') {
		include "modules/evento/view.php";
	}
	// -----------------------------------------------------------------------------
	// Si el contenido es suscriptor llamar la vista correspondiente
	elseif ($_GET['module'] == 'suscriptor') {
		include "modules/suscriptor/view.php";
	}

	elseif ($_GET['module'] == 'suscriptor') {
		include "modules/suscriptor/view.php";
	}
	elseif ($_GET['module'] == 'suscriptor') {
		include "modules/suscriptor/reporte.php";
	}
}
?>