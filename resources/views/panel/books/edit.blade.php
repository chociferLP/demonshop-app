@extends('panel.index')
@section('content')
    <br><br><br><br><br><br><br><br><br><br>
    <div class="container">
        <h1>ویرایش کتاب {{ $product->name }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <br>
            <div class="mb-3">
                <label style="color: black" for="name" class="form-label">نام محصول :</label>
                <input style="background-color: rgb(255, 243, 80)" type="text" name="name" id="name"
                    class="form-control" value="{{ old('name', $product->name) }}" required>
            </div>

            <div class="mb-3">
                <label style="color: black" for="description" class="form-label">توضیحات :</label>
                <textarea style="background-color: rgb(255, 243, 80)" name="description" id="description" class="form-control">{{ old('description', $product->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label style="color: black" for="price" class="form-label">قیمت :</label>
                <input style="background-color: rgb(255, 243, 80)" type="number" name="price" id="price"
                    class="form-control" value="{{ old('price', $product->price) }}" step="0.01" required>
            </div>
            <div class="mb-3">
                <label style="color: black" for="profile_pic" class="form-label">تصویر محصول :</label>
                <input style="background-color: rgb(255, 243, 80)" type="file" name="profile_pic" id="profile_pic"
                    class="form-control" value="{{ old('profile_pic', $product->profile_pic) }}" required>
            </div>
            <div>
                <label style="color: black">دسته بندی مورد نظر را انتخاب کنید :</label>
                <select name="category_id" style="background: rgb(250, 248, 146)" class="form-select form-select-lg mb-3"
                    aria-label="Default select example" title="دسته بندی مورد نظر را انتخاب کنید">
                    @foreach ($categories as $category)
                        <option style="color: black" value="{{ $category->id }}">{{ $category->slug }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">بروزرسانی</button>
        </form>
    </div>
@endsection
