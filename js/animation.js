
    jQuery(window).on("load", function () {
      jQuery('.animated-row').each(function() {
          var jQuerythis = jQuery(this);
          jQuerythis.find('.animate').each(function(i) {
              var jQueryitem = jQuery(this);
              var animation = jQueryitem.data('animate');
              jQueryitem.on('inview', function(event, isInView) {
                  if (isInView) {
                      setTimeout(function() {
                          jQueryitem.addClass('animated ' + animation).removeClass('animate');
                      }, i * 50);
                  } else if (!screencheck(767)) {
                      jQueryitem.removeClass('animated ' + animation).addClass('animate');
                  }
              });
          });
      });


// eachTextAnimeにappeartextというクラス名を付ける定義
function EachTextAnimeControl() {
	console.log("okpc");
	jQuery('.sec-title').each(function () {
		var elemPos = jQuery(this).offset().top - 50;
		var scroll = jQuery(window).scrollTop();
		var windowHeight = jQuery(window).height();
		if (scroll >= elemPos - windowHeight) {
			jQuery(this).addClass("scroani");

		} else {
			jQuery(this).removeClass("scroani");
		}
	});
}

function EachTextAnimeSPControl() {
console.log("oksp");
	jQuery('.spc').each(function () {
		var elemPos = jQuery(this).offset().top - 50;
		var scroll = jQuery(window).scrollTop();
		var windowHeight = jQuery(window).height();
		if (scroll >= elemPos - windowHeight) {
			jQuery(this).addClass("scro");	
			console.log("ok");

		} else {
			jQuery(this).removeClass("scro");
		}
	});
}

// 画面をスクロールをしたら動かしたい場合の記述
jQuery(window).scroll(function () {
	EachTextAnimeSPControl();
	EachTextAnimeControl();
	console.log("ok");
/* アニメーション用の関数を呼ぶ*/
});// ここまで画面をスクロールをしたら動かしたい場合の記述

});

AOS.init();