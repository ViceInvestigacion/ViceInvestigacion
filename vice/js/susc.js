$(function() {
    var v = 0;
    $(document).click(function(event) {
        if(v==0)
        {
            if ($(event.target).closest("#btn_susc").length) {
                event.preventDefault();
                $.when( 
                $('#btn_susc').hide()
                ).then(function( data, textStatus, jqXHR ) {
                    $('#modalS').show(1000)
                });
                v=1;
            }
           
        }
        else
        {
            if (!$(event.target).closest("#modalS").length) {
                $("body").find("#modalS").css("display","none");
                $("body").find("#btn_susc").css("display","block");
                v=0;
            }
        }
         
    });

});


  

