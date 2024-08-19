<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/Layout_Login.css" rel="stylesheet">
    <title>Đăng Nhập - Đăng Ký</title>
</head>
<body>
    @extends('Layouts.Layout_User')
    @section('title','Layout_Login')

    @section('header')
        @parent
    @endsection

    @section('content')
    <div class="container-xxl">
        <div class="w-100">
            <div class="row">
                <div class="col-6 form-login">
                    <form class="form login" method="POST" action="{{ route('login') }}">
                        @csrf
                        <p class="title login">ĐĂNG NHẬP</p>

                        <label>
                            <input class="input" type="email" name="email" required autofocus>
                            <span>Email</span>
                        </label>

                        <label>
                            <input class="input" type="password" name="password" required>
                            <span>Mật Khẩu</span>
                        </label>

                        <button class="submit" type="submit" >Đăng Nhập</button>
                    </form>
                </div>
                <div class="col-6 form-register">
                    <form class="form register ">
                        <p class="title">ĐĂNG KÝ THÀNH VIÊN MỚI</p>
                            <div class="flex">
                            <label>
                                <input class="input" type="text" placeholder="" required="">
                                <span>Họ</span>
                            </label>

                            <label>
                                <input class="input" type="text" placeholder="" required="">
                                <span>Tên</span>
                            </label>
                           </div>

                        <label>
                            <input class="input" type="email" placeholder="" required="">
                            <span>Email</span>
                        </label>

                        <label>
                            <input class="input" type="password" placeholder="" required="">
                            <span>Mật Khẩu</span>
                        </label>
                        <label>
                            <input class="input" type="password" placeholder="" required="">
                            <span>Nhập Lại Mật Khẩu</span>
                        </label>
                        <button class="submit">Đăng ký</button>
                    </form>

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
