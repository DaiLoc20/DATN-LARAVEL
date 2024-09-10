document.ready(function() {
    ('#category_type').change(function() {
        if ($(this).val() === 'child') {
            $('#parent_category_group').show();
        } else {
            $('#parent_category_group').hide();
            $('#parent_id').val('');
        }
    });
});
