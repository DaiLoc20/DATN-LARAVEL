<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/Image_Admin.css" rel="stylesheet">
    <title>Image-List</title>
</head>
<body>
    @extends('Layouts.Layout_Admin')
    @section('title','Image-List')

    @section('header')
        @parent
    @endsection

    @section('content')
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand name" href="/Admin/Image/ImageList">
            <i class="bi bi-file-image"></i>
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-image" viewBox="0 -2 15 22"> <path d="M8.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/> <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v8l-2.083-2.083a.5.5 0 0 0-.76.063L8 11 5.835 9.7a.5.5 0 0 0-.611.076L3 12z"/></svg>
            HÌNH ẢNH
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item nav-font-imgproduct">
                    <a class="nav-link nav-font-imgproduct"  href="">HÌNH ẢNH SẢN PHẨM</a>
                </li>
            </ul>

          </div>
        </div>
      </nav>


    <div class="font-admin-user">
        <p class="font-p-admin">DANH SÁCH HÌNH ẢNH ADMIN</p>
        <p class="font-p-user">DANH SÁCH HÌNH ẢNH USER</p>
    </div>
    <!-- Bảng Hình Ảnh User và Admin-->
    <div class="Admin-User">
        <table class="table Admin">
            <thead class="table-backgroupColor">
                <tr>
                    <th scope="col" class="category-border-th-stt">STT</th>
                    <th scope="col" class="category-border-th-img">HÌNH ẢNH</th>
                    <th scope="col" class="category-border-th-nameParent">HỌ TÊN</th>
                    <th scope="col" class="category-border-th-function">CHỨC NĂNG</th>
                </tr>
            </thead>
            <tbody>
                @php
                $stt = ($userImages->currentPage() - 1) * $userImages->perPage() + 1;
                @endphp
                @foreach($userImages as $image)
                @if($image->users->is_user_admin == 1)
                <tr>
                    <td class="category-border-td-stt">{{ $stt++ }}</td>
                    <td class="category-border-td-img"><img src="{{ asset($image->path) }}" alt="Category Image" style="max-width: 50px;"></td>
                    <td class="category-border-td-nameParent">{{ $image->users ? $image->users->last_name .' '.$image->users->first_name : 'N/A' }}</td>
                    <td class="category-border-td-function">
                        <div class="edit-delete-category">
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
                @endif
                @endforeach
            </tbody>
        </table>

        <table class="table User">
            <thead class="table-backgroupColor">
                <tr>
                    <th scope="col" class="category-border-th-stt">STT</th>
                    <th scope="col" class="category-border-th-img">HÌNH ẢNH</th>
                    <th scope="col" class="category-border-th-nameParent">HỌ TÊN</th>
                    <th scope="col" class="category-border-th-function">CHỨC NĂNG</th>
                </tr>
            </thead>
            <tbody>
                @php
                $stt = ($userImages->currentPage() - 1) * $userImages->perPage() + 1;
                @endphp
                @foreach($userImages as $image)
                @if($image->users->is_user_admin == 0)
                <tr>
                    <td class="category-border-td-stt">{{ $stt++ }}</td>
                    <td class="category-border-td-img"><img src="{{ asset($image->path) }}" alt="Category Image" style="max-width: 50px;"></td>
                    <td class="category-border-td-nameParent">{{ $image->users ? $image->users->last_name .' '.$image->users->first_name : 'N/A' }}</td>
                    <td class="category-border-td-function">
                        <div class="edit-delete-category">
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
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
    <!--  Bảng Hình Ảnh User và Admin-->


    <div class="font-category-brand">
        <p class="font-p-category">DANH SÁCH HÌNH ẢNH LOẠI SẢN PHẨM </p>
        <p class="font-p-brand">DANH SÁCH HÌNH ẢNH HÃNG SẢN XUẤT</p>
    </div>
    <div class="Category-Brand">
    <!-- Bảng Hình Ảnh Loại Sản Phẩm-->
    <table class="table Category">
        <thead class="table-backgroupColor">
            <tr>
                <th scope="col" class="category-border-th-stt">STT</th>
                <th scope="col" class="category-border-th-img">HÌNH ẢNH</th>
                <th scope="col" class="category-border-th-nameParent">TÊN ( PARENT )</th>
                <th scope="col" class="category-border-th-function">CHỨC NĂNG</th>
            </tr>
        </thead>
        <tbody>
            @php
            $stt = ($categoryImages->currentPage() - 1) * $categoryImages->perPage() + 1;
            @endphp
            @foreach($categoryImages as $image)
            <tr>
                <td class="category-border-td-stt">{{ $stt++ }}</td>
                <td class="category-border-td-img"><img src="{{ asset($image->path) }}" alt="Category Image" style="max-width: 50px;"></td>
                <td class="category-border-td-nameParent">{{ $image->category ? $image->category->name : 'N/A' }}</td>
                <td class="category-border-td-function">
                    <div class="edit-delete-category">
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


    <!-- Bảng Hình Ảnh Loại Sản Phẩm-->

    <table class="table Brand">
        <thead class="table-backgroupColor">
            <tr>
                <th scope="col" class="brand-border-th-stt">STT</th>
                <th scope="col" class="brand-border-th-img">HÌNH ẢNH</th>
                <th scope="col" class="brand-border-th-nameBrand">TÊN ( BRAND )</th>
                <th scope="col" class="brand-border-th-function">CHỨC NĂNG</th>
            </tr>
        </thead>
        <tbody>
            @php
            $stt = ($brandImages->currentPage() - 1) * $brandImages->perPage() + 1;
            @endphp
            @foreach($brandImages as $image)
            <tr>
                <td class="brand-border-td-stt">{{ $stt++ }}</td>
                <td class="brand-border-td-img"><img src="{{ asset($image->path) }}" alt="Category Image" style="max-width: 100px;"></td>
                <td class="brand-border-td-nameBrand">{{ $image->brands ? $image->brands->name : 'N/A' }}</td>
                <td class="brand-border-td-function">
                    <div class="edit-delete-brand">
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
    </div>
    <div class="pagination-category-brand">
    <div class="pagination-margin-category">
        <nav aria-label="Page navigation example">
            <ul class="pagination custom-pagination">
                {{ $categoryImages->appends(['category_page' => request('category_page')])->links() }}
            </ul>
        </nav>
    </div>
    <div class="pagination-margin-brand">
        <nav aria-label="Page navigation example">
            <ul class="pagination custom-pagination">
                {{ $brandImages->appends(['brand_page' => request('brand_page')])->links() }}
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
