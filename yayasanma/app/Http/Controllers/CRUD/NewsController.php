<?php

namespace App\Http\Controllers\CRUD;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = News::latest()->get();
        return view('dashboard.berita.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
        ]);

        $cover_path = $request->file('cover')->store('covers', 'public');

        News::create([
            'judul' => $request->judul,
            'user_id' => auth()->id(), // Ubah sesuai sistem autentikasi Anda
            'cover' => $cover_path,
            'content' => $request->content,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('dashboard.berita.show', compact('news'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('dashboard.berita.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'cover' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'content' => 'required',
        ]);

        $news = News::findOrFail($id);

        if ($request->hasFile('cover')) {
            $cover_path = $request->file('cover')->store('covers', 'public');
            $news->cover = $cover_path;
        }

        $news->judul = $request->judul;
        $news->content = $request->content;
        $news->save();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus');
    }
}
