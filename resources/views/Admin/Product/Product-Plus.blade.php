<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/Product_Plus_Admin.css" rel="stylesheet">
    <title> THÊM SẢN PHẨM </title>
</head>
<body>
    @extends('Layouts.Layout_Admin')
    @section('title','Product-Plus')

    @section('header')
        @parent
    @endsection

    @section('content')

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-product name nav-link" href=" {{ route('admin.product.plus')}}">
            <i class="bi bi-window-stack icon-product"></i>
            <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-window-stack icon-product" viewBox="0.5 -2 15 21"><path d="M4.5 6a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1M6 6a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1m2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/><path d="M12 1a2 2 0 0 1 2 2 2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2 2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zM2 12V5a2 2 0 0 1 2-2h9a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1m1-4v5a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V8zm12-1V5a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v2z"/></svg>
            THÊM SẢN PHẨM | PRODUCT |
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            </ul>
          </div>
        </div>
    </nav>

    <nav style="--bs-breadcrumb-divider: '/'" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item "><a class="nav-link" href=" {{ route('admin.product.list') }}">DANH SÁCH SẢN PHẨM | PRODUCT |</a></li>
          <li class="breadcrumb-item active">THÊM SẢN PHẨM | PRODUCT |</li>
        </ol>
    </nav>

    <div class="form-ProductPlus">
        <form class="row g-3" action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="coolinput col-md-6">
                <label for="name" class="text">Tên sản phẩm :</label>
                <input type="text" class="input form-control @error('name') is-invalid @enderror" id="name" name="name" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="coolinput col-md-6">
                <label for="price" class="text">Giá:</label>
                <input type="text" class="input form-control @error('price') is-invalid @enderror" id="price" name="price" data-type="currency" required>
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="coolinput col-md-6">
                <label for="CategoryID" class="text" >Loại sản phẩm :</label>
                <select name="CategoryID" id="CategoryID" class="input form-control category @error('CategoryID') is-invalid @enderror" required>
                    <option value="">--- Chọn loại sản phẩm ---</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('CategoryID')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="coolinput col-md-6">
                <label for="BrandID" class="text">Hãng sản xuất :</label>
                <select name="BrandID" id="BrandID" class="input form-control brand @error('BrandID') is-invalid @enderror"  required>
                    <option value="">--- Chọn hãng sản xuất ---</option>
                    @foreach($brands as $brand)
                        <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                    @endforeach
                </select>
                @error('BrandID')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="path">Hình Ảnh Sản Phẩm</label>
                <input type="file" class="form-control-file" id="path" name="path[]" multiple>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success save-Product">
                    <i class="bi bi-floppy-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-floppy-fill" viewBox="0 0 16 16"><path d="M0 1.5A1.5 1.5 0 0 1 1.5 0H3v5.5A1.5 1.5 0 0 0 4.5 7h7A1.5 1.5 0 0 0 13 5.5V0h.086a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5H14v-5.5A1.5 1.5 0 0 0 12.5 9h-9A1.5 1.5 0 0 0 2 10.5V16h-.5A1.5 1.5 0 0 1 0 14.5z"/><path d="M3 16h10v-5.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5zm9-16H4v5.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5zM9 1h2v4H9z"/></svg>
                    Lưu
                </button>
                <a href="{{ route('admin.product.list') }}" class="btn btn-danger close-Product">
                    <i class="bi bi-x-square-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16"><path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708"/></svg>
                    Hủy
                </a>
            </div>
        </form>
    </div>
    @if (session('success-store-product'))
        <div id="flash-message" class="message-success-store-product"> {{ session('success-store-product') }} </div>
    @endif

    @if (session('error-store-product'))
        <div id="flash-message" class="message-error-store-product"> {{ session('error-store-product') }} </div>
    @endif


    @endsection


    @section('footer')
        @parent
    @endsection

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>
</html>
