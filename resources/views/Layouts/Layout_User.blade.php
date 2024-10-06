<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/Layout_User.css" rel="stylesheet">
    <title>Layout_User</title>
    <title></title>

</head>

<body>
    @section('header')
        <div class="w-100">
            <!-- -->
            <div class="top-header">
                <p class="top-header-content">
                    Hotline: <strong>0968 239 497 - 097 221 6881</strong> |
                    Tư vấn build PC :  <strong> 0986552233 </strong> |
                    Địa chỉ: CS1 : <strong> 180D Thái Thịnh </strong> |
                    CS2 : <strong> 83-85 Thái Hà - Đống Đa - Hà Nội </strong> |
                    CS3 : <strong> 40 Đường Vĩnh Viễn - Q10 - TP.HCM </strong>
                </p>
            </div>
            <!-- -->
            <!-- Thanh Điều Hướng-->
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">
                    <img class="img-logo-ttg" src="/storage/img/Logo/Logo-1.jpg" alt="">
                  </a>

                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item nav-logo">
                                <form class="d-flex search" role="search">
                                    <input class="form-control me-2 input-search" type="search" placeholder="Tìm kiếm sản phẩm ..." aria-label="Search">
                                    <button class="btn btn-warning" type="submit">
                                        <i class="bi bi-search icon-search"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search icon-search" viewBox="0 0 16 16"><path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/></svg>
                                    </button>
                                </form>
                            </li>
                        </ul>
                        <div class="bi-person-bi-bag">
                            <a class="nav-link bi-person" href="#" >
                                <i class="bi bi-person icon-bi-person"></i><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person icon-bi-person" viewBox="0 0 16 16"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/></svg>
                                Đăng nhập / Đăng Ký
                            </a>

                            <a class="nav-link bi-bag" href="#" >
                                <i class="bi bi-bag icon-bi-bag"></i><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-bag icon-bi-bag" viewBox="0 0 16 16"><path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/></svg>
                                Giỏ hàng
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Thanh Điều Hướng -->
            <!-- Icon Vận Chuyển - Đảm Bảo Chất Lượng - Build PC -->
            <div class="top-header-category">
                        <div class="col-12">
                            <div class="Shipping-Quality-Build">
                                <div class="div-img-quality">
                                    <img class="img-quality" src="/storage/img/Logo/icon-chat-luong.jpg" alt="">
                                    Đảm bảo chất lượng
                                </div>
                                <div class="div-img-shipping">
                                    <img class="img-shipping" src="/storage/img/Logo/icon-van-chuyen.jpg" alt="">
                                    Vận chuyển siêu tốc
                                </div>
                                <div class="div-img-build">
                                    <img class="img-build" src="/storage/img/Logo/icon-so-dien-thoai.jpg" alt="">
                                    Build PC: 0393482408
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Icon Vận Chuyển - Đảm Bảo Chất Lượng - Build PC -->
        </div>
    @show

        @yield('content')


    @section('footer')

    @show

    <script src="{{ asset('js/admin-user-message.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>

</html>
