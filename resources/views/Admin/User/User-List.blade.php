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


      <table class="table Admin">
        <thead class="table-backgroupColor">
            <tr>
                <th scope="col" class="">STT</th>
                <th scope="col" class="">HỌ</th>
                <th scope="col" class="">TÊN</th>
                <th scope="col" class="">EMAIL</th>
                <th scope="col" class="">GIỚI TÍNH</th>
                <th scope="col" class="">NGÀY SINH</th>
                <th scope="col" class="">SỐ ĐIỆN THOẠI</th>
                <th scope="col" class="">LOẠI TÀI KHOẢN</th>
                <th scope="col" class="">ĐIA CHỈ</th>
                <th scope="col" class="">CHỨC NĂNG</th>
            </tr>
        </thead>
        <tbody>
            @php
            $stt = ($admin->currentPage() - 1) * $admin->perPage() + 1;
            @endphp
            @foreach($admin as $ad)
            <tr>
                <td class="">{{ $stt++ }}</td>
                <td class="">{{ $ad->last_name }}</td>
                <td class="">{{ $ad->first_name }}</td>
                <td class="">{{ $ad->email }}</td>
                <td class="">{{ $ad->gender == 0 ? 'Nam' : 'Nữ' }}</td>
                <td class="">{{ $ad->birthday ? \Carbon\Carbon::parse($ad->birthday)->format('d-m-Y') : 'N/A' }}</td>
                <td class="">{{ $ad->phone }}</td>
                <td class="">{{ $ad->is_user_admin == 0 ? 'User' : 'Admin' }}</td>
                <td class="">{{ $ad->address }}</td>
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



       <table class="table Admin">
        <thead class="table-backgroupColor">
            <tr>
                <th scope="col" class="">STT</th>
                <th scope="col" class="">HỌ</th>
                <th scope="col" class="">TÊN</th>
                <th scope="col" class="">EMAIL</th>
                <th scope="col" class="">GIỚI TÍNH</th>
                <th scope="col" class="">NGÀY SINH</th>
                <th scope="col" class="">SỐ ĐIỆN THOẠI</th>
                <th scope="col" class="">LOẠI TÀI KHOẢN</th>
                <th scope="col" class="">ĐIA CHỈ</th>
                <th scope="col" class="">CHỨC NĂNG</th>
            </tr>
        </thead>
        <tbody>
            @php
            $stt = ($user->currentPage() - 1) * $user->perPage() + 1;
            @endphp
            @foreach($user as $usr)
            <tr>
                <td class="">{{ $stt++ }}</td>
                <td class="">{{ $usr->last_name }}</td>
                <td class="">{{ $usr->first_name }}</td>
                <td class="">{{ $usr->email }}</td>
                <td class="">{{ $usr->gender == 0 ? 'Nam' : 'Nữ'}}</td>
                <td class="">{{ $usr->birthday ? \Carbon\Carbon::parse($ad->birthday)->format('d-m-Y') : 'N/A' }}</td>
                <td class="">{{ $usr->phone }}</td>
                <td class="">{{ $usr->is_user_admin == 0 ? 'User' : 'Admin'}}</td>
                <td class="">{{ $usr->address }}</td>
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

    @endsection

    @section('footer')
        @parent
    @endsection
</body>
</html>
