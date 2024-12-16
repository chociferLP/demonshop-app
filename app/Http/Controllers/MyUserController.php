<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MyUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created user in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|string|unique:users,mobile',
            'password' => 'required|string|min:8|confirmed',

        ]);

        // Create the user
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'mobile' => $validatedData['mobile'] ,
            'password' => bcrypt($validatedData['password']),

        ]);

        return redirect()->route('auth.login')->with('success', 'User created successfully.');
    }
}
