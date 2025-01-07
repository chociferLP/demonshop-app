@extends('panel.index')
@section('content')
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('blog/css/style.css') }}">
    </x-slot>

    <br><br><br><br><br><br>



    <form action="{{ route('ticket.store', $user) }}" method="GET">
        <button style="margin-right: 110px" class="btn btn-primary">ساخت تیکت</button>
    </form>
@endsection
