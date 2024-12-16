<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Demon shop's Register page</title>
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


    <link href="static/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/css/font-awesome.min.css" rel="stylesheet">

    <link href="static/css/slick.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">
    <link href="static/css/responsive.css" rel="stylesheet">
</head>

<body>

    <div class="header-top d-none d-lg-block">
        <div class="container-fluid">
            <div class="row align-items-center">

            </div>
        </div>
    </div>
    <header class="header">

        <div class="topbar">
            <div class="container-fluid">
                <div class="inner">



                </div>
            </div>
        </div>

    </header>





    <section class="section" dir="rtl">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="login_register_box">
                        {{-- <div class="image">
                            <img src="static/picture/register.jpg" class="image-fit" alt="img">
                        </div> --}}
                        <div class="box_inner">
                            <h3 class="title"> ثبت نام کنید</h3>
                            <form action="{{ route('register.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>نام کاربری</label>
                                            <input type="text" name="name"
                                                class="form-control form-control-custom"
                                                placeholder=" نام کاربری را وارد کنید" autocomplete="off"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>شماره تلفن</label>
                                            <input id="phone" type="mobile" name="phone"
                                                class="form-control form-control-custom"
                                                placeholder="شماره خود را وارد کنید" autocomplete="off" required="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>آدرس ایمیل</label>
                                            <input type="email" name="email"
                                                class="form-control form-control-custom"
                                                placeholder="ایمیل خود را وارد کنید" autocomplete="off" required="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>کلمه عبور <a href="#" class="thm-color-one">
                                                </a></label>
                                            <input type="password" name="password"
                                                class="form-control form-control-custom" id="password_value"
                                                placeholder="پسورد خود را وارد کنید " autocomplete="off" required="">
                                            <span></span>
                                            </button>
                                        </div>
                                    </div>
                                    {{-- <div class="col-12">
                                        <div class="form-group">
                                            <label>تکرار کلمه عبور<a href="#" class="thm-color-one">
                                                </a></label>
                                            <input type="password_confirmation" name="password_confirmation"
                                                class="form-control form-control-custom" id="password_confimation_value"
                                                placeholder="پسورد خود را تکرار کنید " autocomplete="off" required="">
                                            <span></span>
                                            </button>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="col-12">
                                        <div class="form-group">
                                            <div class="custom-control custom-radio mr-sm-2">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="radioValidation">
                                                <label class="custom-control-label" for="radioValidation">من ربات
                                                    نیستم</label>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div class="col-12">
                                        <button type="submit" class="thm-btn btn-rectangle thm-bg-color-one w-100">ثبت
                                            نام</button>
                                        <p class="mt-3 mb-0 text-center fw-500">در حال حاضر یک حساب کاربری دارید؟ <a
                                                href="{{ route('login') }}" class="thm-color-one">وارد شوید</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- <footer class="footer section-padding">
        <div class="second-footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 widget-area">
                        <div class="footer-logo">
                            <a href="index.html"><img src="static/picture/logo.png" class="image-fit"
                                    alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 widget-area">
                        <div class="widget widget_text">
                            <ul class="widget_info_text">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <strong>آدرس مرکزی ما</strong>
                                    <p>شهر تهران، ایران</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 widget-area">
                        <div class="widget widget_text">
                            <ul class="widget_info_text">
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <strong>به ما ایمیل بزنید</strong>
                                    <p><a href="email-protection.html" class="__cf_email__"
                                            data-cfemail="8fc6e1e9e0cfeaf7eee2ffe3eaa1ece0e2">[پست الکترونیک&#160;حفاظت
                                            شده]</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 widget-area">
                        <div class="widget widget_text">
                            <ul class="widget_info_text">
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <strong>با ما تماس بگیرید</strong>
                                    <p>+123-456-7890 / 91</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-sm-4">
                    <div class="ft_widget border-sm-0 pl-sm-0">
                        <h6 class="ft_title">درباره ما</h6>
                        <p>اما من باید با این اشتباه روبرو شوم که همه لذت می برند </p>
                        <p class="mb-2">ما را دنبال کنید:</p>
                        <ul class="ft_social">
                            <li>
                                <a href="#" style="border-radius: 8px 0px 0px 8px;">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" style="border-radius: 0px 8px 8px 0px;">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-4">
                    <div class="ft_widget">
                        <h6 class="ft_title">مرکز کمک</h6>
                        <ul class="ft_menu">
                            <li>
                                <a href="payment.html">صفحه پرداخت</a>
                            </li>
                            <li>
                                <a href="#">حمل دریایی</a>
                            </li>
                            <li>
                                <a href="#">بازده محصول</a>
                            </li>
                            <li>
                                <a href="faqs.html">متداول</a>
                            </li>
                            <li>
                                <a href="checkout.html">بررسی</a>
                            </li>
                            <li>
                                <a href="blog.html">وبلاگ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-4">
                    <div class="ft_widget">
                        <h6 class="ft_title">لینک های مفید</h6>
                        <ul class="ft_menu">
                            <li>
                                <a href="">خانه</a>
                            </li>
                            <li>
                                <a href="contact.html">مخاطب</a>
                            </li>
                            <li>
                                <a href="about.html">در باره</a>
                            </li>
                            <li>
                                <a href="terms-conditions.html">شرایط و ضوابط</a>
                            </li>
                            <li>
                                <a href="privacy.html">خط مشی</a>
                            </li>
                            <li>
                                <a href="order-list.html">دستورات من</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-4">
                    <div class="ft_widget">
                        <h6 class="ft_title">با ما تماس بگیرید</h6>
                        <p class="mb-3">اما من باید با این اشتباه روبرو شوم که همه لذت می برند </p>
                        <img src="static/picture/footer_map.png">
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}


    {{-- <a href="#" data-target="html" class="back-to-top ft-sticky" style="">
        <i class="fal fa-long-arrow-up"></i>
    </a>


    <div class="container-fluid copyright">
        <div class="row">
            <div class="col-md-6">
                <div class="copyright-text">
                    <p class="mb-0"> حق کپی رایت محفوظ است <a target="_blank"
                            href="#">@@</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="money-card">
                    <ul class="money-cards">
                        <li>
                            <img src="static/picture/card-1.png">
                        </li>
                        <li>
                            <img src="static/picture/card-2.png">
                        </li>
                        <li>
                            <img src="static/picture/card-3.png">
                        </li>
                        <li>
                            <img src="static/picture/card-4.png">
                        </li>
                        <li>
                            <img src="static/picture/card-5.png">
                        </li>
                        <li>
                            <img src="static/picture/card-6.png">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}


    <script data-cfasync="false" src="static/js/email-decode.min.js"></script>
    <script src="static/js/jquery-3.6.0.min.js"></script>
    <script src="static/js/bootstrap.bundle.min.js"></script>
    <script src="static/js/slick.min.js"></script>
    <script src="static/js/jquery.magnific-popup.min.js"></script>
    <script src="static/js/jquery.counterup.min.js"></script>
    <script src="static/js/jquery.inview.min.js"></script>
    <script src="static/js/custom.js"></script>
</body>

</html>
