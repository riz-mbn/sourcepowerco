(function($){

    var app = {
        onReady: function(){
			app.formFunction();
        },	
        onLoad: function(){
  			

			$(document).foundation();

            app.utils();
			app.stickyHeader();
			//app.mobileMenu();
			app.smoothscroll();
			//app.sliders();
			//app.bannerBgParallax();
			//AOS.init();

		},
		utils: function(){
			headerNav	= $('#header-nav-mobile');
			headerNavToggler	= $('.header-nav-toggler');

			headerNavToggler.on('click',function(e){
				e.preventDefault();
			});
			headerNav.on('click',function(e){
				headerNav.foundation('toggle');
			});
			$('.mobile-menu-wrap a').on('click',function(e){
				if ($(this.hash || ($('a', this)[0] && $('a', this)[0].hash)).length > 0 ){
					e.preventDefault();
					headerNav.foundation('toggle');
				}
			});

		},
		onScroll:function(){
			var scrolled	= window.pageXOffset || window.scrollY,
				header		= $('#header');
				headerNav	= $('#header-nav-mobile');
				contactForm	= $('.contact-form-container.is-desktop');
				callContainer	= $('.call-container');

			if(scrolled >= 280){
				header.addClass('fixed');
				headerNav.addClass('fixed');
				if ( typeof contactForm !== "undefined"){
					contactForm.addClass('fixed');
					callContainer.addClass('hide');
				}
			}else{
				header.removeClass('fixed');
				headerNav.removeClass('fixed');
				if ( typeof contactForm !== "undefined"){
					contactForm.removeClass('fixed');
					callContainer.removeClass('hide');
					
				}
			}
		},
		stickyHeader: function(){
			$(window).on('scroll', app.onScroll);
			app.onScroll();
		},
		mobileMenu: function(){
			var menu		= new MmenuLight(document.querySelector('#header-nav'), "(max-width: 1023px)"),
				navigator	= menu.navigation(),
				drawer		= menu.offcanvas();

			$('.header-nav-toggler').on('click', function(e){
				e.preventDefault();
				drawer.open();
			});
		},
        smoothscroll: function(){
			$('.smoothscrolling').on('click', function(){
				var headerH	= $('.header').height();

				$('html, body').animate({
					scrollTop: $(this.hash || $('a', this)[0].hash).offset().top - headerH
				}, { duration: 1000 });
				return false;
			});
		},
		sliders: function(){
			$('.banner .bg-slider, .banner .image-slider').slick({
				slidesToShow: 1,
				infinite: true,
				dots: false,
				arrows: false,
				autoplay: true,
				autoplaySpeed: 5000,
				pauseOnHover: false,
				fade: true
			});
			
			$('.quote-slider').slick({
				slidesToShow: 1,
				infinite: true,
				dots: false,
				arrows: true,
				autoplay: true,
				autoplaySpeed: 5000,
				pauseOnHover: false,
				
				adaptiveHeight: true,
				prevArrow: $('.quote-slider-arrows .prev'),
				nextArrow: $('.quote-slider-arrows .next'),
			});
		},
		bannerBgParallax: function(){
			$(window).on('scroll', function(){
				var scrolled = this.scrollY || this.pageYOffset;

				$('.banner .bg-slider').css('top', scrolled/3);
			});
		},
		formFunction: function(){
			var formGrp = $('.contact-form-container .form-group');
			var formGrpText = formGrp.find('input[type="text"], input[type="tel"], input[type="email"], textarea');
			if (typeof formGrp !== "undefined"){
				
				formGrpText.on('focusin focusout', function(e){
					
					if (e.type === "focusin" && !$(this).hasClass('focus')){
						$(this).closest('.form-group').addClass('focus');
					}
					if (e.type === "focusout" && $(this).val() == ""){
						$(this).closest('.form-group').removeClass('focus');
					}
				});
			}
		}
    }


    document.addEventListener('DOMContentLoaded', app.onReady);
    window.addEventListener('load', app.onLoad);

})(jQuery);
