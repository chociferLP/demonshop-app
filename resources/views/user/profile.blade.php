@extends('panel.index')
@section('content')
    <section class="user_account">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="section">
                        <div class="user_info_box">
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                            <form action="#" method="POST" class="user_form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>نام</label>
                                            <input style="background-color: rgb(241, 241, 120)" type="text"
                                                name="name" class="form-control form-control-custom" placeholder="نام"
                                                autocomplete="off" required="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>آدرس ایمیل</label>
                                            <input style="background-color: rgb(241, 241, 120)" type="email"
                                                name="email" class="form-control form-control-custom"
                                                placeholder="آدرس ایمیل" autocomplete="off" required="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>شماره تماس</label>
                                            <input style="background-color: rgb(241, 241, 120)" type="text"
                                                name="mobile" class="form-control form-control-custom"
                                                placeholder="شماره تماس" autocomplete="off" required="">
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <button type="submit" class="thm-btn btn-rectangle thm-bg-color-three">ذخیره
                                        تغییرات</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
