<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <link href="css/Home.css" rel="stylesheet">
    <title>Trang Chủ</title>
</head>
<body>
    @extends('Layouts.Layout_User')
    @section('title','Home')

    @section('header')
        @parent
    @endsection

    @section('content')
    <div class="home">
        <div class="row">
            <div class="col-3">
                <div class="Category-List">
                    <ul class="list-group category-list">
                        <li class="list-group-item icon-category">
                            <i class="bi bi-menu-button-wide-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-menu-button-wide-fill" viewBox="0 0 16 16"> <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v2A1.5 1.5 0 0 0 1.5 5h13A1.5 1.5 0 0 0 16 3.5v-2A1.5 1.5 0 0 0 14.5 0zm1 2h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1m9.927.427A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5"/></svg>
                            DANH MỤC SẢN PHẨM
                        </li>
                        @foreach ( $categories as $category )
                            @if ( $category -> parent_id === null)
                                <li class="list-group-item font-categoy">
                                    @if( $category->images)
                                        @foreach($category->images as $image)
                                            <img class="img-category" src="{{ $image->path }}" alt="{{ $category->name }}">
                                        @endforeach
                                    @endif
                                    <a  href="{{ route('product.category.show', $category) }}" class="nav-link font-categoy" > {{ $category->name }} </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <img class="img-home-1" src="/storage/img/Logo/home-1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="row">
                            <div class="col-7 list-3-image">
                                <img class="img-fluid img-home-2" src="/storage/img/Logo/home-2.jpg" alt="">
                            </div>
                            <div class="col-7 list-3-image">
                                <img class="img-fluid img-home-3" src="/storage/img/Logo/home-3.jpg" alt="">
                            </div>
                            <div class="col-7 list-3-image">
                                <img class="img-fluid img-home-4" src="/storage/img/Logo/home-4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="img-home-5-6-7-8">
                        <img class="img-fluid img-home-5" src="/storage/img/Logo/home-5.jpg" alt="">
                        <img class="img-fluid img-home-6" src="/storage/img/Logo/home-6.jpg" alt="">
                        <img class="img-fluid img-home-7" src="/storage/img/Logo/home-7.jpg" alt="">
                        <img class="img-fluid img-home-8" src="/storage/img/Logo/home-8.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    @endsection

    @section('footer')
        @parent
    @endsection
</body>
</html>
