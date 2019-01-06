$(document).ready(function () {

    var monthNames = [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ]; 
    var dayNames= [ "Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"];
    var año,mes,diaS,hora,segundo,minuto;
	$.ajax({
        url: "http://localhost:8000/api/eventos",
        method: "GET",
      }).done(function(data) {
         
       
         
        $.each( data, function( key, value ) {
            var fechaE = value["fecInicio_Evento"];
            var horaE  = value["horaInicio_Evento"];
            var parts =fechaE.split('-');
            var parts2 =horaE.split(':');
            var v_Fecha = new Date(parts[0], parts[1] - 1, parts[2],parts2[0],parts2[1]);
            año =v_Fecha.getFullYear();
            mes =v_Fecha.getMonth();//nombre mes
            dia =v_Fecha.getDate(); //numero dia
            diaS=v_Fecha.getDay(); //nombre dia (L M M , etc)
            hora=(v_Fecha.getHours()< 10 ? "0" : "" ) + v_Fecha.getHours();
            segundo=00;
            minuto=( v_Fecha.getMinutes() < 10 ? "0" : "" ) +  v_Fecha.getMinutes();
            var titulo      =  value["nombre_Evento"];
            var descripcion =  value["descripcion_Evento"];
            var h =setFecha(año,mes,dia,diaS,hora,segundo,minuto,titulo,descripcion);
            $('#even1').append(h);
        });
              
      });
    function setFecha(año,mes,dia,diaS,hora,segundo,minuto,titulo,descripcion){
        var html = 
        '<div class="col izq">'+
            '<h3>'+titulo+'</h3>'+
            '<p>'+descripcion+'</p>'+
		'</div>'+
		'<div class="col der">'+
            '<div class="signboard outer">'+
            '<div class="signboard front inner anim04c">'+
            '<li class="year anim04c">'+
            '<span>'+año+'</span>'+
            '</li>'+
            '<ul class="calendarMain anim04c">'+
            '<li class="month anim04c">'+
            '<span>'+ monthNames[mes]+'</span>'+
            '</li>'+
            '<li class="date anim04c">'+
            '<span>'+dia+'</span>'+
            '</li>'+
            '<li class="day anim04c">'+
            '<span>'+dayNames[diaS]+'</span>'+
            '</li>'+
            '</ul>'+
            '<li class="clock minute anim04c">'+
            '<span>'+minuto+'</span>'+
            '</li>'+
            '<li class="calendarNormal date2 anim04c">'+
            '<span>'+dia+'</span>'+
            '</li>'+
            '</div>'+
            '<div class="signboard left inner anim04c">'+
            '<li class="clock hour anim04c">'+
            '<span>'+hora+'</span>'+
            '</li>'+
            '<li class="calendarNormal day2 anim04c">'+
            '<span>'+dayNames[diaS]+'</span>'+
            '</li>'+
            '</div>'+
            '<div class="signboard right inner anim04c">'+
            '<li class="clock second anim04c">'+
            '<span>00</span>'+
            '</li>'+
            '<li class="calendarNormal month2 anim04c">'+
            '<span>'+monthNames[mes]+'</span>'+
            '</li>'+
            '</div>'+
            '</div>'+
        '</div>'
        return html;
      }

    $(".outer").on({
        mousedown:function(){
            $(".dribbble").css("opacity","1");
        },
        mouseup:function(){
            $(".dribbble").css("opacity","0");
        }
    });
    });