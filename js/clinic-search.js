/**
 * クリニック検索エンジン JavaScript
 */
document.addEventListener('DOMContentLoaded', function() {
    // 選択中の条件を保持
    const selectedConditions = {
        case_category: [],
        clinic_area: []
    };

    // モーダル開閉
    const modalButtons = document.querySelectorAll('[data-modal]');
    const modals = document.querySelectorAll('.p-search-modal');

    modalButtons.forEach(function(btn) {
        btn.addEventListener('click', function() {
            const modalId = this.getAttribute('data-modal');
            const modal = document.getElementById(modalId);
            if (modal) {
                modal.classList.add('is-active');
                document.body.style.overflow = 'hidden';
            }
        });
    });

    // モーダルを閉じる
    modals.forEach(function(modal) {
        const overlay = modal.querySelector('.p-search-modal__overlay');
        const closeBtn = modal.querySelector('.p-search-modal__close');

        if (overlay) {
            overlay.addEventListener('click', function() {
                closeModal(modal);
            });
        }

        if (closeBtn) {
            closeBtn.addEventListener('click', function() {
                closeModal(modal);
            });
        }
    });

    function closeModal(modal) {
        modal.classList.remove('is-active');
        document.body.style.overflow = '';
    }

    // 部位・エリアモーダルの「選択する」ボタン
    const applyButtons = document.querySelectorAll('.p-search-modal__apply-btn');
    applyButtons.forEach(function(btn) {
        btn.addEventListener('click', function() {
            const modal = this.closest('.p-search-modal');
            const modalId = modal.id;

            // チェックされた項目を取得
            const checkboxes = modal.querySelectorAll('.p-search-modal__checkbox:checked');
            const values = [];
            const names = [];

            checkboxes.forEach(function(cb) {
                values.push(cb.value);
                names.push(cb.getAttribute('data-name'));
            });

            // 条件を保存
            if (modalId === 'modal-case-category') {
                selectedConditions.case_category = values.map(function(v, i) {
                    return { id: v, name: names[i] };
                });
                document.getElementById('search_case_category').value = values.join(',');
            } else if (modalId === 'modal-clinic-area') {
                selectedConditions.clinic_area = values.map(function(v, i) {
                    return { id: v, name: names[i] };
                });
                document.getElementById('search_clinic_area').value = values.join(',');
            }

            // 選択中の条件を表示更新
            updateSelectedDisplay();

            // モーダルを閉じる
            closeModal(modal);
        });
    });

    // 選択中の条件表示を更新
    function updateSelectedDisplay() {
        const container = document.getElementById('selected-conditions');
        const tagsContainer = document.getElementById('selected-tags');
        const searchBtn = document.getElementById('execute-search');

        if (!container || !tagsContainer) return;

        const allConditions = [
            ...selectedConditions.case_category,
            ...selectedConditions.clinic_area
        ];

        if (allConditions.length === 0) {
            container.style.display = 'none';
            if (searchBtn) searchBtn.style.display = 'none';
            return;
        }

        container.style.display = 'flex';
        if (searchBtn) searchBtn.style.display = 'block';

        // タグを生成
        tagsContainer.innerHTML = '';
        allConditions.forEach(function(cond) {
            const tag = document.createElement('span');
            tag.className = 'p-clinic-search__selected-tag';
            tag.innerHTML = cond.name + '<span class="p-clinic-search__selected-tag-remove" data-id="' + cond.id + '">&times;</span>';
            tagsContainer.appendChild(tag);
        });

        // タグ削除イベント
        const removeButtons = tagsContainer.querySelectorAll('.p-clinic-search__selected-tag-remove');
        removeButtons.forEach(function(btn) {
            btn.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                removeCondition(id);
            });
        });
    }

    // 条件を削除
    function removeCondition(id) {
        // case_categoryから削除
        selectedConditions.case_category = selectedConditions.case_category.filter(function(c) {
            return c.id !== id;
        });
        // clinic_areaから削除
        selectedConditions.clinic_area = selectedConditions.clinic_area.filter(function(c) {
            return c.id !== id;
        });

        // hidden inputを更新
        document.getElementById('search_case_category').value = selectedConditions.case_category.map(function(c) { return c.id; }).join(',');
        document.getElementById('search_clinic_area').value = selectedConditions.clinic_area.map(function(c) { return c.id; }).join(',');

        // モーダル内のチェックボックスを同期
        const checkbox = document.querySelector('.p-search-modal__checkbox[value="' + id + '"]');
        if (checkbox) {
            checkbox.checked = false;
        }

        updateSelectedDisplay();
    }

    // クリアボタン
    const clearBtn = document.getElementById('clear-conditions');
    if (clearBtn) {
        clearBtn.addEventListener('click', function() {
            selectedConditions.case_category = [];
            selectedConditions.clinic_area = [];
            document.getElementById('search_case_category').value = '';
            document.getElementById('search_clinic_area').value = '';

            // 全チェックボックスを解除
            const checkboxes = document.querySelectorAll('.p-search-modal__checkbox');
            checkboxes.forEach(function(cb) {
                cb.checked = false;
            });

            updateSelectedDisplay();
        });
    }

    // 検索実行ボタン
    const executeBtn = document.getElementById('execute-search');
    if (executeBtn) {
        executeBtn.addEventListener('click', function() {
            const form = document.querySelector('.p-clinic-search__form');
            if (form) {
                form.submit();
            }
        });
    }

    // クリニック絞り込み検索
    const clinicFilterInput = document.getElementById('clinic-filter-input');
    if (clinicFilterInput) {
        clinicFilterInput.addEventListener('input', function() {
            const keyword = this.value.toLowerCase();
            const clinicItems = document.querySelectorAll('.p-search-modal__clinic-item');

            clinicItems.forEach(function(item) {
                const name = item.getAttribute('data-name').toLowerCase();
                if (name.indexOf(keyword) !== -1) {
                    item.classList.remove('is-hidden');
                } else {
                    item.classList.add('is-hidden');
                }
            });
        });
    }
});
