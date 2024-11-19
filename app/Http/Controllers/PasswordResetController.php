<?php
// app/Http/Controllers/PasswordResetController.php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class PasswordResetController extends Controller
{
    // Menampilkan form reset password
    public function showResetForm()
    {
        return view('auth.passwords.reset');
    }

    // Proses reset password
    public function reset(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        // Temukan user berdasarkan email
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return redirect()->route('password.request')->withErrors(['email' => 'Email tidak ditemukan']);
        }

        // Update password user tanpa token
        $user->password = Hash::make($request->password);
        $user->save();

        // Kirim email pemberitahuan (opsional)
        // Anda bisa menyesuaikan email yang dikirimkan sesuai dengan kebutuhan
        Mail::raw('Password Anda telah diperbarui', function ($message) use ($user) {
            $message->to($user->email)
                    ->subject('Password Berhasil Diperbarui');
        });

        // Redirect ke halaman login setelah password berhasil diubah
        return redirect()->route('login')->with('status', 'Password Anda telah berhasil diperbarui.');
    }
}
