<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'min:8'],
            'phone' => ['required','string','max:15'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('slash'));
    }
    public function addProduct(Request $request)
    {
        // Validate the input
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        // Get the currently authenticated user
        $user = Auth::user();

        // Update the user's product_id
        $user->product_id = $request->product_id;
        $user->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product added to your account successfully!');
    }
    public function CreateTicket()
    {
        
    }
}
