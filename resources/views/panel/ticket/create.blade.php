@extends('panel.index')
@section('content')
    <br><br><br><br><br><br><br>
    <div style="margin-right: 110px" class="form-group">
        <label style="color: black" for="title">موضوع تیکت :</label>
        <br>
        <input style="background-color: rgb(253, 250, 61)" type="text" name="tickettitle" id="slug" class="form-control"
            required>
        <br>
        <br>
        <label style="color: black" for="title">دسته بندی مربوطه :</label>
        <br>
        <select name="ticketgory" class="form-select form-select-lg mb-3" style="background-color: rgb(253, 250, 61)">
            <option style="color: black">دسته بندی مربوطه</option>
            @foreach ($category as $ticket)
                <option style="color: black">
                    {{ $ticket->name }}
                </option>
            @endforeach
        </select>
        <br>
    </div>
@endsection
