@extends('layouts.base')

@section('title')
    Kelola Berita
@endsection

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="mb-4 text-2xl font-bold">Kelola Berita</h1>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($news as $article)
                <div class="overflow-hidden rounded-lg bg-white shadow-md">
                    <img src="{{ asset('storage/' . $article->cover) }}" alt="Cover" class="h-48 w-full object-cover">

                    <div class="p-4">
                        <h2 class="mb-2 text-lg font-bold">{{ $article->judul }}</h2>
                        <p class="text-sm text-gray-600">{{ $article->created_at->format('d M Y') }}</p>
                    </div>

                    <div class="flex items-center justify-between bg-gray-100 px-4 py-2">
                        <a href="{{ route('berita.show', $article->id) }}"
                            class="font-semibold text-blue-600 hover:text-blue-800">Details</a>

                        <div class="flex gap-2">
                            <a href="{{ route('berita.edit', $article->id) }}"
                                class="font-semibold text-yellow-600 hover:text-yellow-800">Edit</a>

                            <form action="{{ route('berita.destroy', $article->id) }}" method="POST"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="font-semibold text-red-600 hover:text-red-800">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <a href="{{ route('berita.create') }}"
            class="mt-4 inline-block rounded-lg bg-blue-500 px-4 py-2 text-white hover:bg-blue-600">Tambah Berita</a>
    </div>
@endsection
