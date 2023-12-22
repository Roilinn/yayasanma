@extends('layouts.base')

@section('title')
    Kelola pengurus
@endsection

@section('content')
   @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="py-6">
        <div class="mx-auto max-w-3xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="border-b border-gray-200 bg-white p-6">
                    <h2 class="mb-4 text-2xl font-bold">Tambah Pengurus</h2>

                    <!-- Form untuk menambahkan pengurus -->
                    <form action="{{ route('pengurus.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label for="nama" class="mb-2 block text-sm font-bold text-gray-700">Nama:</label>
                            <input type="text" name="nama" id="nama"
                                class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        </div>

                        <div class="mb-4">
                            <label for="umur" class="mb-2 block text-sm font-bold text-gray-700">Umur:</label>
                            <input type="number" name="umur" id="umur"
                                class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        </div>

                        <div class="mb-4">
                            <label for="jenis_kelamin" class="mb-2 block text-sm font-bold text-gray-700">Jenis
                                Kelamin:</label>
                            <select name="jenis_kelamin" id="jenis_kelamin"
                                class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="foto_pengurus" class="mb-2 block text-sm font-bold text-gray-700">Foto
                                Pengurus:</label>
                            <input type="file" name="foto_pengurus" id="foto_pengurus" accept="image/*"
                                class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                        </div>

                        <div class="mt-6">
                            <button type="submit"
                                class="rounded bg-indigo-500 px-4 py-2 font-bold text-white hover:bg-indigo-700">Simpan</button>
                            <a href="{{ route('pengurus.index') }}"
                                class="ml-4 rounded bg-gray-300 px-4 py-2 font-bold text-gray-800 hover:bg-gray-400">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
