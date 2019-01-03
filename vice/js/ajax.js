
$(document).ready(function(){
	
	$.when( 
		$.ajax({
			url: "http://localhost:8000/api/convocatorias",
			method: "GET",
		  }).done(function(data) {
			
			$.each( data, function( key, value ) {
				  // $('.desc').html(value["descripcion_Conv"]);
				  $(".slides").append('<li style="position: relative"><img src="../ViceAdmin/images/convocatoria/'+value["imagen_Conv"]+'"/><div style="position: absolute;bottom: 8px;left: 16px;color: white;">'+value["descripcion_Conv"] +'</div></li>');
			  });
		  })
	).then(function( data, textStatus, jqXHR ) {
		$('.blueberry').blueberry();
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

		$("#formid").submit(function(event){
				event.preventDefault(); //prevent default action
				var name = $('#name').val();
				var email = $('#email').val();
				var message = $('#message').val();

				if(name==''||email==''||message==''){
					return false;
				}
				else{
					var datos = [{name,email,message}];
					var dataToSend = JSON.stringify(datos);
					$.ajax({
						url: "http://localhost:8000/api/message",
						method: "POST",
						dataType: 'json',
						data: dataToSend   
					}).done(function(data) {
						$.when( 
							$('#btn_enviar').hide(),
							$('#alert').show(1000),
							$('#alert').hide(1000),	
							
						).then(function( data, textStatus, jqXHR ) {
							$('#name').val('');
							$('#email').val('');
							$('#message').val('');
							$('#btn_enviar').show();
						});
					}).fail(function(data){
						$.when( 
							$('#btn_enviar').hide(),
							$('#danger').show(1500),
							$('#danger').hide(1500),	
							
						).then(function( data, textStatus, jqXHR ) {
							$('#btn_enviar').show();
						});
					});
				}
		});
});

