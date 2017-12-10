$(document).ready(function() {
	$('#menuButton, #menuBackground').click(function() {
		$('#mainMenu').toggleClass('activated');
		if($('#mainMenu').hasClass('activated')) {
			$('html').css('overflow', 'hidden');
			$('.img-cropper img').hide();
			//$('#container').css('overflow', 'hidden');
		} else {
			$('html').css('overflow', 'scroll');
			$('.img-cropper img').show();
			//$('#container').css('overflow', 'scroll');
		}
	});

	$('.expand-item').click(function() {
		if($('.expand-content').hasClass('collapsed')) {
			$('.expand-content').removeClass('collapsed');
			$('.expand-content').addClass('expanded');

		} else {
			$('.expand-content').removeClass('expanded');
			$('.expand-content').addClass('collapsed');
		}
	});
});
