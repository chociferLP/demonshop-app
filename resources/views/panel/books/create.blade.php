@extends('panel.index')
@section('content')
    <br><br><br><br><br><br><br><br><br><br>
    <div class="container">
        <label style="color: blue">افزودن محصول جدید :</label>
        <br><br>
        <form action="{{ route('upload') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <label style="color: black" for="name">نام محصول</label>
                <input style="background:  rgb(250, 248, 146)" type="text" name="name" id="name"
                    class="form-control" required>
            </div>
            <br><br>
            <div class="form-group">
                <label style="color: black" for="description">توضیحات محصول</label>
                <input style="background:  rgb(250, 248, 146)" type="text" name="description" id="description"
                    class="form-control" required>
            </div>
            <br><br>
            <div class="form-group">
                <label style="color: black" for="price">قیمت محصول (هزار تومان)</label>
                <input style="background:  rgb(250, 248, 146)" type="int" name="price" id="price"
                    class="form-control" required>
            </div>
            <br><br>
            <div class="form-group">
                <label style="color: black" for="profile_pic">تصویر محصول را انتخاب کنید :</label>
                <input style="background: rgb(250, 248, 146)" type="file" name="profile_pic" id="profile_pic"
                    class="form-control">
                @error('profile_pic')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <br><br>
            <div>
                <label style="color: black">دسته بندی مورد نظر را انتخاب کنید :</label>
                <select name="category_id" style="background: rgb(250, 248, 146)" class="form-select form-select-lg mb-3"
                    aria-label="Default select example" title="دسته بندی مورد نظر را انتخاب کنید">
                    @foreach ($categories as $category)
                        <option style="color: black" value="{{ $category->id }}">{{ $category->slug }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">ساخت محصول</button>
        </form>
    </div>
@endsection
