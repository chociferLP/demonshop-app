<!DOCTYPE html>
<html dir="rtl" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Boltz : Crypto Admin Template">
    <meta property="og:title" content="Boltz : Crypto Admin Template">
    <meta property="og:description" content="Boltz : Crypto Admin Template">
    <meta property="og:image" content="https://boltz.dexignzone.com/xhtml/social-image.png">
    <meta name="format-detection" content="telephone=no">
    <title>پروفایل</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="{{ asset('vendor/owl-carousel/owl.carousel.css" rel="stylesheet') }}">
    <link href="{{ asset('vendor/jquery-nice-select/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    
    <style>
        .custom-button-location {
            position: absolute; /* Adjust position type */
            top: 100px;          /* Vertical position */
            left: 100px;        /* Horizontal position */
            background-color: #007bff; /* Optional: Styling */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
        }
    </style>
    <div id="preloader">
        <div class="loader">
            <span>{{ auth()->user()->role }}</span><span>{{ auth()->user()->name }}</span>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="nav-header">
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header-content">
                <div class="collapse navbar-collapse justify-content-between"></div>
            </div>
        </div>
        <div class="deznav">
            <div class="deznav-scroll">
                <div class="dropdown header-profile">
                    <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                        <div class="header-info">
                            <span class="font-w400 mb-0">
                                <span class="profile__name">نام کاربری : {{ auth()->user()->name }}</span>
                                <span class="profile__name">نقش : {{ auth()->user()->role }}</span>
                            </span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <form action="{{ route('slash') }}" method="GET">
                            <button class="btn">خانه</button>
                        </form>
                        <form action="{{ route('edit.user') }}" method="GET">
                            @csrf
                            <button class="btn">مشخصات کاربر</button>
                        </form>

                        <form action="{{ route('ticket.index',auth()->user()) }}" method="GET">
                            <button class="btn">تیکت</button>
                        </form>
                    </div>
                </div>
                <ul class="metismenu" id="menu">
                    <li>
                        <a class="ai-icon" href="{{ route('dashboard') }}" aria-expanded="false">
                            <i class="flaticon-025-dashboard"></i>
                            <span class="nav-text">داشبورد</span>
                        </a>
                    </li>
                    <li>
                        <a class="ai-icon" href="{{ route('order.index') }}" aria-expanded="false">
                            <i class="flaticon-041-graph"></i>
                            <span class="nav-text">سفارشات</span>
                        </a>
                    </li>
                    @if (auth()->user()->role === 'admin')
                        <li>
                            <a class="has-arrow ai-icon" href="" aria-expanded="false"><i
                                    class="flaticon-050-info"></i><span class="nav-text">پنل ادمین</span></a>
                            <ul aria-expanded="false">
                                <li><a href="{{ route('admin.user.index') }}">کاربران</a></li>
                                <li><a href="{{ route('product.show') }}">محصولات</a></li>
                                <li><a href="{{ route('category.index') }}">دسته بندی ها</a></li>
                                <li><a href=""></a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        @yield('content')
    </div>
    <script src="{{ asset('vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>
    <script src="{{ asset('vendor/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/deznav-init.js') }}"></script>
</body>

</html>
