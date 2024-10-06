<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/Brand_Plus_Admin.css" rel="stylesheet">
    <title>Sửa Hãng Sản Xuất | BRAND |</title>
</head>
<body>
    @extends('Layouts.Layout_Admin')
    @section('title','Brand-Edit')

    @section('header')
        @parent
    @endsection

    @section('content')
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand name" href="/Admin/Brand/BrandList">
                <i class="bi bi-motherboard icon-brand"></i>
                <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-motherboard icon-brand" viewBox="0 -3 15 22"> <path d="M11.5 2a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5m2 0a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5m-10 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm0 2a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zM5 3a1 1 0 0 0-1 1h-.5a.5.5 0 0 0 0 1H4v1h-.5a.5.5 0 0 0 0 1H4a1 1 0 0 0 1 1v.5a.5.5 0 0 0 1 0V8h1v.5a.5.5 0 0 0 1 0V8a1 1 0 0 0 1-1h.5a.5.5 0 0 0 0-1H9V5h.5a.5.5 0 0 0 0-1H9a1 1 0 0 0-1-1v-.5a.5.5 0 0 0-1 0V3H6v-.5a.5.5 0 0 0-1 0zm0 1h3v3H5zm6.5 7a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5z"/> <path d="M1 2a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-2H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 9H1V8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6H1V5H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 2zm1 11a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1z"/></svg>
                SỬA HÃNG SẢN XUẤT | BRAND |
              </a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
              </div>
            </div>
        </nav>
        <nav style="--bs-breadcrumb-divider: '/'" aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a class="nav-link" href=" {{ route('admin.brands.list')}}">DANH SÁCH HÃNG SẢN XUẤT</a></li>
              <li class="breadcrumb-item active" aria-current="page">SỬA HÃNG SẢN XUẤT</li>
            </ol>
        </nav>
        <div class="form-BrandEdit">
        <form class="row g-3" action="{{ route('admin.brands.update', $brands->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="coolinput col-md-12">
                <label for="name" class="text">Tên hãng sản xuất:</label>
                <input type="text" class="input form-control" id="name" name="name" value="{{ old('name', $brands->name) }}" required>
            </div>
            @if ($errors->has('name'))
                {{ $errors->first('name') }}
            @endif

            <div class="coolinput col-md-12">
                <label for="name" class="text" >Hình ảnh hiện tại:</label>
                <div >
                    @if ($brands->images->isNotEmpty())
                        @foreach($brands->images as $image)
                            <img src="{{ asset($image->path) }}" alt="{{ $brands->name }}" class="img-thumbnail img-brand-edit">
                        @endforeach
                    @else
                        <img class="img-thumbnail no-img-category-edit" src="/storage/img/NoImage/NO-IMAGE.jpg" alt="">
                    @endif
                </div>
            </div>

            <div class="coolinput col-md-12">
                <label for="path" class="text">Hình ảnh chỉnh sửa:</label>
                <input type="file" class="input form-control edit-path-img" id="path" name="path">
            </div>

            <div class="form-group brand-edit">
                <button type="submit" class="btn btn-success save-Brand">
                    <i class="bi bi-floppy-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-floppy-fill" viewBox="0 0 16 16"><path d="M0 1.5A1.5 1.5 0 0 1 1.5 0H3v5.5A1.5 1.5 0 0 0 4.5 7h7A1.5 1.5 0 0 0 13 5.5V0h.086a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5H14v-5.5A1.5 1.5 0 0 0 12.5 9h-9A1.5 1.5 0 0 0 2 10.5V16h-.5A1.5 1.5 0 0 1 0 14.5z"/><path d="M3 16h10v-5.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5zm9-16H4v5.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5zM9 1h2v4H9z"/></svg>
                    Lưu
                </button>
                <a href="{{ route('admin.brands.list') }}" class="btn btn-danger close-Brand">
                    <i class="bi bi-x-square-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16"><path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708"/></svg>
                    Hủy
                </a>
            </div>

         </form>
        </div>
        @if (session('success-update-brand'))
        <div id="flash-message" class="message-success-update-brand"> {{ session('success-update-brand') }} </div>
        @endif

        @if (session('error-update-brand'))
        <div id="flash-message" class="message-error-update-brand"> {{ session('error-update-brand') }} </div>
        @endif

    @endsection


    @section('footer')
        @parent
    @endsection

    @section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/add-brand-form.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    @endsection

</body>
</html>
