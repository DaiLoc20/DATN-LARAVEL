document.addEventListener('DOMContentLoaded', function() {
    const isParentSelect = document.getElementById('is_parent');
    const parentCategoryGroup = document.getElementById('parent_category_group');

    isParentSelect.addEventListener('change', function() {
        if (this.value === '0') {
            parentCategoryGroup.style.display = 'block';
        } else {
            parentCategoryGroup.style.display = 'none';
        }
    });
});
