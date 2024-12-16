@extends('panel.index')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="mb-sm-4 d-flex flex-wrap align-items-center text-head">
                <a href="" class="btn btn-primary mb-2 rounded"><i
                        class="las la-calendar flaticon-025-dashboard me-3"></i>پروفایل</a>
            </div>
            <div class="row">
                <div class="col-xl-3 col-xxl-6 col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex">
                            <div class="icon me-3"><svg width="60" height="60" viewbox="0 0 60 60" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="30" cy="30" r="30" fill="white"></circle>
                                </svg></div>
                            <div>
                                @if (auth()->user()->role === 'user' || auth()->user()->role === 'admin')
                                    <h2 class="invoice-num">
                                        <p>تعداد کل دسته بندی ها : </p>
                                        <p>{{ $categories_count }} دسته</p>
                                    </h2>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-xxl-6 col-sm-6">
                    <div class="card">
                        <div class="card-body d-flex">
                            <div class="icon me-3"><svg width="60" height="60" viewbox="0 0 60 60" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                </svg></div>
                            <div>
                                @if (auth()->user()->role === 'admin' || auth()->user()->role === 'user')
                                    <h2 class="invoice-num">
                                        <p>تعداد کل محصولات : </p>
                                        <p>{{ $productsCount }} محصول </p>
                                    </h2>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @if (auth()->user()->role === 'admin')
                    <div class="col-xl-3 col-xxl-6 col-sm-6">
                        <div class="card">
                            <div class="card-body d-flex">
                                <div class="icon me-3"><svg width="60" height="60" viewbox="0 0 60 60" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                    </svg></div>
                                <div>
                                    <h2 class="invoice-num">
                                        <p>تعداد کل سفارشات : </p>
                                        <p> سفارش</p>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if (auth()->user()->role === 'admin')
                    <div class="col-xl-3 col-xxl-6 col-sm-6">
                        <div class="card">
                            <div class="card-body d-flex">
                                <div class="icon me-3"><svg width="60" height="60" viewbox="0 0 60 60" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                    </svg></div>
                                <div>
                                    <h2 class="invoice-num">
                                        <p> مبلغ کل سفارشات : </p>
                                        <p> (هزار تومان)</p>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if (auth()->user()->role === 'admin')
                    <div class="col-xl-3 col-xxl-6 col-sm-6">
                        <div class="card">
                            <div class="card-body d-flex">
                                <div class="icon me-3"><svg width="60" height="60" viewbox="0 0 60 60" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                    </svg></div>
                                <div>
                                    <h2 class="invoice-num">
                                        <p>تعداد کل کاربران : </p>
                                        <p>{{ $users_count }} کاربر</p>
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
