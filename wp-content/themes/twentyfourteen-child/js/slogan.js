(function($) {
	
	var home_url = "http://douceursetvolupte.com/"; //http://localhost/douceursetvolupte/
	/* cacher le slogan sur la page d 'accueil uniquement */
	$(window).load(function(){
		if ( window.location.href == home_url ){ 
			$('.site-description').css('display', 'none');
		}
	});




})(jQuery);
