@extends('panel.index')
@section('content')
    <section class="user_account">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div style="margin-top: -15%" class="section">
                        <div style="padding-right: 100px" class="user_info_box m-64">
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            <x-slot name="styles">
                                <link rel="stylesheet" href="{{ asset('blog/css/style.css') }}">
                            </x-slot>
                            <div class="main-content font-size-13">
                                <div
                                    class="d-flex flex-space-between item-center flex-wrap padding-30 border-radius-3 bg-white">
                                </div>
                                <div class="bg-white table__box">
                                    <br>
                                    <br>
                                    <table style="background-color: rgb(129, 255, 255)" class="table">
                                        <thead role="rowgroup">
                                            <tr style="color: black" role="row" class="title-row">
                                                <th>شناسه</th>
                                                <th>نام کاربری</th>
                                                <th>ایمیل</th>
                                                <th>شماره تلفن</th>
                                                <th>سطح کاربری</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="color: black" role="row" class="">
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->phone }}</td>
                                                <td>{{ $user->role }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <label style="color: black">ویرایش اطلاعات کاربری</label>
                            <br>
                            <form action="{{ route('update.user') }}" method="POST" class="user_form">
                                
                                @csrf
                                <div class="row">
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
                                                name="phone" class="form-control form-control-custom"
                                                placeholder="شماره تماس" autocomplete="off" required="">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div>
                                    <button style="background-color: rgb(255, 0, 0)" type="submit"
                                        class="btn btn-rectangle">ذخیره
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
