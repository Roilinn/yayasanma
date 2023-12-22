<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class HubungiController extends Controller
{
    public function index()
    {

        return view('hubungi');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_penulis' => 'required',
            'email_penulis' => 'required|email',
            'nomor_telepon' => 'required',
            'pesan' => 'required',
        ]);

        Contact::create($validatedData);

        return redirect()->route('hubungi.index')
            ->with('success', 'Contact message created successfully');
    }
}
