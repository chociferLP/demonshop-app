<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>صفحه جزعیات</title>
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
</head>

<body>
    <section class="section pb-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8">
                    <div class="shop_details_box">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="product_slider_box">
                                    <div class="product_slider">
                                        <div class="slide_item">
                                            <img src="{{ asset('storage/' . $product->profile_pic) }}"
                                                class="image-fit-contain" alt="{{ $product->name }}"
                                                style="max-width: 300px; height: auto;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="product_details product_block">
                                    <h2>
                                        <p style="color: black">نام محصول :</p><span
                                            style="color: rgba(0, 0, 0, 0.295)">{{ $product->name }}</span>
                                    </h2>
                                    <form action="{{ route('order.add', $product->id) }}" method="POST">
                                        <button style="background-color: blue" class="btn"><a style="color: white">خرید</a></button>
                                    </form>
                                    <div class="price">
                                        <span>{{ $product->price }} هزار تومان </span>
                                        <span></span>
                                    </div>
                                    <div class="price">
                                        <span></span>
                                        <span>{{ $product->price + 50 }} هزار تومان </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="col-xl-4">
                    <div class="product_sidebar">
                        <div class="product_sidebar_wrap">
                            <div class="sidebar_widget">
                                <a href="{{ route('slash') }}">بازگشت به صفحه اصلی <img
                                        src="{{ asset('images/button/crud/arrow.png') }}"></a>
                                <h5 class="widget_title">جزئیات محصول</h5>
                                <div class="product_info">
                                    <p style="color: black" class="mb-0">توضیحات :</p>
                                    <br>
                                    <a>{{ $product->description }}</a>
                                    <br>
                                    <br>
                                    <h6>مشخصات فنی</h6>
                                    <ul>
                                        <li>
                                            <p style="color: black" class="mb-0">دسته بندی ها :</p>
                                            <a>{{ $product->category->slug }}</a>
                                        </li>
                                        <li>
                                            <p style="color: black" class="mb-0">شروع فروش از :</p>
                                            <a>{{ $product->created_at }}</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <a href="#" data-target="html" class="back-to-top ft-sticky" style="">
        <i class="fal fa-long-arrow-up"></i>
    </a>
    <script data-cfasync="false" src="{{ asset('') }}static/js/email-decode.min.js"></script>
    <script src="{{ asset('static/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('static/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('static/js/slick.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('static/js/custom.js') }}"></script>
</body>

</html>
