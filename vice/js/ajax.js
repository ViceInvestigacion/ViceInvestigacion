
$(document).ready(function(){
	carga_inicio();
	function carga_inicio(){
		carga_convocatorias();
		carga_nosotros();
		carga_noticias();
	}
	function carga_convocatorias(){
		$.when( 
			$.ajax({
				url: "http://localhost:8000/api/convocatorias",
				method: "GET",
			  }).done(function(data) {
				$.each( data, function( key, value ) {
					  $("#bby").append('<li style="position: initial;margin: 1px;">'+
					  	'<img style="width: 495px; height: 495px ;border-radius: 50%" src="../ViceAdmin/images/convocatoria/'+value["imagen_Conv"]
					  	+'"/>'+'</li>'+'<div style="text-align:left">'
					  	+value["descripcion_Conv"] +'</div>');
				  });
			  })
		).then(function( data, textStatus, jqXHR ) {
			$('#blueberry_Conv').blueberry();
		});
	}
	function carga_nosotros(){
		$.ajax({
			url: "http://localhost:8000/api/nosotros",
			method: "GET",
		  }).done(function(data) {
				  $('#id_mision').html(data["mision_Nos"]);
				  $('#id_vision').html(data["vision_Nos"]);
		  });
	}
	function carga_noticias(){
		$.when( 
			$.ajax({
				url: "http://localhost:8000/api/noticias",
				method: "GET",
			  }).done(function(data) {
				$.each( data, function( key, value ) {
					var h =
					'<li style="position: relative">'+
					'<div id="idNoticias" class="articulos">'+
					'<article class="article">'+
					'<div id="slider">'+
					'<img style="width:900px;height:600px;border-radius:25px"src="../ViceAdmin/images/noticia/'+value["imagen_Noticia"]+'" alt="Imagen Noticia"/>'+
					'</div>'+
					'<h2 style="text-align:center">'+value["titulo_Noticia"]+'</h2>'+
					'<p style="text-align:justify">'+value["descripcion_Noticia"]+'</p>'+
					'</article>'+
					'</div>'+
					'</li>'
					$("#bby_Noti").append(h);
				  });
			  })
		).then(function( data, textStatus, jqXHR ) {
			$('#blueberry_Noti').blueberry();
		});
	}
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

		$("#formsusc").submit(function(event){
			event.preventDefault(); //prevent default action
			var nombres_Susc 	= $('#nomS').val();
			var apellidos_Susc 	= $('#apeS').val();
			var correo_Susc 	= $('#emailS').val();

			if(nombres_Susc==''||apellidos_Susc==''||correo_Susc==''){
				return false;
			}
			else{
				var datos = [{nombres_Susc,apellidos_Susc,correo_Susc}];
				var dataToSend = JSON.stringify(datos);
				$.ajax({
					url: "http://localhost:8000/api/suscriptores",
					method: "POST",
					dataType: 'json',
					data: dataToSend   
				}).done(function(data) {
					$.when( 
						$('.modal').hide(1000),
						$('#nomS').val(''),
						$('#apeS').val(''),
						$('#emailS').val(''),
					).then(function( data, textStatus, jqXHR ) {
						$('.float').show()
					});
				}).fail(function(data){
					$('.float').show()
				});
			}
		});

		//$('.slide foto1').css('background-image',"url('../img/chef-1.jpg')");
		//$('.slide foto1').css("background-image:url('../img/1.jpg')");
		//$(".foto1").css("background-image", "url(../img/chef-1.jpg)");
		
});

