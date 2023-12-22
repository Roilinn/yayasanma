@extends('layouts.base')

@section('title')
    Kelola Anak
@endsection

@section('content')
    <div class="flex h-screen items-center justify-center">
        <div class="mb-4 w-full max-w-md rounded bg-white px-8 pb-8 pt-6 shadow-md">
            <h2 class="mb-6 text-2xl font-bold text-gray-800" style="color: #994D7E;">Tambah Anak Baru</h2>
            <form action="{{ route('anak.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="nama" class="mb-2 block text-sm font-bold text-gray-700" style="color: #994D7E;">Nama</label>
                    <input type="text" id="nama" name="nama" placeholder="Nama Anak"
                        class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none">
                </div>
                <div class="mb-4">
                    <label for="umur" class="mb-2 block text-sm font-bold text-gray-700" style="color: #994D7E;">Umur</label>
                    <input type="number" id="umur" name="umur" placeholder="Umur Anak"
                        class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none">
                </div>
                <div class="mb-4">
                    <label for="jenis_kelamin" class="mb-2 block text-sm font-bold text-gray-700" style="color: #994D7E;">Jenis Kelamin</label>
                    <select id="jenis_kelamin" name="jenis_kelamin"
                        class="focus:shadow-outline block w-full appearance-none rounded border border-gray-400 bg-white px-3 py-2 leading-tight shadow hover:border-gray-500 focus:outline-none">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="tanggal_lahir" class="mb-2 block text-sm font-bold text-gray-700" style="color: #994D7E;">Tanggal Lahir</label>
                    <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                        class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none">
                </div>
                <div class="mb-4">
                    <label for="tempat_tanggal_lahir" class="mb-2 block text-sm font-bold text-gray-700">Tempat Lahir</label>
                    <input type="text" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir"
                        placeholder="Tempat & Tanggal Lahir"
                        class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none">
                </div>
                <div class="mb-4">
                    <label for="foto_anak" class="mb-2 block text-sm font-bold text-gray-700" style="color: #994D7E;">Foto Anak</label>
                    <input type="file" id="foto_anak" name="foto_anak"
                        class="focus:shadow-outline w-full appearance-none rounded border px-3 py-2 leading-tight text-gray-700 shadow focus:outline-none">
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit"
                        class="focus:shadow-outline rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700 focus:outline-none" style="color: #994D7E;">Simpan</button>
                    <a href="{{ route('anak.index') }}"
                        class="inline-block align-baseline text-sm font-bold text-blue-500 hover:text-blue-800">Batal</a>
                </div>
            </form>
        </div>
    </div>
@endsection
