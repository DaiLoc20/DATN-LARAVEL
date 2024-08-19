<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/User_Admin.css" rel="stylesheet">
    <title>User-List</title>
</head>
<body>
    @extends('Layouts.Layout_Admin')
    @section('title','User-List')

    @section('header')
        @parent
    @endsection

    @section('content')
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand name" href="/Admin/User/UserList">
            <i class="bi bi-person-badge"></i>
            <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-person-badge" viewBox="0 -2 15 22"> <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/> <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492z"/></svg>
            DANH SÁCH TÀI KHOẢN
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">


            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Tìm kiếm tên ..." aria-label="search">
              <button class="btn btn-search" type="submit">
                <i class="bi bi-search"></i>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/> </svg>
              </button>
            </form>
          </div>
        </div>
      </nav>

         <p class="font-p-admin">DANH SÁCH TÀI KHOẢN ADMIN</p>
         <table  class="table Admin">
          <thead class="table-backgroupColor">
            <tr >
                <th scope="col" class="admin-border-th-stt">STT</th>
                <th scope="col" class="admin-border-th-img">HÌNH ẢNH</th>
                <th scope="col" class="admin-border-th-name">HỌ TÊN</th>
                <th scope="col" class="admin-border-th-email">EMAIL</th>
                <th scope="col" class="admin-border-th-gender">GIỚI TÍNH</th>
                <th scope="col" class="admin-border-th-birthday">NGÀY SINH</th>
                <th scope="col" class="admin-border-th-phone">SỐ ĐIỆN THOẠI</th>
                <th scope="col" class="admin-border-th-address">ĐỊA CHỈ</th>
                <th scope="col" class="admin-border-th-function">CHỨC NĂNG</th>
            </tr>
        </thead>
        <tbody>
            @php
            $stt = ($admin->currentPage() - 1) * $admin->perPage() + 1;
            @endphp
            @foreach($admin as $ad)
            <tr>
                <td class="admin-border-td-stt">{{ $stt++ }}</td>
                <td class="admin-border-td-img">
                    @foreach ($ad->images as $image)
                    <img class="img-admin" src="{{ asset($image->path) }}" alt="{{ $ad->last_name.' '.$ad->first_name}}" >
                    @endforeach
                </td>
                <td class="admin-border-td-name">{{ $ad->last_name }} {{ $ad->first_name}}</td>
                <td class="admin-border-td-email">{{ $ad->email }}</td>
                <td class="admin-border-td-gender">{{ $ad->gender == 0 ? 'Nam' : 'Nữ' }}</td>
                <td class="admin-border-td-birthday">{{ $ad->birthday ? \Carbon\Carbon::parse($ad->birthday)->format('d-m-Y') : 'N/A' }}</td>
                <td class="admin-border-td-phone">{{ $ad->phone }}</td>
                <td class="admin-border-td-address">{{ $ad->address }}</td>
                <td class="admin-border-td-function">
                    <div class="edit-delete-admin">
                        <form action="" class="edit">
                            <button type="button" class="btn btn-warning">
                                <i class="bi bi-pencil-square"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/></svg>
                            </button>
                        </form>
                        <form action="">
                            <button type="button" class="btn btn-danger">
                                <i class="bi bi-trash3-fill"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16"><path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/> </svg>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
       </table>
       <div class="pagination-margin-admin">
        <nav aria-label="Page navigation example">
            <ul class="pagination custom-pagination">
                {{ $admin->appends(['admin_page' => request('admin_page')])->links() }}
            </ul>
        </nav>
       </div>




       <table class="table User">
        <p class="font-p-user">DANH SÁCH TÀI KHOẢN USER</p>
        <thead class="table-backgroupColor">
            <tr>
                <th scope="col" class="user-border-th-stt">STT</th>
                <th scope="col" class="user-border-th-img">HÌNH ẢNH</th>
                <th scope="col" class="user-border-th-name">HỌ TÊN</th>
                <th scope="col" class="user-border-th-email">EMAIL</th>
                <th scope="col" class="user-border-th-gender">GIỚI TÍNH</th>
                <th scope="col" class="user-border-th-birthday">NGÀY SINH</th>
                <th scope="col" class="user-border-th-phone">SỐ ĐIỆN THOẠI</th>
                <th scope="col" class="user-border-th-address">ĐIA CHỈ</th>
                <th scope="col" class="user-border-th-function">CHỨC NĂNG</th>
            </tr>
        </thead>
        <tbody>
            @php
            $stt = ($user->currentPage() - 1) * $user->perPage() + 1;
            @endphp
            @foreach($user as $usr)
            <tr>
                <td class="user-border-td-stt">{{ $stt++ }}</td>
                <td class="user-border-td-img">
                    @foreach ($usr->images as $image)
                    <img class="img-user" src="{{ asset($image->path) }}" alt="{{ $usr->last_name.' '.$usr->first_name}}" >
                    @endforeach
                </td>
                <td class="user-border-td-name">{{ $usr->last_name }} {{$usr->first_name}}</td>
                <td class="user-border-td-email">{{ $usr->email }}</td>
                <td class="user-border-td-gender">{{ $usr->gender == 0 ? 'Nam' : 'Nữ'}}</td>
                <td class="user-border-td-birthday">{{ $usr->birthday ? \Carbon\Carbon::parse($ad->birthday)->format('d-m-Y') : 'N/A' }}</td>
                <td class="user-border-td-phone">{{ $usr->phone }}</td>
                <td class="user-border-td-address">{{ $usr->address }}</td>
                <td class="user-border-td-function">
                    <div class="edit-delete-user">
                        <form action="" class="edit">
                            <button type="button" class="btn btn-warning">
                                <i class="bi bi-pencil-square"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/></svg>
                            </button>
                        </form>
                        <form action="">
                            <button type="button" class="btn btn-danger">
                                <i class="bi bi-trash3-fill"></i>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16"><path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/> </svg>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
       </table>
       <div class="pagination-margin-admin">
        <nav aria-label="Page navigation example">
            <ul class="pagination custom-pagination">
                {{ $user->appends(['user_page' => request('user_page')])->links() }}
            </ul>
        </nav>
       </div>


    @endsection

    @section('footer')
        @parent
    @endsection


    <script src="{{ asset('js/user-image.js') }}"></script>
</body>
</html>
