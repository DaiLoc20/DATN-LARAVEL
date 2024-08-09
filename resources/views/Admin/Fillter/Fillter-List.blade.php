<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/Fillter_Admin.css" rel="stylesheet">
    <title>Fillter-List</title>
</head>
<body>
    @extends('Layouts.Layout_Admin')
    @section('title','Fillter-List')

    @section('header')
        @parent
    @endsection

    @section('content')
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand name" href="/Admin/Fillter/FillterList">
            <i class="bi bi-postcard"></i>
            <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-postcard" viewBox="0 -2 15 22"> <path fill-rule="evenodd" d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm7.5.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0zM2 5.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5M10.5 5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM13 8h-2V6h2z"/> </svg>
            BỘ LỌC
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

    <!-- Bảng Bộ Lọc Cha-->
    <div class="Parent-Children">
        <table class="table Parent">
        <thead class="table-backgroupColor">
            <tr>
                <th scope="col" class="parent-border-th-stt">STT</th>
                <th scope="col" class="parent-border-th-nameParent">TÊN ( PARENT )</th>
                <th scope="col" class="parent-border-th-function">CHỨC NĂNG</th>
            </tr>
        </thead>
        <tbody>
            @php
            $stt = ($parentFillter->currentPage() - 1) * $parentFillter->perPage() + 1;
            @endphp
            @foreach($parentFillter as $parent)
            <tr>
                <td class="parent-border-td-stt">{{ $stt++ }}</td>
                <td class="parent-border-td-nameParent">{{ $parent->name }}</td>
                <td class="parent-border-td-function">
                    <div class="edit-delete-parent">
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




    <!-- Bảng Bộ Lọc Cha-->

    <!-- Bảng Bộ Lọc Con-->
    <table class="table Children">
        <thead class="table-backgroupColor">
            <tr>
                <th scope="col" class="children-border-th-stt">STT</th>
                <th scope="col" class="children-border-th-nameChildren">TÊN ( CHILDREN )</th>
                <th scope="col" class="children-border-th-nameParent">TÊN ( PARENT )</th>
                <th scope="col" class="children-border-th-function">CHỨC NĂNG</th>
            </tr>
        </thead>
        <tbody>
            @php
            $stt = ($childFillter->currentPage() - 1) * $childFillter->perPage() + 1;
            @endphp
            @foreach($childFillter as $child)
            <tr>
                <td class="children-border-td-stt">{{ $stt++ }}</td>
                <td class="children-border-td-nameChildren">{{ $child->name }}</td>
                <td class="children-border-td-nameParent">{{ $child->parent->name }}</td>
                <td class="children-border-td-function">
                    <div class="edit-delete-children">
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
    <!-- Bảng Bộ Lọc Con-->
    </div>
</div>
<div class="pagination-parent-children">
   <div class="pagination-margin-parent">
    <nav aria-label="Page navigation example">
        <ul class="pagination custom-pagination">
            {{ $parentFillter->appends(['child_page' => request('child_page')])->links() }}
        </ul>
    </nav>
   </div>
   <div class="pagination-margin-children">
    <nav aria-label="Page navigation example">
        <ul class="pagination custom-pagination">
            {{ $childFillter->appends(['parent_page' => request('parent_page')])->links() }}
        </ul>
    </nav>
   </div>
</div>
    @endsection


    @section('footer')
        @parent
    @endsection
</body>
</html>
