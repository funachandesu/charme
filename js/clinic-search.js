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

    // チェックボックスのラベル状態を更新
    function updateCheckboxLabel(checkbox) {
        const label = checkbox.closest('.p-search-modal__checkbox-label');
        if (label) {
            if (checkbox.checked) {
                label.classList.add('is-checked');
            } else {
                label.classList.remove('is-checked');
            }
            // 親による連動選択状態をクリア
            label.classList.remove('is-parent-selected');
        }
    }

    // 親カテゴリの子要素を全て選択/解除
    function toggleChildCheckboxes(parentCheckbox, isChecked) {
        const categoryGroup = parentCheckbox.closest('.p-search-modal__category-group');
        if (!categoryGroup) return;

        const childrenContainer = categoryGroup.querySelector('.p-search-modal__children');
        if (!childrenContainer) return;

        const childCheckboxes = childrenContainer.querySelectorAll('.p-search-modal__checkbox');
        childCheckboxes.forEach(function(childCb) {
            childCb.checked = isChecked;
            const label = childCb.closest('.p-search-modal__checkbox-label');
            if (label) {
                if (isChecked) {
                    label.classList.add('is-checked');
                    label.classList.add('is-parent-selected');
                } else {
                    label.classList.remove('is-checked');
                    label.classList.remove('is-parent-selected');
                }
            }
        });
    }

    // 子カテゴリが解除されたら親カテゴリも解除
    function uncheckParentIfChildUnchecked(childCheckbox) {
        if (childCheckbox.checked) return; // チェックされた場合は何もしない

        const categoryGroup = childCheckbox.closest('.p-search-modal__category-group');
        if (!categoryGroup) return;

        const parentLabel = categoryGroup.querySelector('.p-search-modal__checkbox-label:not(.--child)');
        if (!parentLabel) return;

        const parentCheckbox = parentLabel.querySelector('.p-search-modal__checkbox');
        if (!parentCheckbox || !parentCheckbox.checked) return;

        // 親がチェックされていたら解除
        parentCheckbox.checked = false;
        parentLabel.classList.remove('is-checked');

        // 他の子の連動選択状態もクリア
        const childrenContainer = categoryGroup.querySelector('.p-search-modal__children');
        if (childrenContainer) {
            const allChildLabels = childrenContainer.querySelectorAll('.p-search-modal__checkbox-label');
            allChildLabels.forEach(function(label) {
                label.classList.remove('is-parent-selected');
            });
        }
    }

    // 子カテゴリが全て選択されたら親カテゴリも選択
    function checkParentIfAllChildrenChecked(childCheckbox) {
        if (!childCheckbox.checked) return; // 解除された場合は何もしない

        const categoryGroup = childCheckbox.closest('.p-search-modal__category-group');
        if (!categoryGroup) return;

        const childrenContainer = categoryGroup.querySelector('.p-search-modal__children');
        if (!childrenContainer) return;

        const allChildCheckboxes = childrenContainer.querySelectorAll('.p-search-modal__checkbox');
        const checkedChildCheckboxes = childrenContainer.querySelectorAll('.p-search-modal__checkbox:checked');

        // 全ての子が選択されているかチェック
        if (allChildCheckboxes.length > 0 && allChildCheckboxes.length === checkedChildCheckboxes.length) {
            const parentLabel = categoryGroup.querySelector('.p-search-modal__checkbox-label:not(.--child)');
            if (!parentLabel) return;

            const parentCheckbox = parentLabel.querySelector('.p-search-modal__checkbox');
            if (!parentCheckbox || parentCheckbox.checked) return;

            // 親を選択
            parentCheckbox.checked = true;
            parentLabel.classList.add('is-checked');

            // 子に連動選択状態を付与
            const allChildLabels = childrenContainer.querySelectorAll('.p-search-modal__checkbox-label');
            allChildLabels.forEach(function(label) {
                label.classList.add('is-parent-selected');
            });
        }
    }

    // チェックボックスの選択状態をリアルタイム反映
    const allCheckboxes = document.querySelectorAll('.p-search-modal__checkbox');
    allCheckboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            const label = this.closest('.p-search-modal__checkbox-label');
            const isParent = label && !label.classList.contains('--child');
            const modal = this.closest('.p-search-modal');
            const isCaseCategoryModal = modal && modal.id === 'modal-case-category';
            const isClinicAreaModal = modal && modal.id === 'modal-clinic-area';
            const isHierarchicalModal = isCaseCategoryModal || isClinicAreaModal;

            // ラベルの状態を更新
            updateCheckboxLabel(this);

            // 部位・エリアモーダルの親カテゴリの場合、子カテゴリも連動
            if (isHierarchicalModal && isParent) {
                toggleChildCheckboxes(this, this.checked);
            }

            // 子カテゴリの場合
            if (isHierarchicalModal && !isParent) {
                if (this.checked) {
                    // 全ての子が選択されたら親も選択
                    checkParentIfAllChildrenChecked(this);
                } else {
                    // 子が解除されたら親も解除
                    uncheckParentIfChildUnchecked(this);
                }
            }

            // モーダルヘッダーの選択数を更新
            updateModalSelectionCount(modal);
        });
    });

    // モーダルヘッダーに選択数を表示
    function updateModalSelectionCount(modal) {
        if (!modal) return;
        const title = modal.querySelector('.p-search-modal__title');
        if (!title) return;

        // 既存のバッジを削除
        const existingBadge = title.querySelector('.p-search-modal__selection-count');
        if (existingBadge) {
            existingBadge.remove();
        }

        // 選択数をカウント（親が選択されている場合は親のみカウント）
        let checkedCount = 0;
        const isHierarchicalModal = modal.id === 'modal-case-category' || modal.id === 'modal-clinic-area';
        if (isHierarchicalModal) {
            const categoryGroups = modal.querySelectorAll('.p-search-modal__category-group');
            categoryGroups.forEach(function(group) {
                const parentCheckbox = group.querySelector('.p-search-modal__checkbox-label:not(.--child) .p-search-modal__checkbox');
                if (parentCheckbox && parentCheckbox.checked) {
                    checkedCount++; // 親が選択されていれば親のみカウント
                } else {
                    // 親が選択されていなければ子をカウント
                    const childrenContainer = group.querySelector('.p-search-modal__children');
                    if (childrenContainer) {
                        checkedCount += childrenContainer.querySelectorAll('.p-search-modal__checkbox:checked').length;
                    }
                }
            });
        } else {
            checkedCount = modal.querySelectorAll('.p-search-modal__checkbox:checked').length;
        }

        if (checkedCount > 0) {
            const badge = document.createElement('span');
            badge.className = 'p-search-modal__selection-count';
            badge.textContent = checkedCount + '件選択中';
            title.appendChild(badge);
        }
    }

    // 検索条件用にチェックされた値を取得（親が選択されている場合は子を除外）
    function getSelectedValuesForSearch(modal) {
        const values = [];
        const names = [];

        const isHierarchicalModal = modal.id === 'modal-case-category' || modal.id === 'modal-clinic-area';
        if (isHierarchicalModal) {
            const categoryGroups = modal.querySelectorAll('.p-search-modal__category-group');
            categoryGroups.forEach(function(group) {
                const parentCheckbox = group.querySelector('.p-search-modal__checkbox-label:not(.--child) .p-search-modal__checkbox');
                if (parentCheckbox && parentCheckbox.checked) {
                    // 親が選択されていれば親のみ追加（子は除外）
                    values.push(parentCheckbox.value);
                    names.push(parentCheckbox.getAttribute('data-name'));
                } else {
                    // 親が選択されていなければ子を追加
                    const childrenContainer = group.querySelector('.p-search-modal__children');
                    if (childrenContainer) {
                        const checkedChildren = childrenContainer.querySelectorAll('.p-search-modal__checkbox:checked');
                        checkedChildren.forEach(function(cb) {
                            values.push(cb.value);
                            names.push(cb.getAttribute('data-name'));
                        });
                    }
                }
            });
        } else {
            // その他のモーダルは従来通り
            const checkboxes = modal.querySelectorAll('.p-search-modal__checkbox:checked');
            checkboxes.forEach(function(cb) {
                values.push(cb.value);
                names.push(cb.getAttribute('data-name'));
            });
        }

        return { values: values, names: names };
    }

    // 部位・エリアモーダルの「選択する」ボタン
    const applyButtons = document.querySelectorAll('.p-search-modal__apply-btn');
    applyButtons.forEach(function(btn) {
        btn.addEventListener('click', function() {
            const modal = this.closest('.p-search-modal');
            const modalId = modal.id;

            // チェックされた項目を取得（親選択時は子を除外）
            const selected = getSelectedValuesForSearch(modal);
            const values = selected.values;
            const names = selected.names;

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
            const label = checkbox.closest('.p-search-modal__checkbox-label');
            const isParent = label && !label.classList.contains('--child');
            const modal = checkbox.closest('.p-search-modal');
            const isCaseCategoryModal = modal && modal.id === 'modal-case-category';

            checkbox.checked = false;
            if (label) {
                label.classList.remove('is-checked');
                label.classList.remove('is-parent-selected');
            }

            // 親カテゴリの場合、子カテゴリも解除（部位・エリア両方対応）
            const isClinicAreaModal = modal && modal.id === 'modal-clinic-area';
            if ((isCaseCategoryModal || isClinicAreaModal) && isParent) {
                toggleChildCheckboxes(checkbox, false);
            }

            updateModalSelectionCount(modal);
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
                const label = cb.closest('.p-search-modal__checkbox-label');
                if (label) {
                    label.classList.remove('is-checked');
                    label.classList.remove('is-parent-selected');
                }
            });

            // 全モーダルの選択数バッジをクリア
            modals.forEach(function(modal) {
                updateModalSelectionCount(modal);
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

    // ページ読み込み時に既存の選択状態を初期化（検索結果ページ用）
    function initializeExistingSelections() {
        const caseCategoryInput = document.getElementById('search_case_category');
        const clinicAreaInput = document.getElementById('search_clinic_area');

        if (caseCategoryInput && caseCategoryInput.value) {
            const ids = caseCategoryInput.value.split(',');
            ids.forEach(function(id) {
                const cb = document.querySelector('#modal-case-category .p-search-modal__checkbox[value="' + id + '"]');
                if (cb) {
                    // チェックボックスを選択状態にする
                    cb.checked = true;
                    const label = cb.closest('.p-search-modal__checkbox-label');
                    if (label) {
                        label.classList.add('is-checked');
                    }

                    // 親カテゴリの場合、子カテゴリも連動して選択
                    const isParent = label && !label.classList.contains('--child');
                    if (isParent) {
                        toggleChildCheckboxes(cb, true);
                    }

                    selectedConditions.case_category.push({
                        id: id,
                        name: cb.getAttribute('data-name')
                    });
                }
            });
        }

        if (clinicAreaInput && clinicAreaInput.value) {
            const ids = clinicAreaInput.value.split(',');
            ids.forEach(function(id) {
                const cb = document.querySelector('#modal-clinic-area .p-search-modal__checkbox[value="' + id + '"]');
                if (cb) {
                    // チェックボックスを選択状態にする
                    cb.checked = true;
                    const label = cb.closest('.p-search-modal__checkbox-label');
                    if (label) {
                        label.classList.add('is-checked');
                    }

                    // 親カテゴリの場合、子カテゴリも連動して選択
                    const isParent = label && !label.classList.contains('--child');
                    if (isParent) {
                        toggleChildCheckboxes(cb, true);
                    }

                    selectedConditions.clinic_area.push({
                        id: id,
                        name: cb.getAttribute('data-name')
                    });
                }
            });
        }

        // 選択中表示を更新
        updateSelectedDisplay();

        // モーダルの選択数バッジを初期化
        modals.forEach(function(modal) {
            updateModalSelectionCount(modal);
        });
    }

    initializeExistingSelections();
});
