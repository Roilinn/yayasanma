@extends('layouts.base')

@section('title')
    Kelola Galeri
@endsection

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="mb-4 text-2xl font-bold">Galeri Foto</h1>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @foreach ($galleries as $galery)
                <div class="group relative">
                    <img src="{{ asset('storage/' . $galery->foto_kegiatan) }}" alt="Foto Kegiatan" class="w-full rounded-lg">

                    <div
                        class="absolute inset-0 flex items-center justify-center gap-4 bg-black bg-opacity-50 opacity-0 transition duration-300 group-hover:opacity-100">
                        <a href="{{ route('galeri.show', $galery->id) }}" class="text-white hover:text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4 4a2 2 0 012-2h8a2 2 0 012 2v3h2a2 2 0 012 2v8a2 2 0 01-2 2h-2v3a2 2 0 01-2 2H6a2 2 0 01-2-2v-3H2a2 2 0 01-2-2V6a2 2 0 012-2zm2-1a1 1 0 00-1 1v1h12V4a1 1 0 00-1-1H6zm10 5V4H4v4h12zm-3 8V8a1 1 0 00-1-1H6a1 1 0 00-1 1v8a1 1 0 001 1h6a1 1 0 001-1zm-3-4a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 01-1 1h-2a1 1 0 01-1-1v-2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="{{ route('galeri.edit', $galery->id) }}" class="text-white hover:text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M3.293 15.707a1 1 0 010-1.414L12.586 3H15a2 2 0 012 2v2.414l-10.707 10.707a1 1 0 01-1.414-1.414L17.586 6H19v2h-2.586l-11 11zM13 7.414L16.586 11H15a1 1 0 01-1-1V7.414zM17 18h-2v-2h2v2zM5 6H3v2h2V6zm7.707 7.707L6 17.414V19h1.586l7.707-7.707-1.414-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <form action="{{ route('galeri.destroy', $galery->id) }}" method="POST"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus gambar ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white hover:text-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5 6a1 1 0 011-1h8a1 1 0 011 1v10a1 1 0 01-1 1H6a1 1 0 01-1-1V6zm2 0v8h8V6H7zm2 2h4v4H9V8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach

            <a href="{{ route('galeri.create') }}"
                class="flex h-64 items-center justify-center rounded-lg bg-gray-200 group-hover:bg-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-600" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 3a1 1 0 00-1 1v5H4a1 1 0 100 2h5v5a1 1 0 102 0v-5h5a1 1 0 100-2h-5V4a1 1 0 00-1-1z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
@endsection
