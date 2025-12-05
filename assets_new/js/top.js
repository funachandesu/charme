//  * ==========================================
//  * 1. js-top-campaign-carousel スライダー
//  * ==========================================
document.addEventListener("DOMContentLoaded", function () {
  const element = document.querySelector(".js-top-campaign-carousel");
  if (!element || !window.Splide) return;

  // Splide本体のオプション
  const options = {
    type: "loop",
    perPage: "auto",
    speed: 1000,
    perMove: 1,
    arrows: false,
    pagination: true,
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

  const splide = new Splide(element, options);

  /* ----------------------------------------------------
   * ★ overflow イベントでスライド不足を検知
   * mount() の前に登録！
   * ---------------------------------------------------- */
  splide.on("overflow", function (isOverflow) {
    if (!isOverflow) {
      // ★ スライド不足（isOverflow = false）
      element.classList.remove("is-overflow");

      // ページネーション非表示
      splide.options = { pagination: false };

      // ループ時は clone が邪魔 → クローンを無効化
      splide.options = { clones: 0 };

      // 位置調整
      splide.go(0);
    } else {
      // ★ スライドが十分（isOverflow = true）
      element.classList.add("is-overflow");

      splide.options = {
        pagination: true,
        clones: undefined, // Splide にデフォルト clone 数を任せる
      };
    }
  });

  // 初期化
  splide.mount();

  /* ----------------------------------------------------
   * リサイズ時：refresh() は overflow 判定も再評価される
   * ---------------------------------------------------- */
  let resizeTimeout;
  window.addEventListener("resize", function () {
    clearTimeout(resizeTimeout);
    resizeTimeout = setTimeout(() => {
      splide.refresh();
    }, 120);
  });
});


//  * ==========================================
//  * 2. js-top-clinic-carousel スライダー
//  * ==========================================
document.addEventListener("DOMContentLoaded", function () {
  const element = document.querySelector(".js-top-clinic-carousel");
  if (!element) return;

  let splide = null;

  // 現在の幅を記録
  let prevWidth = window.innerWidth;

  // ----------- 初期化関数 -----------
  const initSplide = () => {
    const isSP = window.innerWidth < 768;

    const baseOptions = {
      type: "loop",
      drag: false,
      arrows: true,
      pagination: false,
      autoWidth: true,
      gap: "6.25rem",
      breakpoints: {
        1330: {
          gap: "6rem",
        },
        767.9: {
          arrows: false,
          gap: "3.5rem",
        },
      },
    };

    // SP のみ autoScroll を追加
    if (isSP) {
      baseOptions.autoScroll = {
        speed: 0.64,
        pauseOnHover: false,
        pauseOnFocus: false,
      };
    }

    // 既存インスタンスがあれば破棄
    if (splide) splide.destroy(true);

    // mount（SP は autoScroll 付き）
    splide = new Splide(element, baseOptions);
    splide.mount(isSP ? window.splide.Extensions : {});
  };

  // 初回
  initSplide();

  // ----------- 横幅のみリサイズを検知 -----------
  let resizeTimer;
  window.addEventListener("resize", () => {
    const currentWidth = window.innerWidth;

    // 横幅が変わった時のみ
    if (currentWidth !== prevWidth) {
      clearTimeout(resizeTimer);
      resizeTimer = setTimeout(() => {
        initSplide();
        prevWidth = currentWidth; // 更新
      }, 150);
    }
  });
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

//  * ==========================================
//  * 4. js-top-column-carousel スライダー
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

  const element = document.querySelector(".js-top-column-carousel");
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
//  * 5. js-float-cta スライダー
//  * ==========================================

document.addEventListener("DOMContentLoaded", () => {
  const floatCta = document.getElementById("js-float-cta");
  const closeBtn = document.getElementById("js-float-cta-close");

  if (!floatCta) return;

  // 0.5s 後に is-active を付与
  setTimeout(() => {
    floatCta.classList.add("is-active");
  }, 500);

  // 閉じるボタンクリック → is-hidden を付与
  if (closeBtn) {
    closeBtn.addEventListener("click", () => {
      floatCta.classList.add("is-hidden");
      floatCta.classList.remove("is-active");
    });
  }
});

// ドロワーメニュー機能はcommon.jsに移動しました
