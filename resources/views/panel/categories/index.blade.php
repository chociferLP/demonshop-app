@extends('panel.index')
@section('content')
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('blog/css/style.css') }}">
    </x-slot>
    <br><br><br><br><br><br>
    <table class="table">
        <thead role="rowgroup">
            <tr role="row" class="title-row">
                <th>شناسه</th>
                <th>شناسه</th>
                <th>نام انگلیسی دسته بندی</th>
                <th>نام فارسی دسته بندی</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr role="row" class="">
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->slug }}</td>
                    <td>
                        @if (auth()->user()->role === 'admin')
                            <form action="{{ route('category.delete', $category->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn"><img src="{{ asset('images/button/crud/delete.png') }}"
                                        alt="Logo" style="height: 20px;"></button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
        {{ $categories->links() }}
    </table>
    <br><br><br><br><br>
    <div class="container">
        <label style="color: blue">افزودن دسته بندی جدید :</label>
        <br><br>
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label style="color: black" for="name">نام انگلیسی دسته بندی</label>
                <input style="background: rgb(243, 241, 108)" type="text" name="name" id="name"
                    class="form-control" required>
                @error('name')
                    <span class="text-danger">اسم انگلیسی وارد شده اشتباه است</span>
                @enderror
            </div>
            <div class="form-group">
                <label style="color: black" for="slug">نام فارسی دسته بندی</label>
                <input style="background: rgb(243, 241, 108)" type="text" name="slug" id="slug"
                    class="form-control" required>
                @error('slug')
                    <span class="text-danger">اسم فارسی وارد شده اشتباه است</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">ساخت دسته بندی</button>
        </form>
    </div>
@endsection
