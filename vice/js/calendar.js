
$(document).ready(function () {

    $('#loading').hide();
    inicio();
});

var monthNames = [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ]; 
var dayNames= [ "Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"];
var año,mes,diaS,hora,segundo,minuto;

function inicio(){
    carga_eventos();
}

$(document).click(function(event) {
    if ($(event.target).closest(".button2").length) {
     var id =  event.target.parentNode.parentElement.childNodes[3].innerHTML;
     carga_evento(id); 
     $('#event1container').remove();
     $('#evento1').append('<div id="event1container">'+h+'</div>');
    }
});

$('#enc_even').on("click",function(){
	 carga_eventos();
});
$("#form-event").submit(function(event){
    event.preventDefault(); //prevent default action
    $('#events').remove();
    $('#evento2').append('<div id="events" style="text-align: center;"></div>');
    $('#loading').show();
    var email = $('#emailevnt').val();
    var dni = $('#dnievnt').val();
    var btn = '<span><a class="button2" target="_blank">Ver Evento</a></span>';

    if(dni==''||email==''){
        return false;
    }
    else{
        $.ajax({
            url: "http://localhost:8000/api/asistentes/"+email+"/Pago",
            method: "GET"
        }).done(function(data) {
            if(data.length>0)
            {
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
                    var titulo      =   value["nombre_Evento"];
                    var descripcion =   value["descripcion_Evento"];
                    var id_Evento   =   value["id_EventoAsis"];
                    var h =setFecha(año,mes,dia,diaS,hora,segundo,minuto,titulo,descripcion,btn,id_Evento);
                    $('#events').append(h);
                    $("#events").removeAttr("style");
                });
            }
            else{
                $('#events').append('<p>No se encontró ningun evento pendiente</p>');
            }
            
        }).fail(function(data){
            
        });
    }
    $('#loading').css("display","none");
});

$(".outer").on({
    mousedown:function(){
        $(".dribbble").css("opacity","1");
    },
    mouseup:function(){
        $(".dribbble").css("opacity","0");
    }
});

function setFecha(año,mes,dia,diaS,hora,segundo,minuto,titulo,descripcion,btn,id_Evento){
    var html = 
    '<div class="item" id="even1">'+	
    '<div class="col izq">'+
        '<h3>'+titulo+'</h3>'+
        '<p>'+descripcion+'</p>'+
        '<p>'+descripcion+'</p>'+
        '<p style="display : none" >'+id_Evento+'</p>'+
        btn+
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
    '</div>'+
    '</div>'
    return html;
  }

  function carga_eventos(){
    $('#event1container').remove();
    $('#evento1').append('<div id="event1container"></div>');
    $.ajax({
        url: "http://localhost:8000/api/eventos",
        method: "GET",
      }).done(function(data) {
        var btn = '<span><a class="button2" target="_blank">Me Interesa</a></span>';
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
            var titulo      =   value["nombre_Evento"];
            var descripcion =   value["descripcion_Evento"];
            var id_Evento   =   value["id_Evento"];
            var h =setFecha(año,mes,dia,diaS,hora,segundo,minuto,titulo,descripcion,btn,id_Evento);
            $('#event1container').append(h);
        });    
      });
}    


function carga_evento(id){
    // var nombre_Evento,tipo_Evento,duracion_Evento, fecInicio_Evento,horaInicio_Evento,cstGSnCertificado_Evento,
    // cstGCnCertificado_Evento,cstFCnCertificado_Evento,imagen_Evento,capacidadD_Evento;
    var h="holi";
    var url = "http://localhost:8000/api/eventos/1"
    $.ajax({
        url: url,
        method: "GET",
      }).done(function(data) {
        alert("ok");
        // alert(data["nombre_Evento"]);
            // nombre_Evento              = data[0]['nombre_Evento']; 
            // tipo_Evento                = data[0]['tipo_Evento'];
            // duracion_Evento            = data[0]['duracion_Evento'];
            // fecInicio_Evento           = data[0]['fecInicio_Evento'];
            // horaInicio_Evento          = data[0]['horaInicio_Evento'];
            // cstGSnCertificado_Evento   = data[0]['cstGSnCertificado_Evento'];
            // cstGCnCertificado_Evento   = data[0]['cstGCnCertificado_Evento'];
            // cstFCnCertificado_Evento   = data[0]['cstFCnCertificado_Evento'];
            // imagen_Evento              = data[0]['imagen_Evento'];
            // capacidadD_Evento          = data[0]['capacidadD_Evento'];
        
      }).fail(function(data){
            alert("falla");
    });
      
}   