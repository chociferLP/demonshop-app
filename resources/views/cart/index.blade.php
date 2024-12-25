<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>سبد خرید</title>
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
    <section class="section-padding pb-0" dir="rtl">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive cart_table">
                        @foreach ($items as $item)
                        
                            <table>
                                <thead>
                                    <tr>
                                        <th class="remove-item"></th>
                                        <th> محصول</th>
                                        <th>قیمت (هزار تومان) :</th>
                                        <th> تعداد</th>
                                        <th>جمع (هزار تومان)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="remove">
                                            <form action="{{ route('destroy.cart') }}" method="POST">
                                                @method('delete')
                                                @csrf
                                                <button class="remove-from-cart" type="button">
                                                    <span></span>
                                                    <span></span>
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="cart_product">
                                                <div class="cart_product_text">
                                                    <h6 class="title">
                                                        <a>{{ $item->product->name }}</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <strong>{{ $item->product->price }}</strong>
                                        </td>
                                        <td class="product_block product_details">
                                            <div class="product_action">
                                                <div class="quantity m-0">
                                                    {{-- <button class="btn qty-mins" type="button"><i
                                                            class="fal fa-plus"></i></button> --}}
                                                    <a style="color: black">{{ $item->count }}</a>
                                                    {{-- <button class="btn qty-add" type="button"><i
                                                            class="fal fa-minus"></i></button> --}}
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <strong>
                                                <div>{{ $item->count * $item->product->price }}</div>
                                            </strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section pt-0">
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-lg-5">
                    <form action="{{ route('order.add', [$ShoppingCart, $user]) }}" method="POST">
                        @csrf
                        <button class="thm-btn btn-rectangle thm-bg-color-one w-100">پرداخت</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script data-cfasync="false" src="{{ asset('static/js/email-decode.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('static/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('static/js/slick.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('static/js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('static/js/custom.js') }}"></script>
</body>

</html>
