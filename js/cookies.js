/* Set Dark Mode Cookies */
$(document).ready(function() {
	var darkMdVal = Cookies.get('darkmd');

	if(darkMdVal == 'true') {
		$('body').addClass('dark');
		$('#dark-md').addClass('active');
	}

	$('#dark-md').click(function() {
		if($('body').hasClass('dark')) {
			Cookies.set('darkmd','false');
			$(this).removeClass('active');
			$('body').removeClass('dark');
		} else {
			Cookies.set('darkmd','true');
			$(this).addClass('active');
			$('body').addClass('dark');
		}
	});

});