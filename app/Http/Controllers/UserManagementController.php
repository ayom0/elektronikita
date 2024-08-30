<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserManagementController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.UserManagement', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'registration_date' => 'required|date',
        ]);

        $user = new User();
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->registration_date = $request->registration_date;
        $user->save();

        return redirect()->route('usermanagement.index')->with('success', 'User added successfully');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'nullable|string|min:3',
            'registration_date' => 'required|date',
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'email' => $request->email,
            'password' => $request->password ? Hash::make($request->password) : $user->password,
            'registration_date' => $request->registration_date,
        ]);

        return redirect()->route('usermanagement.index')->with('success', 'User updated successfully.');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('usermanagement.index')->with('success', 'User deleted successfully');
    }
}

