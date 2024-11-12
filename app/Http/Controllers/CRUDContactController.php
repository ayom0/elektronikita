<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class CRUDContactController extends Controller
{
    // Menampilkan daftar kontak dengan filter nama dan email
    public function index(Request $request)
    {
        $query = Contact::query();

        // Menambahkan filter nama jika ada
        if ($request->has('nama') && $request->nama != '') {
            $query->where('name', 'like', '%' . $request->nama . '%');
        }

        // Menambahkan filter email jika ada
        if ($request->has('email') && $request->email != '') {
            $query->where('email', 'like', '%' . $request->email . '%');
        }

        // Ambil data kontak setelah filter diterapkan
        $contacts = $query->get();

        // Menampilkan halaman dengan data kontak yang sudah difilter
        return view('admin.contactManagement', compact('contacts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        return redirect()->route('contacts.index')->with('success', 'Contact created successfully.');
    }

    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $contact->update($request->all());

        return redirect()->route('contacts.index')->with('success', 'Contact updated successfully.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('success', 'Contact deleted successfully.');
    }
}
