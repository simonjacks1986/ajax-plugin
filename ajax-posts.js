jQuery(document).ready(function() {
    jQuery(".SELECTOR").on('click', function(e){
	    // e.preventDefault();
	    // var thing = $('.thing');
		jQuery.ajax({
			url : ajax_poster.ajax_url,
			type : 'post',
			data : {
				action : 'ts_ajax_add_to_cart',
				// thing : thing
			},
			success : function(response) {
				var return_info = JSON.parse(response);
			}
		});
	});	
});