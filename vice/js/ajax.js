
$(document).ready(function(){
	
		$.ajax({
		  url: "http://localhost:8000/api/convocatorias",
		  method: "GET",
		}).done(function(data) {
		  $.each( data, function( key, value ) {
			  // alert(value["descripcion_Conv"]);
			  $('.desc').append(value["descripcion_Conv"]);
			});
		});
});

