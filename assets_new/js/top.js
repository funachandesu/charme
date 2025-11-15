//  * ==========================================
//  * 1. js-top-campaign-carousel スライダー
//  * ==========================================
document.addEventListener("DOMContentLoaded", function () {
  // Splide本体のオプション（SP/PC差分はbreakpointsへ）
  const options = {
    type: "loop",
    perPage: "auto",
    speed: 1000,
    perMove: 1,
    arrows: false,
    pagination: true, //ページネーションのカスタマイズは、https://ja.splidejs.com/guides/pagination/
    focus: false,
    gap: "3.5rem",
    trimSpace: true,
    autoWidth: true,
    cloneStatus: false,
    updateOnMove: true,
    destroy: true,
    reducedMotion: {
      speed: 1000,
      rewindSpeed: 1000,
    },
    breakpoints: {
      767.9: {
        focus: "center",
        gap: "3.5rem",
        destroy: false,
      },
    },
  };

  const element = document.querySelector(".js-top-campaign-carousel");
  if (!element || !window.Splide) return;

  const splide = new Splide(element, options);
  splide.mount();

  // リサイズ時はデバウンスしてrefreshのみ実施
  let resizeTimeout;
  window.addEventListener("resize", function () {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      splide.refresh(); // breakpointsの切り替えも反映
    }, 100);
  });
});

//  * ==========================================
//  * 2. js-top-clinic-carousel スライダー
//  * ==========================================
document.addEventListener("DOMContentLoaded", function () {
  // スライダーの設定オプション
  const options = {
    type: "loop",
    drag: false,
    arrows: true,
    pagination: false,
    autoWidth: true,
    gap: 16,
    autoScroll: {
      speed: 0.9,
      pauseOnHover: false,
      pauseOnFocus: false,
    },
    breakpoints: {
      767.9: {
        gap: 10,
        autoScroll: {
          speed: 0.64, // 64秒で1周
          pauseOnHover: false,
          pauseOnFocus: false,
        },
      },
    },
  };

  // スライダーを初期化
  const element = document.querySelector(".js-top-clinic-carousel");
  if (element) {
    const splide = new Splide(element, options);
    splide.mount(window.splide.Extensions);

    // リサイズ時の処理
    let resizeTimeout;
    window.addEventListener("resize", function () {
      clearTimeout(resizeTimeout);
      resizeTimeout = setTimeout(() => {
        splide.refresh();
      }, 100);
    });
  }
});

//  * ==========================================
//  * 3. js-top-case-carousel スライダー
//  * ==========================================
document.addEventListener("DOMContentLoaded", function () {
  // Splide本体のオプション（SP/PC差分はbreakpointsへ）
  const options = {
    type: "loop",
    perPage: "auto",
    speed: 1000,
    perMove: 1,
    arrows: false,
    pagination: true, //ページネーションのカスタマイズは、https://ja.splidejs.com/guides/pagination/
    focus: false,
    gap: "3.5rem",
    trimSpace: true,
    autoWidth: true,
    cloneStatus: false,
    updateOnMove: true,
    destroy: true,
    reducedMotion: {
      speed: 1000,
      rewindSpeed: 1000,
    },
    breakpoints: {
      767.9: {
        focus: "center",
        gap: "3.5rem",
        destroy: false,
      },
    },
  };

  const element = document.querySelector(".js-top-case-carousel");
  if (!element || !window.Splide) return;

  const splide = new Splide(element, options);
  splide.mount();

  // リサイズ時はデバウンスしてrefreshのみ実施
  let resizeTimeout;
  window.addEventListener("resize", function () {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      splide.refresh(); // breakpointsの切り替えも反映
    }, 100);
  });
});
