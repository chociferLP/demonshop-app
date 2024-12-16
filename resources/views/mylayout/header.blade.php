@extends('mylayout.app')
@section('main')
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
                                <form method="GET" action="{{ route('home.search') }}">
                                    <div class="input-group">
                                        <input type="text" name="query" class="form-control"
                                            placeholder=".....جستجو برای یافتن محصولات" value="{{ request('query') }}"
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
                            <div class="topbar">
                            </div>
                        @else
                            <div class="search-form">
                                <form method="GET" action="{{ route('home.search') }}">
                                    <div class="input-group">
                                        <input type="text" name="query" class="form-control"
                                            placeholder=".....جستجو برای یافتن محصولات" value="{{ request('query') }}"
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
    @yield('navbar')
@endsection
