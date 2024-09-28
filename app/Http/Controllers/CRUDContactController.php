<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class CRUDContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
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
