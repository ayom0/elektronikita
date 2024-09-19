<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register'); // Return registration view
    }

    public function store(Request $request)
    {
        // Validate incoming registration data
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
            'phone_number' => 'required',
            'address' => 'nullable',
        ]);

        // Create a new user with registration details
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'registration_date' => now(),
        ]);

        // Log the user in
        Auth::login($user);

        // Redirect to the profile page after registration
        return view('users.Home');
    }
}

