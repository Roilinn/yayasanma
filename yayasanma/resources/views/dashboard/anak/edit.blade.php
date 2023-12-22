@extends('layouts.base')

@section('title')
    Kelola Anak
@endsection

@section('content')
    <div class="mx-auto my-5 max-w-md rounded-md bg-white p-6 shadow-md">
        <h2 class="mb-4 text-2xl font-semibold" style="color: #994D7E;">Edit Data Anak</h2>
        <form action="{{ route('anak.update', $child->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nama" class="mb-1 block text-sm font-medium text-gray-700"style="color: #994D7E;">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ $child->nama }}" class="form-input">
            </div>
            <div class="mb-4">
                <label for="umur" class="mb-1 block text-sm font-medium text-gray-700" style="color: #994D7E;">Umur</label>
                <input type="number" name="umur" id="umur" value="{{ $child->umur }}" class="form-input">
            </div>
            <div class="mb-4">
                <label for="jenis_kelamin" class="mb-1 block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                    <option value="Laki-laki" @if ($child->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
                    <option value="Perempuan" @if ($child->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="tanggal_lahir" class="mb-1 block text-sm font-medium text-gray-700" style="color: #994D7E;">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ $child->tanggal_lahir }}"
                    class="form-input">
            </div>
            <div class="mb-4">
                <label for="tempat_tanggal_lahir" class="mb-1 block text-sm font-medium text-gray-700" style="color: #994D7E;">Tempat Lahir</label>
                <input type="text" name="tempat_tanggal_lahir" id="tempat_tanggal_lahir"
                    value="{{ $child->tempat_tanggal_lahir }}" class="form-input">
            </div>
            <div class="mb-4">
                <label for="foto_anak" class="mb-1 block text-sm font-medium text-gray-700"style="color: #994D7E;">Foto Anak</label>
                <input type="file" name="foto_anak" id="foto_anak" class="form-input">
            </div>
            <div class="mb-4">
                <img src="{{ asset('storage/' . $child->foto_anak) }}" alt="Foto Anak"
                    class="h-32 w-32 rounded-md object-cover">
            </div>
            <div class="mt-6">
                <button type="submit" class="rounded-md bg-blue-500 px-4 py-2 text-white hover:bg-blue-600" style="color: #994D7E;">Simpan
                    Perubahan</button>
                <a href="{{ route('anak.index') }}" class="ml-2 text-gray-600 hover:text-gray-800">Batal</a>
            </div>
        </form>
    </div>
@endsection
