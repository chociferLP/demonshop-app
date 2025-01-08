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
                <th>شناسه :</th>
                <th>موضوع :</th>
                <th>وضعیت :</th>
                <th>زمان باز شدن :</th>
                <th>زمان بسه شدن :</th>
                <th>عملیات :</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tickets as $ticket)
                <tr style="color: black" role="row" class="">
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->id }}</td>
                    <td>{{ $ticket->title }}</td>
                    <td>{{ $ticket->status }}</td>
                    <td>{{ $ticket->created_at }}</td>
                    <td>{{ $ticket->updated_at }}</td>
                    <td>
                        <button style="background-color: rgb(119, 255, 85)" class="btn btn-btn-primary">متن و جزعیات</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
        {{-- {{ $tickets->links() }} --}}
    </table>
@endsection
