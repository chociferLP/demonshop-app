@extends('panel.index')
@section('content')
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ asset('blog/css/style.css') }}">
    </x-slot>
    
    <div class="main-content font-size-13">
        <div class="tab__box">
            <div class="tab__items">
                <a class="tab__item is-active" href="{{ route('users.index') }}"> کاربران</a>
            </div>
        </div>
        <div class="d-flex flex-space-between item-center flex-wrap padding-30 border-radius-3 bg-white">
        </div>
        <div class="bg-white table__box">
            <br>
            <br>
            <table class="table">
                <thead role="rowgroup">
                    <tr role="row" class="title-row">
                        <th>شناسه</th>
                        <th>شناسه</th>
                        <th>نام کاربری</th>
                        <th>ایمیل</th>
                        <th>شماره تلفن</th>
                        <th>سطح کاربری</th>
                        <th>عملیات</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr role="row" class="">
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->role }}</td>
                            <td>
                                @if (auth()->user()->id !== $user->id && $user->role !== 'admin')
                                    <form action="{{ route('admin.user.delete', $user->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button class="btn"><img
                                                src="{{ asset('images/button/crud/delete.png') }}"></button>
                                    </form>
                                @endif
                                <form action="{{ route('admin.user.edit', $user->id) }}">
                                    <button type="submit" class="btn"><img
                                            src="{{ asset('images/button/crud/edit.png') }}" alt="Logo"
                                            style="height: 20px;"></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
    <x-slot name="scripts">
        <script>
            function destroyUser(event, id) {
                event.preventDefault();
                Swal.fire({
                    title: 'ایا مطمئن هستید این کار را میخواهید حذف کنید؟',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: 'rgb(221, 51, 51)',
                    cancelButtonColor: 'rgb(48, 133, 214)',
                    confirmButtonText: 'بله حذف کن!',
                    cancelButtonText: 'کنسل'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById(`destroy-user-${id}`).submit()
                    }
                })
            }
        </script>
    </x-slot>
@endsection
