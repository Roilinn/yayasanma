@extends('layouts.base')

@section('title')
    Kelola Galeri
@endsection

@section('content')
    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="border-b border-gray-200 bg-white p-6">
                    <h2 class="mb-4 text-2xl font-bold">Edit Foto Kegiatan</h2>

                    <form action="{{ route('galeri.update', $galery->id) }}" method="POST" enctype="multipart/form-data"
                        class="space-y-4">
                        @csrf
                        @method('PUT')

                        <div>
                            <label for="foto_kegiatan" class="block text-sm font-medium text-gray-700">Foto Kegiatan</label>
                            <input type="file" name="foto_kegiatan" id="foto_kegiatan"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                        </div>

                        @if ($galery->foto_kegiatan)
                            <div class="mt-4">
                                <p class="text-sm text-gray-500">Foto Kegiatan Saat Ini:</p>
                                <img src="{{ asset('storage/' . $galery->foto_kegiatan) }}" alt="Foto Kegiatan"
                                    class="mt-2 w-64">
                            </div>
                        @endif

                        <div class="mt-6 flex justify-end">
                            <a href="{{ route('galeri.index') }}"
                                class="inline-flex items-center justify-center rounded-md border border-transparent bg-gray-200 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-gray-700 transition hover:bg-gray-300 focus:border-gray-400 focus:outline-none focus:ring focus:ring-gray-300 disabled:opacity-25">Kembali</a>
                            <button type="submit"
                                class="ml-4 inline-flex items-center justify-center rounded-md border border-transparent bg-blue-500 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition hover:bg-blue-600 focus:border-blue-700 focus:outline-none focus:ring focus:ring-blue-300 disabled:opacity-25">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
