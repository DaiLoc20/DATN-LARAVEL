<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/Category_Edit_Admin.css" rel="stylesheet">
    <title> CHỈNH SỬA LOẠI SẢN PHẨM ( PARENT - CHILDREN )</title>
</head>
<body>
    @extends('Layouts.Layout_Admin')
    @section('title','Category-Edit')

    @section('header')
        @parent
    @endsection

    @section('content')
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand name">
                    <i class="bi bi-window icon-category"></i>
                    <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-window icon-category" viewBox="0.5 -2 15 22"> <path d="M2.5 4a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1m2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0m1 .5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1"/><path d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm13 2v2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1M2 14a1 1 0 0 1-1-1V6h14v7a1 1 0 0 1-1 1z"/> </svg>
                    CHỈNH SỬA LOẠI SẢN PHẨM | PARENT - CHILDREN |
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
                </div>
            </div>
        </nav>

       <nav style="--bs-breadcrumb-divider: '/'" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin.category.list')}}" class="nav-link">DANH SÁCH LOẠI SẢN PHẨM | PARENT - CHILDREN |</a></li>
                <li class="breadcrumb-item active"><a>CHỈNH SỬA LOẠI SẢN PHẨM | PARENT - CHILDREN |</a></li>
            </ol>
       </nav>
       <div class="form-CategoryPlus">
        <form class="row g-3" action="{{ route('admin.category.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="coolinput col-md-12">
                <label for="name" class="text">Tên Loại Sản Phẩm :</label>
                <input type="text" class="input form-control " id="name" name="name" value="{{ old('name', $category->name) }}"  required>
            </div>

            <div class="coolinput col-md-12">
                <label for="name" class="text" >Hình ảnh hiện tại:</label>
                <div >
                    @if ($category->images->isNotEmpty())
                        @foreach($category->images as $image)
                            <img src="{{ asset($image->path) }}" alt="{{ $category->name }}" class="img-thumbnail img-category-edit">
                        @endforeach
                    @else

                            <img class="img-thumbnail img-category-edit" src="/storage/img/NoImage/NO-IMAGE.jpg" alt="">

                    @endif
                </div>
            </div>

            <div class="coolinput col-md-12">
                <label for="path" class="text">Hình ảnh chỉnh sửa:</label>
                <input type="file" class="input form-control edit-path-img" id="path" name="path">
            </div>

            <div class="coolinput col-md-12">
                <label class="text">Loại Sản Phẩm :</label>
                <input type="text" class="input form-control " value="{{ $category->parent_id === null ? 'Loại parent' : 'Loại children' }}" readonly>
                <input type="hidden" name="category_type" value="{{ $category->parent_id === null ? 'parent' : 'child' }}">
            </div>

            @if($category->parent_id !== null)
                <div class="coolinput col-md-12">
                    <label class="text">Thuộc Loại Sản Phẩm Parent : </label>
                    <input type="text" class="input form-control " value="{{ $category->parent->name ?? 'Không có' }}" readonly>
                    <input type="hidden" name="parent_id" value="{{ $category->parent_id }}">
                </div>
            @endif

            <div class="form-group">
            <button type="submit" class="btn btn-success save-Category">
                <i class="bi bi-floppy-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-floppy-fill" viewBox="0 0 16 16"><path d="M0 1.5A1.5 1.5 0 0 1 1.5 0H3v5.5A1.5 1.5 0 0 0 4.5 7h7A1.5 1.5 0 0 0 13 5.5V0h.086a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5H14v-5.5A1.5 1.5 0 0 0 12.5 9h-9A1.5 1.5 0 0 0 2 10.5V16h-.5A1.5 1.5 0 0 1 0 14.5z"/><path d="M3 16h10v-5.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5zm9-16H4v5.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5zM9 1h2v4H9z"/></svg>
                LƯU
            </button>
            <a href="{{ route('admin.category.list') }}" class="btn btn-danger close-Category">
                <i class="bi bi-x-square-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16"><path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708"/></svg>
                HUỶ
            </a>
             </div>
        </form>
       </div>


    @if (session('success-update-category'))
        <div id="flash-message" class="message-success-update-category"> {{ session('success-update-category') }} </div>
    @endif

    @if (session('error-update-category'))
        <div id="flash-message" class="message-error-update-category"> {{ session('error-update-category') }} </div>
    @endif

    @endsection
    @section('footer')
        @parent
    @endsection

    <script src="{{ asset('/js/category-admin-edit.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>
