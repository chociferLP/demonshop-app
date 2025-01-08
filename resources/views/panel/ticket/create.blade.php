@extends('panel.index')
@section('content')
    <br><br><br><br><br><br><br>
    <form action="{{ route('ticket.upload', $user) }}" method="POST">
        @csrf
        <div style="margin-right: 110px" class="form-group">
            <label style="color: black" for="title">موضوع تیکت :</label>
            <br>
            <input style="background-color: rgb(253, 250, 61)" type="text" name="title" id="slug" class="form-control"
                required>
            <br>
            <br>
            <label style="color: black" for="category_id">دسته بندی مربوطه :</label>
            <br>
            <select name="category_id" class="form-select form-select-lg mb-3" style="background-color: rgb(253, 250, 61)" required>
                <option style="color: black">دسته بندی مربوطه</option>
                @foreach ($category as $ticket)
                    <option value="{{ $ticket->id }}" style="color: black">
                        {{ $ticket->name }}
                    </option>
                @endforeach
            </select>
            <br>

            <label style="color: black" for="title">متن درخواست شما :</label>
            <br>
            <textarea style="background-color: rgb(253, 250, 61)" class="w-75 form-control" name="matn" rows="8" required>

            </textarea>
            <br>
            <button style="background-color: green" class="btn btn-btn-primary" type="submit">تایید</button>
        </div>
    </form>
@endsection
