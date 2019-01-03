$(document).ready(function () {

    var monthNames = [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ]; 
    var dayNames= [ "Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"];
    
    var año,mes,dia,hora,segundo,minuto;
    var html = '<div class="signboard outer"><div class="signboard front inner anim04c"><li class="year anim04c"><span></span></li><ul class="calendarMain anim04c"><li class="month anim04c"><span></span></li><li class="date anim04c">
                <span></span></li><li class="day anim04c"><span></span></li></ul><li class="clock minute anim04c"><span></span>
        </li>
        <li class="calendarNormal date2 anim04c">
            <span></span>
        </li>
    </div>
    <div class="signboard left inner anim04c">
        <li class="clock hour anim04c">
            <span></span>
        </li>
        <li class="calendarNormal day2 anim04c">
            <span></span>
        </li>
    </div>
    <div class="signboard right inner anim04c">
        <li class="clock second anim04c">
            <span></span>
        </li>
        <li class="calendarNormal month2 anim04c">
            <span></span>
        </li>
    </div>
</div> 
	$.ajax({
        url: "http://localhost:8000/api/eventos",
        method: "GET",
      }).done(function(data) {
          
        $.each( data, function( key, value ) {
           
           
        });
              
      });

    var newDate = new Date();
    newDate.setDate(newDate.getDate());
        
    setInterval( function() {
        var hours = new Date().getHours();
        $(".hour").html(( hours< 10 ? "0" : "" ) + hours);
        var seconds = new Date().getSeconds();
        $(".second").html(( seconds < 10 ? "0" : "" ) + seconds);
        var minutes = new Date().getMinutes();
        $(".minute").html(( minutes < 10 ? "0" : "" ) + minutes);
        
        $(".month span,.month2 span").text(monthNames[newDate.getMonth()]);
        $(".date span,.date2 span").text(newDate.getDate());
        $(".day span,.day2 span").text(dayNames[newDate.getDay()]);
        $(".year span").html(newDate.getFullYear());
    }, 1000);	
    
    
    
    $(".outer").on({
        mousedown:function(){
            $(".dribbble").css("opacity","1");
        },
        mouseup:function(){
            $(".dribbble").css("opacity","0");
        }
    });
    });