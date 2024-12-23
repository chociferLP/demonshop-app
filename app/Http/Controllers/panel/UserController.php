<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Panel\User\CreateUserRequest;
use App\Http\Requests\Panel\User\UpdateUserRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $id = auth()->id();
        $users = User::paginate(5);

        return view('panel.users.crud.index', compact('users','id'));
    }

    public function create()
    {
        return view('panel.users.create');
    }

    public function store(CreateUserRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make('password');

        User::create($data);

        $request->session()->flash('status', 'کاربر به درستی ایجاد شد!');

        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        return view('panel.users.crud.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());
        return redirect()->route('admin.user.index')->with('success', 'کاربر با موفقیت به‌روزرسانی شد.');
    }


    public function destroy(Request $request, User $user)
    {


        $user->delete();

        return back();
    }

}
