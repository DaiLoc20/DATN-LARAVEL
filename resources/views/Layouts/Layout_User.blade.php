<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="/css/Layout_User.css" rel="stylesheet">
    <title>Layout-User</title>
</head>

<body>
    <div class="container-xxl">
        <div class="w-100">
            @section('header')
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                       <li class="nav-item">

                       </li>
                       <li class="nav-item">

                       </li>
                       <li class="nav-item">
                            @if (session('success'))
                                <div id="flash-message" class="message-success"> {{ session('success') }}</div>
                            @endif

                            @if (session('failure'))
                                <div id="flash-message" class="message-failure"> {{ session('failure') }} </div>
                            @endif
                        </li>
                    </ul>
                    <div class="nav-login-card">
                        @auth
                            @if(Auth::user()->is_user_admin == 0)
                                <a class="nav-link" href="/Home/Login">
                                   {{Auth::user()->last_name.' '.Auth::user()->first_name}}
                                </a>
                            @else
                                <a class="nav-link" href="/Layouts/Layout_Admin">
                                   {{Auth::user()->last_name.' '.Auth::user()->first_name}}
                                </a>
                            @endif
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <input type="submit" value="ĐĂNG XUẤT">
                            </form>
                        @endauth

                        @guest
                        <a class="nav-link nav-font-login" href="/Home/Login">
                            <i class="bi bi-person-circle"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16"><path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/><path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/></svg>
                             ĐĂNG NHẬP / ĐĂNG KÝ
                        </a>
                        @endguest

                        <a class="nav-link nav-font-card" href="#">
                            <i class="bi bi-cart3"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16"><path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/> </svg>
                            GIỎ HÀNG
                        </a>
                    </div>
                  </div>
                </div>
              </nav>
            @show

            <div class="container">
                @yield('content')
            </div>
            @section('footer')
                <div class="col-12">
                </div>
            @show
        </div>
    </div>
    <script src="{{ asset('js/admin-user-message.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
</body>

</html>
