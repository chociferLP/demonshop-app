<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EditUserController extends Controller
{
    public function page()
    {
        $user = auth()->user();

        return view('user.profile',compact('user'));
    }
}
