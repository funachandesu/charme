/**
 * Campaign JavaScript
 * キャンペーン機能用JavaScript
 */

(function() {
    'use strict';

    // GA4イベント送信
    function sendGA4Event(eventName, parameters = {}) {
        if (typeof gtag === 'function') {
            gtag('event', eventName, parameters);
        } else if (typeof dataLayer !== 'undefined') {
            dataLayer.push({
                'event': eventName,
                ...parameters
            });
        }
    }

    // CTAクリックイベント
    function initCTATracking() {
        document.addEventListener('click', function(e) {
            const ctaElement = e.target.closest('a[data-event]');
            if (!ctaElement) return;

            const eventType = ctaElement.dataset.event;
            const campaignId = ctaElement.dataset.campaignId;
            const tier = ctaElement.dataset.tier;

            // GA4イベント送信
            sendGA4Event(eventType, {
                campaign_id: campaignId || '',
                tier: tier || '',
                link_url: ctaElement.href || ''
            });
        });
    }

    // フィルター変更時のトラッキング
    function initFilterTracking() {
        const filterForm = document.querySelector('.ch-filter-form');
        if (!filterForm) return;

        const selects = filterForm.querySelectorAll('select');
        selects.forEach(select => {
            select.addEventListener('change', function() {
                sendGA4Event('campaign_filter_change', {
                    filter_type: this.name,
                    filter_value: this.value
                });
            });
        });
    }

    // スティッキーCTAの表示制御
    function initStickyCTA() {
        const stickyCTA = document.querySelector('.ch-sticky-cta--mobile');
        if (!stickyCTA) return;

        let isVisible = true;
        let lastScrollY = window.scrollY;

        window.addEventListener('scroll', () => {
            const currentScrollY = window.scrollY;

            // 下にスクロール時は非表示
            if (currentScrollY > lastScrollY && currentScrollY > 100) {
                if (isVisible) {
                    stickyCTA.style.transform = 'translateY(100%)';
                    isVisible = false;
                }
            }
            // 上にスクロール時は表示
            else if (currentScrollY < lastScrollY) {
                if (!isVisible) {
                    stickyCTA.style.transform = 'translateY(0)';
                    isVisible = true;
                }
            }

            lastScrollY = currentScrollY;
        });
    }

    // フィルターのURL同期
    function initFilterSync() {
        const filterForm = document.querySelector('.ch-filter-form');
        if (!filterForm) return;

        // URLパラメータからフィルター値を復元
        const urlParams = new URLSearchParams(window.location.search);
        const selects = filterForm.querySelectorAll('select');

        selects.forEach(select => {
            const value = urlParams.get(select.name);
            if (value) {
                select.value = value;
            }
        });

        // フィルター変更時にURLを更新
        filterForm.addEventListener('change', function() {
            const formData = new FormData(this);
            const params = new URLSearchParams();

            for (const [key, value] of formData.entries()) {
                if (value) {
                    params.set(key, value);
                }
            }

            const newURL = window.location.pathname + (params.toString() ? '?' + params.toString() : '');
            window.history.replaceState({}, '', newURL);
        });
    }

    // 初期化
    function init() {
        // 核となる機能のみ初期化
        initCTATracking();
        initFilterTracking();
        initStickyCTA();
        initFilterSync();

        // ページビュー追跡
        const pageType = document.body.classList.contains('single-campaign') ? 'detail' : 'archive';
        sendGA4Event('campaign_page_view', {
            page_type: pageType
        });
    }

    // DOM読み込み完了後に初期化
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }

})();