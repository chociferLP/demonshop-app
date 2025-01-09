@extends('panel.index')
@section('content')
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('blog/css/style.css') }}">
    </x-slot>
    <br><br><br><br><br><br>
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
            @foreach ($chat as $ticket)
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
