(function ($) {
  var mv = function () {
    var $mv = $('#js-mv');
    var $mv_mv = $mv.find('.mv');
    var current = 0;
    var length = $mv_mv.length;
    var timerId = null;

    function setMv() {
      clearInterval(timerId);
      timerId = null;

      $mv_mv.removeClass('current').eq(current).addClass('current');
      timerId = setInterval(function () {
        current++;
        if (current >= length) {
          current = 0;
        }
        setMv();
      }, 5000);
    }
    setMv();
  };

  $(window).on('load', function () {
    mv();
  });

  //accordion_About
  $('.sec-about-total').on('click', function () {
    $(this).children().eq(1).slideToggle(300);
    $(this).siblings().find('.sec-about-intro-in i').removeClass('rotate-fa');
    $(this).find('.fa').toggleClass('rotate-fa');
    $('.sec-about-total .sec-about-concierge')
      .not($(this).children().eq(1))
      .slideUp(300);
  });
  //accordion_Reason
  $('.sec-in').on('click', function () {
    $(this).children().eq(1).slideToggle(300);
    $(this).siblings().find('.tit-sec free-reason i').removeClass('rotate-fa');
    $(this).find('.fa').toggleClass('rotate-fa');

    $('.sec-in .txt-reason-total ').not($(this).children().eq(1)).slideUp(300);
    $('.sec-in .txt-free-reason ').not($(this).children().eq(1)).slideUp(300);
  });

  //accordion_free_Reason
  $('.sec-in-reason').on('click', function () {
    $(this).children().eq(1).slideToggle(300);
    $(this).siblings().find('.tit-sec i').removeClass('rotate-fa');
    $(this).find('.fa').toggleClass('rotate-fa');

    $('.sec-in-reason .txt-free-reason ')
      .not($(this).children().eq(1))
      .slideUp(300);
  });

  function switchByWidth() {
    if (window.matchMedia('(max-width: 767px)').matches) {
      //スマホ処理
      var loop = setInterval(function () {
        //li先頭要素のクローンを作成
        var clone = $('.list-topics li:first').clone(true);
        //li先頭要素のマージントップにマイナスを指定しアニメーションさせる
        $('.list-topics li:first').animate(
          {
            marginTop: '-84px',
          },
          {
            duration: 1500,
            complete: function () {
              //処理完了時に先頭要素を削除
              $('.list-topics li:first').remove();
              //クローンをliの最後に追加
              clone.clone(true).insertAfter($('.list-topics li:last'));
            },
          }
        );
      }, 3000);
    } else if (window.matchMedia('(min-width:768px)').matches) {
      //PC処理
      var loop = setInterval(function () {
        //li先頭要素のクローンを作成
        var clone = $('.list-topics li:first').clone(true);
        //li先頭要素のマージントップにマイナスを指定しアニメーションさせる
        $('.list-topics li:first').animate(
          {
            marginTop: '-133px',
          },
          {
            duration: 1500,
            complete: function () {
              //処理完了時に先頭要素を削除
              $('.list-topics li:first').remove();
              //クローンをliの最後に追加
              clone.clone(true).insertAfter($('.list-topics li:last'));
            },
          }
        );
      }, 3000);
    }
  }
  window.onload = switchByWidth;
  window.onresize = switchByWidth;

  function switchByWidths() {
    if (window.matchMedia('(max-width: 425px)').matches) {
      //スマホ処理
      var loop = setInterval(function () {
        //li先頭要素のクローンを作成
        var clone = $('.list-topicss li:first').clone(true);
        //li先頭要素のマージントップにマイナスを指定しアニメーションさせる
        $('.list-topicss li:first').animate(
          {
            marginTop: '-120px',
          },
          {
            duration: 1500,
            complete: function () {
              //処理完了時に先頭要素を削除
              $('.list-topicss li:first').remove();
              //クローンをliの最後に追加
              clone.clone(true).insertAfter($('.list-topicss li:last'));
            },
          }
        );
      }, 3000);
    } else if (window.matchMedia('(max-width:500px)').matches) {
      //PC処理
      var loop = setInterval(function () {
        //li先頭要素のクローンを作成
        var clone = $('.list-topicss li:first').clone(true);
        //li先頭要素のマージントップにマイナスを指定しアニメーションさせる
        $('.list-topicss li:first').animate(
          {
            marginTop: '-135px',
          },
          {
            duration: 1500,
            complete: function () {
              //処理完了時に先頭要素を削除
              $('.list-topicss li:first').remove();
              //クローンをliの最後に追加
              clone.clone(true).insertAfter($('.list-topicss li:last'));
            },
          }
        );
      }, 3000);
    } else if (window.matchMedia('(max-width:565px)').matches) {
      //PC処理
      var loop = setInterval(function () {
        //li先頭要素のクローンを作成
        var clone = $('.list-topicss li:first').clone(true);
        //li先頭要素のマージントップにマイナスを指定しアニメーションさせる
        $('.list-topicss li:first').animate(
          {
            marginTop: '-135px',
          },
          {
            duration: 1500,
            complete: function () {
              //処理完了時に先頭要素を削除
              $('.list-topicss li:first').remove();
              //クローンをliの最後に追加
              clone.clone(true).insertAfter($('.list-topicss li:last'));
            },
          }
        );
      }, 3000);
    } else if (window.matchMedia('(max-width:630px)').matches) {
      //PC処理
      var loop = setInterval(function () {
        //li先頭要素のクローンを作成
        var clone = $('.list-topicss li:first').clone(true);
        //li先頭要素のマージントップにマイナスを指定しアニメーションさせる
        $('.list-topicss li:first').animate(
          {
            marginTop: '-150px',
          },
          {
            duration: 1500,
            complete: function () {
              //処理完了時に先頭要素を削除
              $('.list-topicss li:first').remove();
              //クローンをliの最後に追加
              clone.clone(true).insertAfter($('.list-topicss li:last'));
            },
          }
        );
      }, 3000);
    } else if (window.matchMedia('(max-width:700px)').matches) {
      //PC処理
      var loop = setInterval(function () {
        //li先頭要素のクローンを作成
        var clone = $('.list-topicss li:first').clone(true);
        //li先頭要素のマージントップにマイナスを指定しアニメーションさせる
        $('.list-topicss li:first').animate(
          {
            marginTop: '-150px',
          },
          {
            duration: 1500,
            complete: function () {
              //処理完了時に先頭要素を削除
              $('.list-topicss li:first').remove();
              //クローンをliの最後に追加
              clone.clone(true).insertAfter($('.list-topicss li:last'));
            },
          }
        );
      }, 3000);
    } else {
      //PC処理
      var loop = setInterval(function () {
        //li先頭要素のクローンを作成
        var clone = $('.list-topicss li:first').clone(true);
        //li先頭要素のマージントップにマイナスを指定しアニメーションさせる
        $('.list-topicss li:first').animate(
          {
            marginTop: '-200px',
          },
          {
            duration: 1500,
            complete: function () {
              //処理完了時に先頭要素を削除
              $('.list-topicss li:first').remove();
              //クローンをliの最後に追加
              clone.clone(true).insertAfter($('.list-topicss li:last'));
            },
          }
        );
      }, 3000);
    }
  }
  window.onload = switchByWidths;
  window.onresize = switchByWidths;

  var $accBtn = $('.readmore-btn'),
    $accContents = $('.about-content');

  $accContents.hide(); //contentsを全て隠す
  $accBtn.each(function () {
    var flag = 'close'; //flagを初期値を設定
    $(this).click(function (e) {
      e.preventDefault(); //aタグのリンク無効化
      $(this).toggleClass('is-active').next().slideToggle(); //すぐ次の要素をスライド

      if (flag == 'close') {
        //もしflagがcloseだったら
        $(this).text('CLOSE');
        flag = 'open'; //flagをopenにする
      } else {
        //もしflagがopenだったら
        $(this).text('READ MORE');
        flag = 'close'; //flagをcloseにする
      }
    });
  });

  var $res1Btn = $('.readmore-btn-res1'),
    $res1Contents = $('.reason-body1');

  $res1Contents.hide(); //contentsを全て隠す
  $res1Btn.each(function () {
    var flag = 'close'; //flagを初期値を設定
    $(this).click(function (e) {
      e.preventDefault(); //aタグのリンク無効化
      $(this).toggleClass('is-active').next().slideToggle(); //すぐ次の要素をスライド

      if (flag == 'close') {
        //もしflagがcloseだったら
        $(this).text('CLOSE');
        flag = 'open'; //flagをopenにする
      } else {
        //もしflagがopenだったら
        $(this).text('READ MORE');
        flag = 'close'; //flagをcloseにする
      }
    });
  });
  var $res2Btn = $('.readmore-btn-res2'),
    $res2Contents = $('.reason-body2');

  $res2Contents.hide(); //contentsを全て隠す
  $res2Btn.each(function () {
    var flag = 'close'; //flagを初期値を設定
    $(this).click(function (e) {
      e.preventDefault(); //aタグのリンク無効化
      $(this).toggleClass('is-active').next().slideToggle(); //すぐ次の要素をスライド

      if (flag == 'close') {
        //もしflagがcloseだったら
        $(this).text('CLOSE');
        flag = 'open'; //flagをopenにする
      } else {
        //もしflagがopenだったら
        $(this).text('READ MORE');
        flag = 'close'; //flagをcloseにする
      }
    });
  });
  var $res3Btn = $('.readmore-btn-res3'),
    $res3Contents = $('.reason-body3');

  $res3Contents.hide(); //contentsを全て隠す
  $res3Btn.each(function () {
    var flag = 'close'; //flagを初期値を設定
    $(this).click(function (e) {
      e.preventDefault(); //aタグのリンク無効化
      $(this).toggleClass('is-active').next().slideToggle(); //すぐ次の要素をスライド

      if (flag == 'close') {
        //もしflagがcloseだったら
        $(this).text('CLOSE');
        flag = 'open'; //flagをopenにする
      } else {
        //もしflagがopenだったら
        $(this).text('READ MORE');
        flag = 'close'; //flagをcloseにする
      }
    });
  });

  function firstimg(){

    $('.first-img p').fadeIn(500);
        $('.first-img span').fadeIn(500);
      };
      setTimeout(firstimg, 100);
      window.addEventListener('DOMContentLoaded', function(){
          var img_elements = document.getElementById('firstimgs');
          img_elements.addEventListener('load', (e) => {
              console.log(" load");
              $('.first-img').delay(750).fadeOut(500);
              $('#main').fadeIn(800);

          });
              img_elements.src = img_elements.getAttribute("src");

        });
    })(jQuery);
// Go top button
jQuery(document).scroll(function () {
  if (jQuery(document).scrollTop() < 350) {
    jQuery('a.gotop').removeClass('active');
  } else {
    jQuery('a.gotop').addClass('active');
  }
});
jQuery(document).scroll(function () {
  if (jQuery(document).scrollTop() < 130) {
    jQuery('.headers').removeClass('active');
  } else {
    jQuery('.headers').addClass('active');
  }
});
