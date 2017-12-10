$(document).ready(function() {
	$('#menuButton, #menuBackground').click(function() {
		$('#mainMenu').toggleClass('activated');
		if($('#mainMenu').hasClass('activated')) {
			$('html').css('overflow', 'hidden');
			//$('#container').css('overflow', 'hidden');
		} else {
			$('html').css('overflow', 'scroll');
			//$('#container').css('overflow', 'scroll');
		}
	});

	$('.expand-item').click(function() {
		if($('.expand-content').hasClass('collapsed')) {
			$('.expand-content').removeClass('collapsed');
			$('.expand-content').addClass('expanded');
			$('#mainMenu .expand-item:after').html(' x')
		} else {
			$('.expand-content').removeClass('expanded');
			$('.expand-content').addClass('collapsed');
		}
	});
});
