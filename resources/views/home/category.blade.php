<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
    <link href="{{ asset('static/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('static/css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('static/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('static/css/responsive.css') }}" rel="stylesheet">
    <style>
        .store-container {
            display: flex;
            /* Enables horizontal alignment */
            flex-wrap: wrap;
            /* Ensures items wrap to the next line if they overflow */
            gap: 15px;
            /* Adds spacing between items */
            padding-right: auto;
            padding-left: auto;
        }

        .product-card {
            flex: 1 1 calc(25% - 30px);
            /* Makes items responsive (4 per row by default) */
            box-sizing: border-box;
            /* Includes padding/border in size calculation */
            padding: 1px;
            border: 3px solid #636363;
            border-radius: 22px;
            background-color: #faeeeefd;
            text-align: center;
        }

        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product-card h3 {
            font-size: 1.2em;
            margin: 10px 0;
        }

        .product-card p {
            margin: 5px 0;
            font-size: 0.9em;
            color: #555;
        }

        .original-price {
            color: #999;
            /* Grey color for original price */
            font-size: 0.9em;
            /* Slightly smaller font size */
            margin-right: 10px;
        }

        .offer-price {
            color: #e63946;
            /* Red color for the discounted price */
            font-weight: bold;
            font-size: 1.2em;
        }
    </style>
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
                                <form method="GET" action="{{ route('slash') }}">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control"
                                            placeholder=".....جستجو برای یافتن محصولات" value="{{ request('search') }}"
                                            autocomplete="on" required="">
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
                        @else
                            <div class="search-form">
                                <form method="GET" action="{{ route('slash') }}">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control"
                                            placeholder=".....جستجو برای یافتن محصولات" value="{{ request('search') }}"
                                            autocomplete="on" required="">
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
                                <li class="menu-item"><a href="{{ route('category.home', $category->slug) }}">{{ $category->slug }}</a>
                                </li>
                            @endforeach
                            <li class="menu-item"><a href="">سبد خرید </a></li>
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
    <section>
        <div class="section-header">
            <h3 class="title">لیست کتاب ها</h3>
            <p class="text"></p>
            <form method="GET" action="{{ route('books.index') }}">
                <select title="مرتب سازی" name="sort" onchange="this.form.submit()">
                    <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>کمترین تا
                        بیشترین
                    </option>
                    <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>بیشترین
                        تا کمترین
                    </option>
                </select>
            </form>
        </div>
        <div class="store-container">
            @foreach ($products as $product)
                <div class="product-card">
                    <div>
                        @if ($product->profile_pic)
                            <a>
                                <img src="{{ asset('storage/' . $product->profile_pic) }}" class="image-fit-contain"
                                    alt="{{ $product->name }}" style="max-width: 300px; height: auto;">
                            </a>
                        @endif
                        <div class="original-price">
                            <span>تومان : {{ number_format($product->price, 2) }} <br></span>
                        </div>
                        <del>
                            <span>تومان : {{ number_format($product->price + 500000, 2) }}</span>
                        </del>
                    </div>
                    <h4 class="title"><a href="shop-details.html">{{ $product->name }}</a></h4>
                    <div class="product_action">
                        <button style="background-color: rgb(253, 238, 25)" type="button" class="btn">خرید <i
                                class="fal fa-plus"></i></button>
                    </div>
                </div>
            @endforeach
        </div>
    </section>




    <script data-cfasync="false" src="{{ asset('static/js/email-decode.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('static/js/bootstrap.bundle.min.jsstatic/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('static/js/slick.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('static/js/custom.js') }}"></script>
</body>

</html>
