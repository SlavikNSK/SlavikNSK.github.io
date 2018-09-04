$(function() {
	/* Открытие & Закрытие меню */
	$('.hamburger').on('click', function(){
		$('.hamburger').toggleClass('is-active');
		$('.header').toggleClass('is-open');
	});	 

	//open/close primary navigation
	$('.hamburger').on('click', function() {		
		//in firefox transitions break when parent overflow is changed, so we need to wait for the end of the trasition to give the body an overflow hidden
		if( $('.cd-primary-nav').hasClass('is-visible') ) {			
			$('body').removeClass('overflow-hidden');
			$('.cd-primary-nav').removeClass('is-visible');
			$('.navbar-link').removeClass('disp-none');
			$('.navbar').removeClass('navbar-menu-open');
			$('.logo-img').removeClass('navbar-menu-open');
			$('.site-title').removeClass('site-title-menu-open');
			$('.hamburger-inner').removeClass('hamburger-menu-open');
		} else {			
			$('body').addClass('overflow-hidden');
			$('.cd-primary-nav').addClass('is-visible');
			$('.navbar-link').addClass('disp-none');
			$('.navbar').addClass('navbar-menu-open');
			$('.logo-img').addClass('navbar-menu-open');
			$('.site-title').addClass('site-title-menu-open');
			$('.hamburger-inner').addClass('hamburger-menu-open');
		}
	});

	$('.road-to-us').on('click', function(e) {	
		var scroll_el = $(this).attr('href'); // возьмем содержимое атрибута href, должен быть селектором, т.е. например начинаться с # или .
    		top = $(scroll_el).offset().top;

    $('body,html').animate({scrollTop: top}, 1500);
  });
	/*$(".owl-carousel").owlCarousel({
		autoplay: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
		items: 2,
    loop: true,
		margin: 10,
		responsive:{
        0:{
            items:1
        },
        480:{
            items:2
        },
        992:{
            items:3
        }
    }
	});*/
	/*$(window).on('load', function() {
		$('.preloader').delay(1000).fadeOut();
	})*/
});