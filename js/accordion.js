jQuery(document).ready(function($) {
    var isAnimating = false; // アニメーション中かどうかのフラグ

    // アコーディオンのクリック処理
    function toggleAccordion(targetElement) {
        if (!isAnimating) { // アニメーション中でない場合のみ処理を実行
            isAnimating = true; // アニメーション中フラグを立てる

            $(targetElement).slideToggle(function() {
                isAnimating = false; // アニメーションが完了したらフラグを下ろす
            });

            $(targetElement).prev('.accordion-label').toggleClass('active'); // クリックしたアコーディオン要素の前の兄弟要素にactiveクラスを付与または削除する
        }
    }

    // 初期状態でアコーディオンを閉じる
    $('#case_category').hide();
    $('#case_clinic').hide();

    // カテゴリアコーディオンのクリックイベントを設定
    $('#toggle_label_cat').click(function() {
        toggleAccordion('#case_category');
        $(this).toggleClass('active'); // クリックしたアコーディオン要素自体にactiveクラスを付与または削除する
    });

    // クリニックアコーディオンのクリックイベントを設定
    $('#toggle_label_clinic').click(function() {
        toggleAccordion('#case_clinic');
        $(this).toggleClass('active'); // クリックしたアコーディオン要素自体にactiveクラスを付与または削除する
    });
});
