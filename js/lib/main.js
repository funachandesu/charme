(function($) {
	// SmoothScroll
	$.smoothScroll = function(_o) {
		var _c = $.fn.extend({
			selector: 'a[href^="#"], area[href^="#"]',
			time: 1000
		}, _o);

		var _selector = _c.selector;
		var _time = _c.time;
		$.extend($.easing, { easeOutExpo: function (x, t, b, c, d) { return (t==d) ? b+c : c * (-Math.pow(2, -10 * t/d) + 1) + b; }});

		$(_selector).on('click',function() {
			var _href = $(this).attr('href');
			if (_href != "#") {
				var _posY = $(_href).offset().top;
				$('html, body').animate({
					scrollTop: _posY
				}, _time, 'easeOutExpo');
			}

			return false;
		});

	}

	var navGlobal = function() {
//		var $body = $('body');
//		var $header = $('#header');
		var $nav_global = $('.nav-global');
		var $btn_nav_global = $('#js-btn-nav-global');

		$btn_nav_global.on('click', function() {
//			$body.toggleClass('is-menu')
//			$header.toggleClass('is-menu');
			$nav_global.toggleClass('is-show')
			$btn_nav_global.toggleClass('is-open');

		})
		$nav_global.find('a').on('click', function() {
			$nav_global.removeClass('is-show')
			$btn_nav_global.removeClass('is-open');
		});
	}
    var navGlobals = function() {
        //		var $body = $('body');
        //		var $header = $('#header');
                var $nav_globals = $('.nav-globals');
                var $btn_nav_globals = $('#js-btn-nav-globals');

                $btn_nav_globals.on('click', function() {
        //			$body.toggleClass('is-menu')
        //			$header.toggleClass('is-menu');
                    $nav_globals.toggleClass('is-show')
                    $btn_nav_globals.toggleClass('is-open');

                })
                $nav_globals.find('a').on('click', function() {
                    $nav_globals.removeClass('is-show')
                    $btn_nav_globals.removeClass('is-open');
                });
            }
            $('.burger-btn').on('click',function(){//.btn_triggerをクリックすると
                $('.burger-btn').toggleClass('close');//.btn_triggerにcloseクラスを付与(ボタンのアニメーション)
                $('.nav-wrapper').fadeToggle(500);//.nav-wrapperが0.5秒でフェードイン(メニューのフェードイン)
                $('body').toggleClass('noscroll');//bodyにnoscrollクラスを付与(スクロールを固定)
               });
	// Initialize
	$(window).on('load', function() {
		//$.smoothScroll();
        navGlobal();
        navGlobals();
    });


    // faq
    $('.faq').on('click', function () {
        $(this).next().slideToggle();
        //openクラスをつける
        $(this).toggleClass("open");
        //クリックされていないfaqのopenクラスを取る
        $('.faq').not(this).removeClass('open');

        // 一つ開くと他は閉じるように
        $('.faq').not($(this)).next('.faq-answer').slideUp();
      });

})(jQuery);

var swiper = new Swiper(".clinic-slider", {
        slidesPerView: 1/5 + 1 + 1/5,
    centeredSlides: true,
    spaceBetween: 30,
		loop: true,
		autoplay: false,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
        breakpoints: {
            320: {
                spaceBetween: 30
            },
            768: {
                spaceBetween: 80
            },
        },
});
