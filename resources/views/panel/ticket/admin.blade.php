@extends('panel.index')
@section('content')
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('blog/css/style.css') }}">
    </x-slot>
    <br><br><br><br><br><br>
    <div class="container">
        <h1>Notifications</h1>

        @if ($notifications->isEmpty())
            <p>No notifications at the moment.</p>
        @else
            <ul class="list-group">
                @foreach ($notifications as $notification)
                    <li class="list-group-item {{ $notification->read_at ? '' : 'list-group-item-primary' }}">
                        <div>
                            <strong>{{ $notification->data['title'] }}</strong>
                            <span class="text-muted">— زمان ساخت :
                                {{ \Carbon\Carbon::parse($notification->data['created_at'])->format('M d, Y h:i A') }}</span>
                        </div>
                        <p>
                            شناسه تیکت جدید : {{ $notification->data['ticket_id'] }}
                        </p>
                        <a href="{{ url('/ticket/show/' . $notification->data['ticket_id']) }}"
                            class="btn btn-sm btn-primary">مشاهده</a>

                        {{-- @if (is_null($notification->read_at))
                            <form method="POST" action="{{ route('notifications.markAsRead', $notification->id) }}"
                                style="display: inline;">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-sm btn-success">Mark as Read</button>
                            </form>
                        @endif --}}
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
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
