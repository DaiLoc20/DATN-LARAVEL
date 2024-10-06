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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link href="/css/Layout_Category_Product.css" rel="stylesheet">
    <title></title>
</head>
<body>
    @extends('Layouts.Layout_User')
    @section('title','ProductCategory')

    @section('header')
        @parent
    @endsection

    @section('content')
    <div class="w-100">
        <div class="row">
          <div class="col-3">
            <nav style="--bs-breadcrumb-divider: '/'" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item "><a class="nav-link" href=" {{ route('home.view')}}">Trang Chủ</a></li>
                  <li class="breadcrumb-item active">{{ $category->name }} </li>
                </ol>
            </nav>


          </div>
          <div class="col-9">
                <div class="productTotal-categoryName">
                    <p class="categoryName" >{{ $category->name }} </p>
                    <p class="productTotal" >
                        <strong> {{ $products->total() }} </strong>
                        sản phẩm
                    </p>
                </div>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    @foreach($products as $product)
                    <div class="col mb-4">
                        <div class="card h-100">
                            @if($product->images->first())
                                <img src="{{ $product->images->first()->path }}" class="card-img-top img-category-product" alt="{{ $product->name }}">
                            @endif
                            <div class="card-body">
                                <p class="card-title name " title="{{ $product->name }}" >  {{ Str::limit($product->name, 35) }} </p>
                                <p class="card-text price">{{ number_format($product->price, 0, ',', '.')  }} VNĐ</p>
                                <a href="#" class="">
                                    <i class="bi bi-bag-plus-fill icon-cart"></i><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bag-plus-fill icon-cart" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0M8.5 8a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V12a.5.5 0 0 0 1 0v-1.5H10a.5.5 0 0 0 0-1H8.5z"/></svg>
                                    THÊM VÀO GIỎ
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{ $products->links() }}
            </div>
        </div>
    </div>
    @endsection

    @section('footer')
        @parent
    @endsection
</body>
</html>
