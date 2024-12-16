@extends('panel.index')
@section('content')
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('blog/css/style.css') }}">
    </x-slot>
    <div class="breadcrumb">
        <ul>
            <li><a href="{{ route('dashboard') }}">پیشخوان</a></li>
            <li><a href="{{ route('users.index') }}" class="is-active">کاربران</a></li>
        </ul>
    </div>
    <div class="main-content font-size-13">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active" href="{{ route('users.index') }}"> کاربران</a>
            </div>
        </div>
        <div class="d-flex flex-space-between item-center flex-wrap padding-30 border-radius-3 bg-white">
        </div>
        <div class="bg-white table__box">
            <br>
            <br>
            <table class="table">
                <thead role="rowgroup">
                    <tr role="row" class="title-row">
                        <th>شناسه مل</th>
                        <th style="color: black">شناسه محصول :</th>
                        <th style="color: black">نام محصول :</th>
                        <th style="color: black">توضیحات :</th>
                        <th style="color: black">قیمت (هزار تومان) :</th>
                        <th style="color: black">دسته بندی :</th>
                        <th style="color: black">عملیات :</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr role="row" class="">
                            <td style="color: black">{{ $product->id }}</td>
                            <td style="color: black">|  {{ $product->id }}  |</td>
                            <td style="color: black">#  {{ $product->name }}  </td>
                            <td style="color: black">#  {{ $product->description }}</td>
                            <td style="color: black">#  {{ $product->price }}</td>
                            <td style="color: black">| {{$product->category->slug}} |</td>
                            <td>
                                <form action="{{ route('product.delete', $product->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn"><img
                                            src="{{ asset('images/button/crud/delete.png') }}"></button>
                                </form>
                                <form action="{{ route('products.edit', $product->id) }}" method="GET" title="ویرایش">
                                    <button class="btn">
                                        <img src="{{ asset('images/button/crud/edit.png') }}" alt="Logo"
                                            style="height: 20px;">
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <form action="{{ route('product.create') }}">
                        <span>''</span><span>''</span><span>''</span><span>''</span><span>''</span><span>''</span><span>''</span><span>''</span>
                        <span>''</span><span>''</span><span>''</span><span>''</span><span>''</span><span>''</span><span>''</span><span>''</span>
                        <span>''</span><span>''</span><span>''</span><span>''</span><span>''</span><span>''</span><span>''</span><span>''</span>
                        <button style="background-color: blue" class="btn">ساخت محصول جدید</button>
                        <br><br>
                    </form>
                </tbody>

            </table>

        </div>
    </div>
@endsection
