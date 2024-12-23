<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EditUserController extends Controller
{
    public function page()
    {
        $user = Auth::user();

        return view('user.profile', compact('user'));
    }
    public function update(Request $request, $id = null)
    {
        $user = Auth::user();
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        ]);
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->save();
        return redirect()->back();
    }
}
