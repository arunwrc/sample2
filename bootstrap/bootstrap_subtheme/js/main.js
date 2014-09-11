jQuery(document).ready(function($) {
	
	var SET_BANNER='SET_BANNER';
	var success_post = $.post('/set-banner',
		{
			SET_BANNER:SET_BANNER,

		});
	success_post.done(function(data){
		//alert(data);
		var banner_image='<img class="banner-image" width="100%" src="'+data+'"></img>';
		$('.dynamic_timed_banner').html(banner_image);
	});
});
