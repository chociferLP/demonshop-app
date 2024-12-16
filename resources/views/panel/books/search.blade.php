<!DOCTYPE HTML>
<html lang="fa">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>خانه</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Description website">
    <meta name="author" content="Maksym Blank">
    <meta name="keywords" content="website, with, meta, tags">
    <meta name="robots" content="noindex, follow">
    <meta name="revisit-after" content="5 month">
    <meta name="og:title" content="Title website">
    <meta name="og:description" content="Description website">
    <meta name="og:site_name" content="My Website">
    <meta name="og:type" content="website">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Title website">
    <meta name="twitter:description" content="Description website">
    <link href="{{ asset('static/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('static/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('static/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('static/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('static/css/responsive.css') }}" rel="stylesheet">
</head>

<body>
    <div class="header-top d-none d-lg-block">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-9">
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="top-right text-right">
                        @guest
                            <div>
                                <div><a href="{{ route('login') }}"> <img src="{{ asset('images/crud/door.png') }}">
                                        ورود</a></div>
                                <div><a href="{{ route('register') }}"> <img src="{{ asset('images/crud/key.png') }}"> ثبت
                                        نام</a></div>
                            </div>
                            <div class="search-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" name="#" class="form-control"
                                            placeholder=".....جستجو برای یافتن محصولات" autocomplete="off" required="">
                                        <div class="input-group-append input-group-text">
                                            <button type="submit">
                                                <i class="fal fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="hamburger">
                                        <div class="hamburger_btn">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="topbar">
                            </div>
                        @else
                            <div class="search-form">
                                <form>
                                    <div class="input-group">
                                        <input type="text" name="#" class="form-control"
                                            placeholder=".....جستجو برای یافتن محصولات" autocomplete="off" required="">
                                        <div class="input-group-append input-group-text">
                                            <button type="submit">
                                                <i class="fal fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="hamburger">
                                        <div class="hamburger_btn">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_navigation hide_cat" dir="rtl">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-6">
                    <div class="nav_inner">
                        <ul class="main-menu">
                            <a href="{{ route('slash') }}">خانه</a>
                            @foreach ($categories as $category)
                                <li class="menu-item"><a href="{{ route('books.index') }}">{{ $category->slug }}</a>
                                </li>
                            @endforeach
                            <li class="menu-item"><a href="{{ route('cart.index') }}">سبد خرید </a></li>
                            @guest
                            @else
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit">خروج</button>
                                </form>
                            @endguest
                            @guest
                            @else
                                <li class="menu-item">
                                    <a href="{{ route('dashboard') }}">پروفایل </a>
                                </li>
                            @endguest
                        </ul>
                        <div class="hamburger">
                            <div class="hamburger_btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script data-cfasync="false" src="('static/js/email-decode.min.js') "></script>
    <script src="{{ asset('static/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('static/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('static/js/slick.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('static/js/custom.jsّ') }}"></script>
</body>

</html>
