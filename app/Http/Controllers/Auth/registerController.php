<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class registerController extends Controller
{

    public function index()
    {
       
        return view('auth.register');
    }
    
    public function register(Request $request)
{
    $request->validate([
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6',
    ]);

    User::create([
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->route('usermanagement');

}
}