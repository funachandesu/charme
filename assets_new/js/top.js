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

//  * ==========================================
//  * 6. ドロワーメニュー＆高度なスムーススクロール機能
//  * ==========================================

document.addEventListener("DOMContentLoaded", () => {
  // 共通要素とステート管理
  const state = {
    headerEl: document.querySelector(".l-header__wrap"),
    drawerIcon: document.querySelector(".p-drawer__icon"),
    drawer: document.querySelector(".p-drawer"),
    headerHeight: 0,
    isMenuOpen: false,
    isMenuOpenAtBreakpoint: false,
    breakpoint: 850,
  };

  // ヘッダー高さを更新
  const updateHeaderHeight = () => {
    state.headerHeight = state.headerEl?.offsetHeight || 0;
    // console.log("Header height updated:", state.headerHeight); // デバッグ用
  };

  // スムーススクロール（統合版・修正版）
  const smoothScrollTo = (targetId, closeDrawer = false) => {
    // console.log("Smooth scroll to:", targetId); // デバッグ用

    // ドロワーを閉じる必要がある場合
    if (closeDrawer && state.drawer?.classList.contains("js-show")) {
      closeMenu();
    }

    // #topは常にページ先頭へ
    if (targetId === "#top") {
      window.scrollTo({ top: 0, behavior: "smooth" });
      return;
    }

    const targetEl = document.querySelector(targetId);
    if (!targetEl) {
      console.warn("Target element not found:", targetId);
      return;
    }

    // ヘッダー高さを最新の状態に更新
    updateHeaderHeight();

    // ターゲット要素の位置を計算
    const targetPos = targetEl.getBoundingClientRect().top + window.pageYOffset;
    let offsetPos = targetPos - state.headerHeight;

    // console.log("Scroll calculation:", {
    //   targetPos,
    //   headerHeight: state.headerHeight,
    //   offsetPos,
    // }); // デバッグ用

    window.scrollTo({
      top: offsetPos,
      behavior: "smooth",
    });
  };

  // ドロワーメニュー操作
  const openMenu = () => {
    if (!state.drawer?.classList.contains("js-show")) {
      state.drawer.classList.add("js-show");
      state.drawerIcon?.classList.add("js-show");
      state.isMenuOpen = true;
    }
  };

  const closeMenu = () => {
    if (state.drawer?.classList.contains("js-show")) {
      state.drawer.classList.remove("js-show");
      state.drawerIcon?.classList.remove("js-show");
      state.isMenuOpen = false;
    }
  };

  const toggleMenu = () => {
    if (!state.drawer?.classList.contains("js-show")) {
      openMenu();
    } else {
      closeMenu();
    }
  };

  // リサイズ処理
  const handleResize = () => {
    updateHeaderHeight();

    const windowWidth = window.innerWidth;
    if (windowWidth > state.breakpoint && state.isMenuOpenAtBreakpoint) {
      closeMenu();
      state.isMenuOpenAtBreakpoint = false;
    } else if (windowWidth <= state.breakpoint && state.drawer?.classList.contains("js-show")) {
      state.isMenuOpenAtBreakpoint = true;
    }
  };

  // メニュー外クリック処理
  const handleOutsideClick = (event) => {
    if (state.drawer?.classList.contains("js-show") && !state.drawer.contains(event.target) && !state.drawerIcon?.contains(event.target)) {
      closeMenu();
    }
  };

  // ページ内リンクのクリック処理（修正版）
  const handleAnchorClick = (event, closeDrawer = false) => {
    // console.log("Anchor click detected"); // デバッグ用
    event.preventDefault();
    event.stopPropagation(); // 追加：イベントの伝播を停止

    const href = event.currentTarget.getAttribute("href");
    // console.log("Link href:", href); // デバッグ用

    if (href && href.startsWith("#")) {
      // 少し遅延を入れてスムーススクロールを実行
      setTimeout(() => {
        smoothScrollTo(href, closeDrawer);
      }, 10);
    }
  };

  // WordPressの絶対URLを含むページ内リンクの処理
  const handleWordPressAnchorClick = (event, hashPart, closeDrawer = false) => {
    // console.log("WordPress anchor click detected:", hashPart); // デバッグ用
    event.preventDefault();
    event.stopPropagation();

    // 少し遅延を入れてスムーススクロールを実行
    setTimeout(() => {
      smoothScrollTo(hashPart, closeDrawer);
    }, 10);
  };

  // 初期化
  updateHeaderHeight();

  // イベントリスナー設定
  window.addEventListener("resize", handleResize);
  document.addEventListener("click", handleOutsideClick);

  // ドロワーアイコンのクリック
  state.drawerIcon?.addEventListener("click", (event) => {
    event.stopPropagation();
    toggleMenu();
  });

  // 全てのページ内リンクにイベントを設定（修正版）
  const setupAnchorLinks = () => {
    // 1. 通常のページ内リンク（#で始まる）
    document.querySelectorAll('a[href^="#"]').forEach((link) => {
      const isDrawerLink = link.closest(".p-drawer__body");

      // 既存のイベントリスナーを削除（重複防止）
      link.removeEventListener("click", handleAnchorClick);

      link.addEventListener("click", (event) => {
        handleAnchorClick(event, isDrawerLink);
      });
    });

    // 2. WordPressの絶対URLを含むページ内リンク
    document.querySelectorAll('a[href*="#"]').forEach((link) => {
      const href = link.getAttribute("href");
      const currentUrl = window.location.href.split("#")[0]; // 現在のURLからハッシュを除去

      // 同じページ内のハッシュリンクかチェック
      if (href && href.includes("#")) {
        const linkUrl = href.split("#")[0]; // リンクのURLからハッシュを除去
        const hashPart = "#" + href.split("#")[1]; // ハッシュ部分を取得

        // 同じページ内のリンクの場合（URLが同じ、または空の場合）
        if (linkUrl === currentUrl || linkUrl === "" || linkUrl === window.location.origin + window.location.pathname) {
          const isDrawerLink = link.closest(".p-drawer__body");

          // 既存のイベントリスナーを削除（重複防止）
          link.removeEventListener("click", handleWordPressAnchorClick);

          link.addEventListener("click", (event) => {
            handleWordPressAnchorClick(event, hashPart, isDrawerLink);
          });
        }
      }
    });
  };

  // 初期設定
  setupAnchorLinks();

  // ドロワー内のリンククリック時にイベント伝播を停止
  state.drawer?.addEventListener("click", (event) => {
    if (event.target.tagName === "A") {
      event.stopPropagation();
    }
  });

  // 追加：p-drawer内のaタグをクリックした際にメニューを閉じる
  const setupDrawerCloseLinks = () => {
    // p-drawer内の全てのaタグに対してイベントを設定
    document.querySelectorAll(".p-drawer a").forEach((link) => {
      link.addEventListener("click", (event) => {
        event.stopPropagation();
        closeMenu();
      });
    });
  };

  // ドロワー内のリンクのイベント設定
  setupDrawerCloseLinks();
});
