
$(document).ready(function(){
		$.ajax({
		  url: "http://localhost:8000/api/convocatorias",
		  method: "GET",
		}).done(function(msg) {
		  alert("consumido:" + msg);

		});
});
