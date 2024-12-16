<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DemonShop | Loginpage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h3 class="text-center mb-4">ورود</h3>
                <div class="card">
                    <div class="card-body">
                        @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">ادرس ایمیل </label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="ایمیل خود را وارد کنید" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">رمز عبور</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="رمز عبور خود را وارد کنید" required>
                            </div>

                            {{-- <div class="mb-3 form-check">
                                <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                <label for="remember" class="form-check-label">Remember Me</label>
                            </div> --}}

                            <button type="submit" class="btn btn-primary w-100">ورود</button>
                        </form>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="{{ route('register') }}">ثبت نام نکردید ؟ ورود به صفحه ثبت نام</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
