
$(document).ready(function() {
    $('#addBrandModal form').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        var url = form.attr('action');
        var formData = new FormData(this);

        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // Đóng modal
                $('#addBrandModal').modal('hide');

                // Hiển thị thông báo thành công
                $('<div class="alert alert-success alert-dismissible fade show" role="alert">' +
                    response.message +
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                    '<span aria-hidden="true">&times;</span></button></div>')
                    .insertBefore('.table');

                // Thêm hãng mới vào bảng
                var newRow = '<tr>' +
                    '<td class="border-width-STT">' + (response.total + 1) + '</td>' +
                    '<td class="border-width-Name">' + response.brand.name + '</td>' +
                    '<td class="border-width-img"><img src="' + response.brand.image + '" alt="' + response.brand.name + '" width="50"></td>' +
                    '<td class="border-width-function">' +
                    '<a href="/admin/brands/' + response.brand.id + '/edit" class="btn btn-primary btn-sm">Sửa</a> ' +
                    '<form action="/admin/brands/' + response.brand.id + '" method="POST" style="display:inline">' +
                    '@csrf @method("DELETE")' +
                    '<button type="submit" class="btn btn-danger btn-sm" onclick="return confirm(\'Bạn có chắc chắn muốn xóa?\')">Xóa</button>' +
                    '</form>' +
                    '</td>' +
                    '</tr>';
                $('.table tbody').append(newRow);

                // Reset form
                form[0].reset();
            },
            error: function(xhr) {
                var errors = xhr.responseJSON.errors;
                var errorMessage = '';
                $.each(errors, function(key, value) {
                    errorMessage += value[0] + '<br>';
                });

                // Hiển thị thông báo lỗi trong modal
                $('.modal-body').prepend(
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">' +
                    errorMessage +
                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close">' +
                    '<span aria-hidden="true">&times;</span></button></div>'
                );
            }
        });
    });

    // Xóa thông báo khi đóng modal
    $('#addBrandModal').on('hidden.bs.modal', function () {
        $(this).find('form')[0].reset();
        $(this).find('.alert').remove();
    });
});
