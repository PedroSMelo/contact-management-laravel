<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

    
    public function index()
    {
        $contacts = Contact::all();
        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:5',
            'contact' => 'required|digits:9|unique:contacts',
            'email' => 'required|email|unique:contacts',
        ]);

        Contact::create($request->all());

        return redirect()->route('contacts.index');
    }

    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.show', compact('contact'));
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|min:5',
            'contact' => 'required|digits:9|unique:contacts,contact,' . $id,
            'email' => 'required|email|unique:contacts,email,' . $id,
        ]);

        $contact = Contact::findOrFail($id);
        $contact->update($request->all());

        return redirect()->route('contacts.index');
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('contacts.index');
    }
}
