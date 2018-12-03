$(document).ready(function () {
	//------------ Header Typer ------------------//
	var typed = new Typed('#typed', {
		stringsElement: '#typed-strings',
		typeSpeed: 65,
		backSpeed: 20,
		loop: true,
		cursorChar: '_',
		smartBackspace: true,
		shuffle: false,
		backDelay: 700

	});

	//--------- Sticky Navigation -----------------//
	$(".js--section-services").waypoint(function (direction) {
		if (direction == "down") {
			$("nav").addClass("sticky");
		} else {
			$("nav").removeClass("sticky");
		}
	}, {
		offset: "60px"
	});

	//------------ Navigation Scroll -------------------//
	// Select all links with hashes
	$('a[href*="#"]')
		// Remove links that don't actually link to anything
		.not('[href="#"]')
		.not('[href="#0"]')
		.click(function (event) {
			// On-page links
			if (
				location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
				location.hostname == this.hostname
			) {
				// Figure out element to scroll to
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				// Does a scroll target exist?
				if (target.length) {
					// Only prevent default if animation is actually gonna happen
					event.preventDefault();
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000, function () {
						// Callback after animation
						// Must change focus!
						var $target = $(target);
						$target.focus();
						if ($target.is(":focus")) { // Checking if the target was focused
							return false;
						} else {
							$target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
							$target.focus(); // Set focus again
						};
					});
				}
			}
		});


	//------------ Animation ---------------------//
	$(".js--animation-contact").waypoint(function (direction) {
		$(".js--animation-contact .phone-info").addClass("animated fadeInDown");
		$(".js--animation-contact .email").addClass("animated fadeInUp");
		$(".js--animation-contact address").addClass("animated fadeInUp");
	}, {
		offset: '50%'
	});


	//------------ Our technologies ------------------//
	$(".our-tech-icons").slick({
		pauseOnHover: false,
		dots: true,
		slidesToShow: 6,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		accessibility: false,
		arrows: false,
	});


	//-------- Portfolio ----------//
	$(".portfolio-container").slick({
		dots: true,
		slidesToScroll: 1,
		accessibility: true,
		arrows: true,
		speed: 1000,
		autoplay: false,
		draggable: true
	});


	//------------ Developments Process ------------------//
	$('#section-4 li a:not(:first)').addClass('inactive');
	$('#section-4 .tab-content').hide();
	$('#section-4 .tab-content:first').show();

	$('#section-4 li a').hover(function () {
		var t = $(this).attr('id');
		if ($(this).hasClass('inactive')) {
			$('#section-4 li a').addClass('inactive');
			$(this).removeClass('inactive');
			$(this).addClass('active');
			$('.tab-content').hide();
			$('#' + t.replace("item", "content")).show()
		}
	});


	//------------ Customer's Review ------------------//
	$(".section-customer-review .section-content").slick({
		centerMode: true,
		slidesToShow: 3,
		arrows: false,
		dots: true,
		speed: 1000,
		autoplay: true,
		responsive: [{
				breakpoint: 769,
				settings: {
					arrows: false,
					centerMode: false,
					centerPadding: '40px',
					slidesToShow: 2
				}
	},
			{
				breakpoint: 480,
				settings: {
					arrows: false,
					centerMode: false,
					slidesToShow: 1,
					dots: false
				}
	}]
	});


	//---------------- Footer -----------------//
	$(".made-with").slick({
		pauseOnHover: false,
		dots: false,
		autoplay: true,
		autoplaySpeed: 2000,
		accessibility: false,
		arrows: false,
		vertical: true
	});
});
