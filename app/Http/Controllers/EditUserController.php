<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EditUserController extends Controller
{
    public function page()
    {
        $user = auth()->user();

        return view('user.profile', compact('user'));
    }
    public function update(Request $request, $id)
    {


        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone')
        ]);
        return redirect()->back();
    }
}
