@extends('panel.index')
@section('content')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0;">
        {{ $styles ?? '' }}
        <link rel="stylesheet" href="{{ asset('blog/panel/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('blog/panel/css/responsive_991.css') }}" media="(max-width:991px)">
        <link rel="stylesheet" href="{{ asset('blog/panel/css/responsive_768.css') }}" media="(max-width:768px)">
        <link rel="stylesheet" href="{{ asset('blog/panel/css/font.css') }}">
    </head>

    <div class="main-content font-size-13">
        <div class="row no-gutters bg-white margin-bottom-20">
            <div class="col-12">
                <p class="box__title">ویرایش کاربر</p>
                <form action="{{ route('admin.user.update', $user->id) }}" class="padding-30" method="POST">
                    @csrf
                    @method('PUT')
                    نام کاربری   :
                    <input type="text" name="name" class="text" value="{{ $user->name }}"
                        placeholder="نام و نام خانوادگی">
                    @error('name')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    <br>
                    ایمیل کاربر:
                    <input type="email" name="email" class="text" value="{{ $user->email }}" placeholder="ایمیل">
                    @error('email')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="btn btn-webamooz_net">ویرایش کاربر</button>
                </form>

            </div>
        </div>
    </div>
    <script src="{{ asset('blog/panel/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('blog/panel/js/js.js') }}"></script>
    {{ $scripts ?? '' }}
@endsection
