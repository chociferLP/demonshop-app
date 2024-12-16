@extends('mylayout.app')
@section('main')
    <section class="section-padding">
        <div class="container-fluid">
            <div class="section-header">
                <h3 class="title"> محصولات پر فروش</h3>
            </div>
            <div class="fruits-slider row">
                <div class="slide-item col-12">
                    <div class="product_block ">
                        <div class="product_image">
                            <a href="shop-details.html">
                                <img src="static/picture/19.png" class="image-fit-contain" alt="img">
                            </a>
                            <ul class="social">
                                <li>
                                    <a href="" data-tip="quick view">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" data-tip="quick view">
                                        <i class="fa fa-cart-plus" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" data-tip="quick view">
                                        <i class="fa fa-cube" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="" data-tip="quick view">
                                        <i class="fal fa-heart" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <h4 class="title"><a href="shop-details.html">نام پیشرفته چگونه </a></h4>
                        <div class="price">
                            <span>55000 تومان</span>
                            <span>80.25 تومان</span>
                        </div>
                        <div class="star-ratings">
                            <ul class="rating">
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star-half" aria-hidden="true"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star-half" aria-hidden="true"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="product_action">
                            <button type="button" class="product_btn">خرید <i class="fal fa-plus"></i></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
