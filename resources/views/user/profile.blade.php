@extends('panel.index')
@section('content')
    <section class="user_account">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div style="margin-top: -15%" class="section">
                        <div style="padding-right: 100px" class="user_info_box m-64">
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            <form action="#" method="POST" class="user_form">
                                <div  class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label style="color: black">نام جدید :</label>
                                            <input style="background-color: rgb(241, 241, 120)" type="text"
                                                name="name" class="form-control form-control-custom" placeholder= "نام"
                                                autocomplete="off" required="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label style="color: black">ایمیل جدید :</label>
                                            <input style="background-color: rgb(241, 241, 120)" type="email"
                                                name="email" class="form-control form-control-custom"
                                                placeholder="آدرس ایمیل" autocomplete="off" required="">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label style="color: black">شماره تماس جدید :</label>
                                            <input style="background-color: rgb(241, 241, 120)" type="text"
                                                name="mobile" class="form-control form-control-custom"
                                                placeholder="شماره تماس" autocomplete="off" required="">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <button style="background-color: rgb(255, 0, 0)" type="submit" class="btn btn-rectangle">ذخیره
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
