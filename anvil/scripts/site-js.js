jQuery(document).ready(function($) {

	$(".mobile-trigger").click(function(e){
		e.preventDefault();

		$(this).toggleClass('open');
		$('.mobile-nav-container').slideToggle(200);
	});

	$("#mobile-nav > li").find('.sub-menu').parent().children('a').after('<span class="menu-slide"></span>');

	$("#mobile-nav > li .menu-slide").on('click',function(e){
		$(this).toggleClass('open');
		e.preventDefault();
		$(this).parent().find('> .sub-menu').slideToggle(200);
	});

	$('.slider').flexslider({
		animation: "slide"
	});

});