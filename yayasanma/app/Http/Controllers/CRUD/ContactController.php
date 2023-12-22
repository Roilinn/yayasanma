<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('dashboard.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_penulis' => 'required',
            'email_penulis' => 'required|email',
            'nomor_telepon' => 'required',
            'pesan' => 'required',
        ]);

        Contact::create($validatedData);

        return redirect()->route('pesan.index')
            ->with('success', 'Contact message created successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return view('dashboard.contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('dashboard.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());

        return redirect()->route('pesan.index')
            ->with('success', 'Contact message updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->route('pesan.index')
            ->with('success', 'Contact message deleted successfully');
    }
}
