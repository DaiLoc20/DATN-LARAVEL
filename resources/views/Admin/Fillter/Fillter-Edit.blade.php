<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/Fillter_Edit_Admin.css" rel="stylesheet">
    <title> SỬA BỘ LỌC ( PARENT - CHILDREN ) </title>
</head>
<body>
    @extends('Layouts.Layout_Admin')
    @section('title','Fillter-Edit')

    @section('header')
        @parent
    @endsection

    @section('content')
      <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-fillter name nav-link">
            <i class="bi bi-postcard icon-fillter"></i> <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-postcard icon-fillter" viewBox="0.5 -2 15 21"> <path fill-rule="evenodd" d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zM1 4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm7.5.5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0zM2 5.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5m0 2a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1H2.5a.5.5 0 0 1-.5-.5M10.5 5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM13 8h-2V6h2z"/> </svg>
            SỬA BỘ LỌC ( PARENT - CHILDREN )
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
          </div>
        </div>
      </nav>

      <nav style="--bs-breadcrumb-divider: '/'" aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.category.list')}}" class="nav-link">DANH SÁCH BỘ LỌC ( PARENT - CHILDREN )</a></li>
          <li class="breadcrumb-item active"><a>SỬA BỘ LỌC ( PARENT - CHILDREN )</a></li>
        </ol>
     </nav>

    <div class="form-FillterEdit">
        <form action="{{ route('admin.fillter.update', $fillter->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="coolinput col-md-6">
                <label for="name" class="text">Tên Loại Sản Phẩm :</label>
                <input type="text" class="input form-control " id="name" name="name" value="{{ old('name', $fillter->name) }}"  required>
            </div>


            <div class="coolinput col-md-6">
                <label class="text">Loại Sản Phẩm :</label>
                <input type="text" class="input form-control " value="{{ $fillter->parent_id === null ? 'Loại parent' : 'Loại children' }}" readonly>
                <input type="hidden" name="fillter_type" value="{{ $fillter->parent_id === null ? 'parent' : 'child' }}">
            </div>

            @if($fillter->parent_id !== null)
            <div class="coolinput col-md-6">
                <label class="text">Thuộc Loại Sản Phẩm Parent : </label>
                <input type="text" class="input form-control " value="{{ $fillter->parent->name ?? 'Không có' }}" readonly>
                <input type="hidden" name="parent_id" value="{{ $fillter->parent_id }}">
            </div>
            @endif
            <div class="form-group">
            <button type="submit" class="btn btn-success save-Category">
                <i class="bi bi-floppy-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-floppy-fill" viewBox="0 0 16 16"><path d="M0 1.5A1.5 1.5 0 0 1 1.5 0H3v5.5A1.5 1.5 0 0 0 4.5 7h7A1.5 1.5 0 0 0 13 5.5V0h.086a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5H14v-5.5A1.5 1.5 0 0 0 12.5 9h-9A1.5 1.5 0 0 0 2 10.5V16h-.5A1.5 1.5 0 0 1 0 14.5z"/><path d="M3 16h10v-5.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5zm9-16H4v5.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5zM9 1h2v4H9z"/></svg>
                LƯU
            </button>
            <a href="{{ route('admin.fillter.list') }}" class="btn btn-danger close-Category">
                <i class="bi bi-x-square-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x-square-fill" viewBox="0 0 16 16"><path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm3.354 4.646L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 1 1 .708-.708"/></svg>
                HUỶ
            </a>
             </div>
        </form>
    </div>

    @if (session('success-store-fillter'))
        <div id="flash-message" class="message-success-store-category"> {{ session('success-store-fillter') }} </div>
    @endif

    @if (session('error-store-fillter'))
        <div id="flash-message" class="message-error-store-category"> {{ session('error-store-fillter') }} </div>
    @endif
    @endsection


    @section('footer')
        @parent
    @endsection
    <script src="{{ asset('/js/category-admin-plus.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>


</body>
</html>
