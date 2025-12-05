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

const setUpAccordion = () => {
  const details = document.querySelectorAll(".js-details");
  const IS_OPENED_CLASS = "is-opened";

  details.forEach((element) => {
    const summary = element.querySelector(".js-summary");
    const content = element.querySelector(".js-content");

    summary.addEventListener("click", (event) => {
      // デフォルトの挙動を無効化
      event.preventDefault();

      // is-openedクラスの有無で判定（detailsのopen属性の判定だと、アニメーション完了を待つ必要がありタイミング的に不安定になるため）
      if (element.classList.contains(IS_OPENED_CLASS)) {
        // アコーディオンを閉じるときの処理
        // アイコン操作用クラスを切り替える(クラスを取り除く)
        element.classList.toggle(IS_OPENED_CLASS);

        // アニメーション実行
        closingAnim(content, element).restart();
      } else {
        // アコーディオンを開くときの処理
        // アイコン操作用クラスを切り替える(クラスを付与)
        element.classList.toggle(IS_OPENED_CLASS);
        // open属性を付与
        element.setAttribute("open", "true");
        // アニメーション実行
        openingAnim(content).restart();
      }
    });
  });
};

//  * ==========================================
//  * 4. アコーディオン機能
//  * ==========================================
const closingAnim = (content, element) =>
  gsap.to(content, {
    height: 0,
    opacity: 0,
    duration: 0.4,
    ease: "power3.out",
    overwrite: true,
    onComplete: () => {
      // アニメーションの完了後にopen属性を取り除く
      element.removeAttribute("open");
    },
  });

/**
 * アコーディオンを開く時のアニメーション
 */
const openingAnim = (content) =>
  gsap.fromTo(
    content,
    {
      height: 0,
      opacity: 0,
    },
    {
      height: "auto",
      opacity: 1,
      duration: 0.4,
      ease: "power3.out",
      overwrite: true,
    }
  );

// 既存のコードの最後に追加
document.addEventListener("DOMContentLoaded", () => {
  setUpAccordion();
});

//  * ==========================================
//  * 5. フェードインアニメーション
//  * ==========================================

window.addEventListener("load", function () {
  gsap.registerPlugin(ScrollTrigger);

  const animationClasses = ["u-animated__fadeIn"];

  animationClasses.forEach((className) => {
    const fadeInItems = document.querySelectorAll(`.${className}`);
    fadeInItems.forEach((item) => {
      // data-delay / data-delay-sp を取得
      const delay = item.dataset.delay || "0s";
      const delaySp = item.dataset.delaySp || delay; // 未指定ならPC用の値を継承

      // CSS変数に反映
      item.style.setProperty("--delay", delay);
      item.style.setProperty("--delay-sp", delaySp);

      ScrollTrigger.create({
        trigger: item,
        start: "top 80%",
        onEnter: () => {
          item.classList.add("js-fadeIn");
        },
      });
    });
  });
});

console.log("ssss");
