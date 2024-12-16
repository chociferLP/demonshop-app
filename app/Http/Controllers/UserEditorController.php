<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\Panel\User\UpdateUserRequest;

class UserEditorController extends Controller
{
    public function edit(User $user)
    {
        return view('panel.users.crud.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        dd(44);
        $user->update(
            $request->validated()
        );


        return redirect()->route('users.index');
    }
}
