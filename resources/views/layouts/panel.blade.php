<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
    <title>پنل مدیریت کاربران {{ $title ?? '' }}</title>
    {{ $styles ?? '' }}
    <link rel="stylesheet" href="{{ asset('blog/panel/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('blog/panel/css/responsive_991.css') }}" media="(max-width:991px)">
    <link rel="stylesheet" href="{{ asset('blog/panel/css/responsive_768.css') }}" media="(max-width:768px)">
    <link rel="stylesheet" href="{{ asset('blog/panel/css/font.css') }}">
</head>

<body>
    <div class="sidebar__nav border-top border-left  ">
        <span class="bars d-none padding-0-18"></span>
        <a class="header__logo  d-none" href="https://webamooz.net"></a>
        <div class="profile__info border cursor-pointer text-center">
            <div class="avatar__img"><img src="{{ asset('blog/panel/img/pro.jpg') }}" class="avatar___img">
                <input type="file" accept="image/*" class="hidden avatar-img__input">
                <div class="v-dialog__container" style="display: block;"></div>
                <div class="box__camera default__avatar"></div>
            </div>
            <span class="profile__name">کاربر : {{ auth()->user()->name }}</span>
            <span class="profile__name">نقش : {{ auth()->user()->getRoleInFarsi() }}</span>
        </div>

        @include('_partials.panel-sidebar')

    </div>
    <div class="content">
        <div class="header d-flex item-center bg-white width-100 border-bottom padding-12-30">
            <div class="header__right d-flex flex-grow-1 item-center">
                <span class="bars"> <img src="{{ asset('images/button/crud/arrow.png') }}" alt="Logo"
                        style="height: 20px;"> </span>
                <a class="header__logo" href="{{ route('landing') }}"></a>
            </div>
            <div class="header__left d-flex flex-end item-center margin-top-2">
                <a href="{{ route('logout') }}" class="" title="خروج"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <img
                        src="{{ asset('images/button/crud/logout.png') }}" alt="Logo" style="height: 20px;"></a>
                <form action="{{ route('logout') }}" method="post" id="logout-form">
                    @csrf
                </form>
            </div>
        </div>
        {{ $slot }}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @if (Session::has('status'))
        <script>
            Swal.fire({
                title: "{{ session('status') }}",
                confirmButtonText: 'تایید',
                icon: 'success'
            })
        </script>
    @endif

    <script src="{{ asset('blog/panel/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('blog/panel/js/js.js') }}"></script>
    {{ $scripts ?? '' }}
</body>

</html>
