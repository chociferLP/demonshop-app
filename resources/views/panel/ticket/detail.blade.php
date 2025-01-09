@extends('panel.index')
@section('content')
<x-slot name="styles">
    <link rel="stylesheet" href="{{ asset('blog/css/style.css') }}">
</x-slot>
<br><br><br><br><br><br>
<form action="{{ route('ticket.store', $user) }}" method="GET">
    <button style="margin-right: 110px" class="btn btn-primary">ساخت تیکت جدید +</button>
</form>
<table style="background-color: rgb(201, 192, 255)" class="table">
    <thead role="rowgroup">
        <tr style="color: black" role="row" class="title-row">
            <th>شناسه :</th>
            <th>شناسه مکالمه :</th>
            <th>شناسه تیکت مربوطه :</th>
            <th>شناسه ادمین پاسخگو :</th>
            <th>متن چت :</th>
            <th>زمان باز شدن :</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($tickets2 as $ticket)
            <tr style="color: black" role="row" class="">
                <td>{{ $ticket->id }}</td>
                <td>{{ $ticket->id }}</td>
                <td>{{ $ticket->tickets_id }}</td>
                <td>{{ $ticket->admin_id }}</td>
                <td>{{ $ticket->chat }}</td>
                <td>{{ $ticket->created_at }}</td>
            </tr>
        @endforeach
    </tbody>
</table>







@endsection
