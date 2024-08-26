document.addEventListener('DOMContentLoaded', function() {
    const deleteForms = document.querySelectorAll('.delete-form');

    deleteForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            if (confirm('Bạn có chắc chắn muốn xóa hãng sản xuất này không?')) {
                this.submit();
            }
        });
    });
});
