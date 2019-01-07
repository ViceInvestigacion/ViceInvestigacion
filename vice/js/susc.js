$(function() {
	$('body').on('click', '.float', function(event) {
		event.preventDefault();
       $.when( 
        $('.float').hide()
        ).then(function( data, textStatus, jqXHR ) {
            $('.modal').show(1000)
        });
	});

	$('body').on('click', '.close', function(event) {
        event.preventDefault();
        $.when( 
            $('.modal').hide(1000)
        ).then(function( data, textStatus, jqXHR ) {
            $('.float').show()
        });
	});
});