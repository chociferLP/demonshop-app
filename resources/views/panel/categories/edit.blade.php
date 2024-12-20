@extends('panel.index')
@section('content')
    <br><br><br><br><br><br><br><br><br><br>
    <div class="container">
        <h1>دسته بندی :</h1>
        <form action="{{ route('categories.update', $category) }}" method="POST">
            @csrf
            @method('PUT')
            <br>
            <div class="mb-3">
                <label style="color: black" for="name" class="form-label">نام انگلیسی :</label>
                <input style="background-color: rgb(255, 243, 80)" type="text" name="name" id="name"
                    class="form-control" value="{{ old('name', $category->name) }}" required>
            </div>
            <div class="mb-3">
                <label style="color: black" for="description" class="form-label">نام فارسی :</label>
                <input style="background-color: rgb(255, 243, 80)" type="text" name="slug" id="slug"
                    class="form-control" value="{{ old('slug', $category->slug) }}" required>
            </div>
            <button type="submit" class="btn btn-primary">بروزرسانی</button>
        </form>
    </div>
@endsection
