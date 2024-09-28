<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Tambahkan ini untuk menggunakan model Contact

class ContactController extends Controller
{
    // Menampilkan form kontak
    public function showForm()
    {
        return view('users.contact'); // Ganti dengan view Anda
    }

    // Mengirim pesan
    public function submit(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255', // Tambahkan validasi untuk address
            'message' => 'required|string',
        ]);

        // Simpan data ke database
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'message' => $request->message,
        ]);

        // Set notifikasi untuk pesan terkirim
        return redirect()->route('contact.form')->with('success', 'Pesan Anda telah terkirim!');
    }
}


