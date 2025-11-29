//  * ==========================================
//  * 0. ヘッダースクロール時の背景色変更
//  * ==========================================

(function () {
  const header = document.querySelector(".l-header");
  if (!header) return;

  const handleScroll = () => {
    if (window.scrollY > 0) {
      header.classList.add("is-scrolled");
    } else {
      header.classList.remove("is-scrolled");
    }
  };

  // 初期状態をチェック
  handleScroll();

  // スクロールイベント
  window.addEventListener("scroll", handleScroll, { passive: true });
})();

//  * ==========================================
//  * 1. 動的高さ調整機能
//  * ==========================================

(function () {
  /**
   * is-heightクラスを持つ要素の高さを100vhから引いて
   * 各セクションに反映
   */
  const setUnderSectionHeight = () => {
    const heightElements = document.querySelectorAll(".is-height");
    const sections = document.querySelectorAll(".l-under-main, .l-main");

    // is-heightクラスを持つ全ての要素の高さを合計
    let totalHeight = 0;
    heightElements.forEach((element) => {
      totalHeight += element.getBoundingClientRect().height;
    });

    const availableHeight = window.innerHeight - totalHeight;

    // 直接 style に書き込む
    sections.forEach((section) => {
      section.style.minHeight = `${availableHeight}px`;
    });

    // もし CSS 変数で使いたければこちらも併用可
    document.documentElement.style.setProperty("--under-section-h", `${availableHeight}px`);
  };

  // 初期化 + リサイズ時
  window.addEventListener("load", setUnderSectionHeight);
  window.addEventListener("resize", setUnderSectionHeight);
})();

//  * ==========================================
//  * 2. スムーススクロール機能（シンプル版）
//  * ==========================================
document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll('a[href^="#"]');
  links.forEach((item) => {
    item.addEventListener("click", (event) => {
      event.preventDefault();
      const targetId = item.getAttribute("href");
      const target = document.querySelector(targetId);
      if (target) {
        const headerOffset = document.querySelector(".l-header").offsetHeight; // headerの高さを取得
        const elementPosition = target.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.scrollY - headerOffset;
        window.scrollTo({
          top: offsetPosition,
          behavior: "smooth",
        });
      }
    });
  });
});

//  * ==========================================
//  * 3. ドロワーメニュー＆高度なスムーススクロール機能
//  * ==========================================

document.addEventListener("DOMContentLoaded", () => {
  // 共通要素とステート管理
  const state = {
    headerEl: document.querySelector(".l-header"),
    drawerIcon: document.querySelector(".p-drawer__icon"),
    drawer: document.querySelector(".p-drawer"),
    headerHeight: 0,
    isMenuOpen: false,
    isMenuOpenAtBreakpoint: false,
    breakpoint: 1100,
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

// 従来のスムーススクロール処理（念のため残しておく、削除可能）
document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll('a[href^="#"]');
  links.forEach((item) => {
    item.addEventListener("click", (event) => {
      event.preventDefault();
      const targetId = item.getAttribute("href");
      const target = document.querySelector(targetId);
      if (target) {
        const headerElement = document.querySelector(".l-header") || document.querySelector(".l-header__wrap");
        const headerOffset = headerElement ? headerElement.offsetHeight : 0;
        const elementPosition = target.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.scrollY - headerOffset;

        // console.log("Legacy smooth scroll:", {
        //   targetId,
        //   headerOffset,
        //   elementPosition,
        //   offsetPosition,
        // }); // デバッグ用

        window.scrollTo({
          top: offsetPosition,
          behavior: "smooth",
        });
      }
    });
  });
});


