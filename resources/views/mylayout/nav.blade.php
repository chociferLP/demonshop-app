@extends('mylayout.header')
@section('navbar')
    <div class="main_navigation hide_cat" dir="rtl">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-6">
                    <div class="nav_inner">
                        <ul class="main-menu">
                            <a href="{{ route('slash') }}">خانه</a>
                            @foreach ($categories as $category)
                                <li class="menu-item"><a
                                        href="{{ route('categories.products', $category->id) }}">{{ $category->slug }}</a>
                                </li>
                            @endforeach
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
                            <form action="{{ route('cart.add', $ShoppingCart) }}" method="POST">
                                @method('POST')
                                @csrf
                                <button class="btn btn-sucsses">سبد خرید</button>
                            </form>
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
    @yield('body')
@endsection
