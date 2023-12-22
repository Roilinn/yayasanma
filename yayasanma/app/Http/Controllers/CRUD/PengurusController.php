<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();
        return view('dashboard.pengurus.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pengurus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data masukan dari form
        $validatedData = $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'foto_pengurus' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai kebutuhan
        ]);

        // Simpan foto ke dalam direktori
        $foto_pengurus_path = $request->file('foto_pengurus')->store('pengurus_photos', 'public');

        // Buat entitas Admin baru dan simpan ke database
        $admin = Admin::create([
            'nama' => $validatedData['nama'],
            'umur' => $validatedData['umur'],
            'jenis_kelamin' => $validatedData['jenis_kelamin'],
            'foto_pengurus' => $foto_pengurus_path,
        ]);

        return redirect()->route('pengurus.index')->with('success', 'Pengurus berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $admin = Admin::findOrFail($id);
        return view('dashboard.pengurus.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('dashboard.pengurus.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data masukan dari form
        $validatedData = $request->validate([
            'nama' => 'required',
            'umur' => 'required|integer',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'foto_pengurus' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ubah sesuai kebutuhan
        ]);

        $admin = Admin::findOrFail($id);

        // Update data yang diubah
        $admin->nama = $validatedData['nama'];
        $admin->umur = $validatedData['umur'];
        $admin->jenis_kelamin = $validatedData['jenis_kelamin'];

        // Jika ada foto baru, simpan foto ke dalam direktori
        if ($request->hasFile('foto_pengurus')) {
            $foto_pengurus_path = $request->file('foto_pengurus')->store('pengurus_photos', 'public');
            $admin->foto_pengurus = $foto_pengurus_path;
        }

        $admin->save();

        return redirect()->route('pengurus.index')->with('success', 'Data pengurus berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return redirect()->route('pengurus.index')->with('success', 'Data pengurus berhasil dihapus');
    }
}
