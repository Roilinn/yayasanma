<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\galery; 

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = galery::all();
        return view('dashboard.galeri.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.galeri.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'foto_kegiatan' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $foto_kegiatan_path = $request->file('foto_kegiatan')->store('foto_kegiatan', 'public');

        galery::create([
            'foto_kegiatan' => $foto_kegiatan_path,
        ]);

        return redirect()->route('galeri.index')->with('success', 'Foto kegiatan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $galery = galery::findOrFail($id);
        return view('dashboard.galeri.show', compact('galery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $galery = galery::findOrFail($id);
        return view('dashboard.galeri.edit', compact('galery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'foto_kegiatan' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $galery = galery::findOrFail($id);

        if ($request->hasFile('foto_kegiatan')) {
            $foto_kegiatan_path = $request->file('foto_kegiatan')->store('foto_kegiatan', 'public');
            $galery->foto_kegiatan = $foto_kegiatan_path;
        }

        $galery->save();

        return redirect()->route('galeri.index')->with('success', 'Foto kegiatan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $galery = galery::findOrFail($id);
        $galery->delete();

        return redirect()->route('galeri.index')->with('success', 'Foto kegiatan berhasil dihapus');
    }
}
