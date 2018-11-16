
$(document).ready(function(){
		$.ajax({
		  url: "http://localhost:8000/api/facultades",
		  method: "GET",
		}).done(function(msg) {
		  $.each( msg, function( key, value ) {
			  alert(value["nombre_Facu"]);
			});
		});
});
