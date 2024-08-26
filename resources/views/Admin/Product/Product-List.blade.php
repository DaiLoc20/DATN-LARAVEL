<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/Product_Admin.css" rel="stylesheet">
    <title>Product-List</title>
</head>
<body>
    @extends('Layouts.Layout_Admin')
    @section('title','Product-List')

    @section('header')
        @parent
    @endsection

    @section('content')
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand name" href="/Admin/Product/ProductList">
            <i class="bi bi-window-stack"></i>
            <svg xmlns="http://www.w3.org/2000/svg"  fill="currentColor" class="bi bi-window-stack" viewBox="0 -3 16 22"><path d="M4.5 6a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1M6 6a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1m2-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0"/><path d="M12 1a2 2 0 0 1 2 2 2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2 2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zM2 12V5a2 2 0 0 1 2-2h9a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1m1-4v5a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V8zm12-1V5a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v2z"/></svg>
            SẢN PHẨM
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">

                </li>
            </ul>

          </div>
        </div>
    </nav>

    <table class="table Product">
        <thead class="table-backgroupColor">
            <tr>
                <th scope="col" class="product-border-th-stt">STT</th>
                <th scope="col" class="product-border-th-Product">TÊN SẢN PHẨM</th>
                <th scope="col" class="product-border-th-Price">GIÁ</th>
                <th scope="col" class="product-border-th-Category">LOẠI SẢN PHẨM</th>
                <th scope="col" class="product-border-th-Brand">HÃNG SẢN XUẤT</th>
                <th scope="col" class="product-border-th-function">CHỨC NĂNG</th>
            </tr>
        </thead>
        <tbody>
            @php
            $stt = ($products->currentPage() - 1) * $products->perPage() + 1;
            @endphp
            @foreach($products as $product)
            <tr>
                <td class="product-border-td-stt">{{ $stt++ }}</td>
                <td class="product-border-td-Product">{{ $product->name }}</td>
                <td class="product-border-td-Price">{{ number_format($product->price, 0, ',', '.')  }}VNĐ</td>
                <td class="product-border-td-Category">{{ $product->category->name }}</td>
                <td class="product-border-td-Brand">{{ $product->brand->name ?? ' ' }}</td>
                <td class="product-border-td-function">
                    <div class="edit-delete-product">
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

       <div class="pagination-product">
       <div class="pagination-margin-product">
        <nav aria-label="Page navigation example">
            <ul class="pagination custom-pagination">
                {{ $products->appends(['products_page' => request('products_page')])->links() }}
            </ul>
        </nav>
       </div>

    @endsection


    @section('footer')
        @parent
    @endsection


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
