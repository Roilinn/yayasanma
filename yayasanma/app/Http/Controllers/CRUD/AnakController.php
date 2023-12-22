<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use App\Models\Children;
use Illuminate\Http\Request;

class AnakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $childrens = Children::all();
        return view('dashboard.anak.index', compact('childrens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.anak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|numeric',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'tempat_tanggal_lahir' => 'required',
            'foto_anak' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // validation for image file
        ]);

        $foto_anak_path = $request->file('foto_anak')->storePublicly('foto_anak', 'public');

        Children::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_tanggal_lahir' => $request->tempat_tanggal_lahir,
            'foto_anak' => $foto_anak_path,
        ]);

        return redirect()->route('anak.index')->with('success', 'Data anak berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $child = Children::findOrFail($id);
        return view('dashboard.anak.show', compact('child'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $child = Children::findOrFail($id);
        return view('dashboard.anak.edit', compact('child'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|numeric',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'tempat_tanggal_lahir' => 'required',
            'foto_anak' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // validation for image file
        ]);

        $child = Children::findOrFail($id);

        $data = [
            'nama' => $request->nama,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_tanggal_lahir' => $request->tempat_tanggal_lahir,
        ];

        if ($request->hasFile('foto_anak')) {
            $foto_anak_path = $request->file('foto_anak')->storePublicly('foto_anak', 'public');
            $data['foto_anak'] = $foto_anak_path;
        }

        $child->update($data);

        return redirect()->route('dashboard.anak.index')->with('success', 'Data anak berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $child = Children::findOrFail($id);
        $child->delete();

        return redirect()->route('anak.index')->with('success', 'Data anak berhasil dihapus');
    }
}