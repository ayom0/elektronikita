<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        // Retrieve the currently authenticated user
        $user = Auth::user();

        // Pass the user to the profile view
        return view('users.profile', ['user' => $user]);
    }

    public function update(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'address' => 'required|string|max:255',
        ]);

        // Retrieve the currently authenticated user
        $user = Auth::user();

        // Update the user's address
        $user->address = $request->input('address');
        $user->save();

        // Redirect back to the profile page with a success message
        return redirect()->route('profile')->with('success', 'Alamat berhasil diperbarui.');
    }
}