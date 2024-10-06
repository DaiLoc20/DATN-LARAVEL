<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/User_Plus_Admin.css" rel="stylesheet">
    <title>THÊM TÀI KHOẢN</title>
</head>
<body>
    @extends('Layouts.Layout_Admin')
    @section('title','User-Plus')

    @section('header')
        @parent
    @endsection

    @section('content')
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand name" href="/Admin/User/UserList">
            <i class="bi bi-person-badge icon-users"></i>
            <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-person-badge icon-users" viewBox="0 -2 15 22"> <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/> <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492z"/></svg>
            THÊM TÀI KHOẢN
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
          </div>
        </div>
      </nav>
    <nav style="--bs-breadcrumb-divider: '/'" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.user.list')}}"class="nav-link">DANH SÁCH TÀI KHOẢN</a></li>
          <li class="breadcrumb-item active "><a>THÊM TÀI KHOẢN</a></li>
        </ol>
    </nav>
    <div class="form-CategoryPlus">
        <form  class="row g-3" action="{{ route('admin.user.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="coolinput col-md-6">
                <label for="last_name" class="text">Họ:</label>
                <input type="text" class="input form-control " id="last_name" name="last_name" required>
            </div>
            <div class="coolinput col-md-6">
                <label for="first_name" class="text">Tên:</label>
                <input type="text" class="input form-control " id="first_name" name="first_name" required>
            </div>
            <div class="coolinput col-md-6">
                <label for="email" class="text">Email:</label>
                <input type="text" class="input form-control " id="email" name="email" required>
            </div>


            <div class="coolinput col-md-6">
                <label for="phone" class="text">Số Điện Thoại:</label>
                <input type="text" class="input form-control " id="phone" name="phone" required>
            </div>
            <div  class="coolinput col-md-6">
                <label for="password" class="text">Mật Khẩu:</label>
                <input type="text" class="input form-control" id="password" name="password" required>
            </div>
            <div  class="coolinput col-md-6">
                <label for="password_confirmation" class="text">Nhập Lại Mật Khẩu:</label>
                <input type="text" class="input form-control" id="password_confirmation" name="password_confirmation" required>
            </div>

            <div class="coolinput col-md-6">
                <label for="birthday" class="text">Ngày Sinh:</label>
                <input type="text" class="input form-control" id="birthday" name="birthday" required>
            </div>

            <div class="coolinput col-md-6">
                <label for="gender" class="text">Giới Tính</label>
                <select type="text" class="input form-control gender" id="gender" name="gender" required>
                    <option  value="" >Chọn Giới Tính</option>
                    <option  value="0">Nam</option>
                    <option  value="1">Nữ</option>
                </select>
            </div>

            <div class="coolinput col-md-12">
                <label for="address" class="text">Địa Chỉ:</label>
                <input type="text" class="input form-control" id="address" name="address"  required>
            </div>
            <div class="coolinput col-md-12">
                <label for="path " class="text">Hình ảnh:</label>
                <input type="file" class="input form-control path-img" id="path" name="path" accept="image/*">
           </div>
           <div class="form-group">
            <button type="submit" class="btn btn-success save-user">
                <i class="bi bi-floppy-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-floppy-fill" viewBox="0 0 16 16"><path d="M0 1.5A1.5 1.5 0 0 1 1.5 0H3v5.5A1.5 1.5 0 0 0 4.5 7h7A1.5 1.5 0 0 0 13 5.5V0h.086a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5H14v-5.5A1.5 1.5 0 0 0 12.5 9h-9A1.5 1.5 0 0 0 2 10.5V16h-.5A1.5 1.5 0 0 1 0 14.5z"/><path d="M3 16h10v-5.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5zm9-16H4v5.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5zM9 1h2v4H9z"/></svg>
                Lưu
            </button>
            <a href="{{ route('admin.user.list') }}" class="btn btn-danger close-user">
                <i class="bi bi-x-square-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16"><path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708"/></svg>
                Hủy
            </a>
            </div>
        </form>
    </div>
    <div id="notification-container" class="notification-container">
        @if(session('success-store-user'))
            <div class="custom-alert alert-success">
                <p>{{ session('success-store-user') }}</p>
                <div class="button-group">
                    <button type="button" class="btn btn-primary btn-sm ok-button" onclick="redirectHome()">OK</button>
                    <button type="button" class="btn btn-secondary btn-sm cancel-button" onclick="closeNotification()">Hủy</button>
                </div>
            </div>
        @endif

        @if(session('error-store-user'))
            <div class="custom-alert alert-danger">
                <p>{{ session('error-store-user') }}</p>
                <div class="button-group">
                    <button type="button" class="btn btn-primary btn-sm ok-button" onclick="redirectHome()">OK</button>
                    <button type="button" class="btn btn-secondary btn-sm cancel-button" onclick="closeNotification()">Hủy</button>
                </div>
            </div>
        @endif
    </div>
    @endsection

    @section('footer')
        @parent
    @endsection
    <script>
       document.addEventListener('DOMContentLoaded', function() {
    var notificationContainer = document.getElementById('notification-container');
    if (notificationContainer.children.length > 0) {
        setTimeout(function() {
            notificationContainer.classList.add('show');
        }, 100);
    }
});

function redirectHome() {
    window.location.href = "{{ route('admin.user.list') }}"; // Thay 'home' bằng tên route trang chủ của bạn
}

function closeNotification() {
    var notificationContainer = document.getElementById('notification-container');
    notificationContainer.classList.remove('show');
    setTimeout(function() {
        notificationContainer.innerHTML = '';
    }, 500);
}
        </script>
</body>
</html>
