
$(document).ready(function(){
	
		$.ajax({
		  url: "http://localhost:8000/api/convocatorias",
		  method: "GET",
		}).done(function(data) {
		  $.each( data, function( key, value ) {
			
				$('.desc').html(value["descripcion_Conv"]);
				$("#foto1").css("background-image", "url('../ViceAdmin/images/convocatoria/"+value["imagen_Conv"]+"')");
			});
		});

		$.ajax({
		  url: "http://localhost:8000/api/nosotros",
		  method: "GET",
		}).done(function(data) {
			
				$('#id_mision').html(data["mision_Nos"]);
				
				$('#id_vision').html(data["vision_Nos"]);
		});

		$.ajax({
		  url: "http://localhost:8000/api/noticias",
		  method: "GET",
		}).done(function(data) {	
				$('#id_tituloNoticia').html(data[0]["titulo_Noticia"]);
				$('#id_Noticia').html(data[0]["descripcion_Noticia"]);
				$("#id_fotoNoticia").css("background-image", "url('../ViceAdmin/images/noticia/"+data[0]["imagen_Noticia"]+"')");
		});
});

