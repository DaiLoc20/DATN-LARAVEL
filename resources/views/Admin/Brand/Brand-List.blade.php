<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/Brand_Admin.css" rel="stylesheet">
    <title>Hãng Sản Xuất | BRAND |</title>
</head>
<body>
    @extends('Layouts.Layout_Admin')
    @section('title','Brand-List')

    @section('header')
        @parent
    @endsection

    @section('content')
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand name" href="/Admin/Brand/BrandList">
                <i class="bi bi-motherboard icon-brand"></i>
                <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-motherboard icon-brand" viewBox="0 -3.5 16 22"> <path d="M11.5 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5m-10 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zM5 3a1 1 0 0 0-1 1h-.5a.5.5 0 0 0 0 1H4v1h-.5a.5.5 0 0 0 0 1H4a1 1 0 0 0 1 1v.5a.5.5 0 0 0 1 0V8h1v.5a.5.5 0 0 0 1 0V8a1 1 0 0 0 1-1h.5a.5.5 0 0 0 0-1H9V5h.5a.5.5 0 0 0 0-1H9a1 1 0 0 0-1-1v-.5a.5.5 0 0 0-1 0V3H6v-.5a.5.5 0 0 0-1 0zm0 1h3v3H5zm6.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/> <path d="M1 2a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-2H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 9H1V8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6H1V5H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 2zm1 11a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1z"/></svg>
                DANH SÁCH HÃNG SẢN XUẤT | BRAND |
              </a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
              </div>
            </div>
        </nav>
        <nav style="--bs-breadcrumb-divider: '/'" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active"><a class="nav-link">DANH SÁCH HÃNG SẢN XUẤT</a></li>
              <li class="breadcrumb-item"></li>
            </ol>
        </nav>
        @if (session('success-destroy-brand'))
        <div id="flash-message" class="message-success-destroy-brand"> {{ session('success-destroy-brand') }} </div>
        @endif

        @if (session('error-destroy-brand'))
        <div id="flash-message" class="message-error-destroy-brand"> {{ session('error-destroy-brand') }} </div>
        @endif
        <nav class="navbar nav-function">
            <div class="button-group group-function">
                <button class="btn btn-success show-all-brand" >
                    <a href="{{ route('admin.brands.list', ['sort' => $sort]) }}">
                       <i class="bi bi-arrow-clockwise"></i><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/><path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/> </svg>
                    </a>
               </button>

               <button class="btn btn-success plus-brand" >
                    <a class="nav-link" href=" {{ route('admin.brands.plus')}} ">
                        <i class="bi bi-plus-square-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16"><path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/></svg>
                   </a>
               </button>

               <button class="btn btn-success btn-asc">
                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'asc']) }}" class="{{ $sort == 'asc' ? 'font-weight-bold' : ' ' }} ">
                        <i class="bi bi-sort-alpha-down"></i><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-sort-alpha-down" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M10.082 5.629 9.664 7H8.598l1.789-5.332h1.234L13.402 7h-1.12l-.419-1.371zm1.57-.785L11 2.687h-.047l-.652 2.157z"/><path d="M12.96 14H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645zM4.5 2.5a.5.5 0 0 0-1 0v9.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L4.5 12.293z"/></svg>
                   </a>
               </button>
               <button  class="btn btn-success btn-desc">
                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'desc']) }}" class="{{ $sort == 'desc' ? 'font-weight-bold' : ' ' }}">
                       <i class="bi bi-sort-alpha-up-alt"></i><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-sort-alpha-up-alt" viewBox="0 0 16 16"><path d="M12.96 7H9.028v-.691l2.579-3.72v-.054H9.098v-.867h3.785v.691l-2.567 3.72v.054h2.645z"/> <path fill-rule="evenodd" d="M10.082 12.629 9.664 14H8.598l1.789-5.332h1.234L13.402 14h-1.12l-.419-1.371zm1.57-.785L11 9.688h-.047l-.652 2.156z"/><path d="M4.5 13.5a.5.5 0 0 1-1 0V3.707L2.354 4.854a.5.5 0 1 1-.708-.708l2-1.999.007-.007a.5.5 0 0 1 .7.006l2 2a.5.5 0 1 1-.707.708L4.5 3.707z"/></svg>
                    </a>
               </button>
               <button class="btn btn-success show-new-brand">
                    <a class="nav-link" href="{{ route('admin.brands.list', ['sort' => $sort, 'show_new' => true]) }}" >BRAND MỚI THÊM</a>
               </button>
               <button class="btn btn-success show-edit-brand">
                    <a class="nav-link"href="{{ route('admin.brands.list', ['sort' => $sort, 'show_edited' => true]) }}">BRAND VỪA CHỈNH SỬA</a>
               </button>
               <form action="{{ route('admin.brands.list') }}" method="GET"class="d-flex search" role="search">
                    <input type="text" name="search" class="form-control me-2 search" placeholder="Tìm kiếm ..." aria-label="Search" value="{{ $search }}">
                    <input type="hidden" name="sort" value="{{ $sort }}">
                    <button class="btn btn-success" type="submit">
                        <i class="bi bi-search"></i> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16"> <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg>
                    </button>
                </form>
            </div>
       </nav>
        <div class="result-seacrh">
            @if($search)
                <p>Kết quả tìm kiếm cho : " {{ $search }} "</p>
            @endif
        </div>

    @if($brands->isEmpty())
       <div class="alert alert-info">
           @if($showNew)
               Không có hãng sản xuất nào được thêm mới trong 24 giờ qua.
           @elseif($showEdited)
               Không có hãng sản xuất nào được chỉnh sửa trong 24 giờ qua.
           @else
               Không có hãng sản xuất nào trong danh sách
           @endif
       </div>
    @else
    <table class="table">
        <thead  class="table-backgroupColor">
          <tr>
            <th scope="col" class="border-th-stt">STT</th>
            <th scope="col" class="border-th-stt">ID</th>
            <th scope="col" class="border-th-name">TÊN ( BRAND )</th>
            <th scope="col" class="border-th-img">HÌNH ẢNH</th>
            <th scope="col" class="border-th-function">CHỨC NĂNG</th>
          </tr>
        </thead>
        <tbody>
          @php
            $stt = ($brands->currentPage() - 1) * $brands->perPage() + 1;
          @endphp
          @foreach($brands as $brand)
             <tr>
                <td class="border-width-STT">{{$stt++}}</td>
                <td class="border-width-STT">{{$brand->id}}</td>
                <td class="border-width-Name">{{$brand->name}}</td>
                <td class="border-width-Img">
                @if ($brand->images->isNotEmpty())
                    @foreach($brand->images as $image)
                        <img class="img-brand" src="{{ $image->path }}"  alt="{{ $brand->name }}">
                    @endforeach
                @else
                    <img class="no-img-brand" src="/storage/img/NoImage/NO-IMAGE.jpg" alt="">
                @endif
              </td>
                <td class="border-width-Function">
                    <div class="edit-delete">
                        <form class="edit">
                            <button type="button" class="btn btn-warning">
                                  <a href="{{ route('admin.brands.edit', $brand->id) }}" class="nav-link">
                                    <i class="bi bi-pencil-square"></i> <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/></svg>
                                  </a>
                            </button>
                        </form>
                        <form class="delete" action="{{ route('admin.brands.delete', $brand->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa hãng sản xuất này?')">
                                <i class="bi bi-trash3-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16"><path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5m-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5M4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06m6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528M8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5"/> </svg>
                            </button>
                        </form>
                    </div>
                </td>
             </tr>
          @endforeach
        </tbody>
    </table>
    @endif
    <div class="pagination-margin">
        <nav aria-label="Page navigation example">
            <ul class="pagination custom-pagination">
                {{ $brands->appends(['sort' => $sort, 'show_new' => $showNew, 'show_edited' => $showEdited])->links() }}
            </ul>
        </nav>
    </div>
    @endsection
    @section('footer')
        @parent
    @endsection
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
