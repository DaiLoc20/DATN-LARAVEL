<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/Image_Admin.css" rel="stylesheet">
    <title>Danh Sách Hình Ảnh</title>
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
            <i class="bi bi-file-image icon-image"></i>
            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-file-image icon-image" viewBox="0.5 -2 15 21"> <path d="M8.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/> <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v8l-2.083-2.083a.5.5 0 0 0-.76.063L8 11 5.835 9.7a.5.5 0 0 0-.611.076L3 12z"/></svg>
            HÌNH ẢNH
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item nav-font-imgproduct">
                </li>
            </ul>

          </div>
        </div>
      </nav>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <button type="submit" class="btn btn-primary image-user">
                <a class="nav-link image-brand" href=" {{ route('admin.image.user.list') }}">
                    HÌNH ẢNH TÀI KHOẢN
                </a>
            </button>

            <button type="submit" class="btn btn-primary image-brand" >
                <a class="nav-link image-brand" href=" {{ route('admin.image.brand.list') }}">
                    HÌNH ẢNH HÃNG SẢN XUẤT ( BRAND )
                </a>
            </button>

            <button type="submit" class="btn btn-primary image-category">
                <a class="nav-link image-category" href=" {{ route('admin.image.category.list') }}">
                    HÌNH ẢNH LOẠI SẢN PHẨM ( PARENT )
                </a>
            </button>

            <button type="submit" class="btn btn-primary image-product">
                <a class="nav-link image-product" href=" ">
                    HÌNH ẢNH SẢN PHẨM
                </a>
            </button>
      </nav>
    @endsection


    @section('footer')
        @parent
    @endsection
</body>
</html>
