@extends('layouts.base')

@section('title')
    Kelola pengurus
@endsection

@section('content')
    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <h2 class="mb-4 text-2xl font-bold">Edit Pengurus</h2>

                    <form action="{{ route('pengurus.update', $admin->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="nama" class="mb-2 block text-sm font-semibold">Nama</label>
                            <input type="text" name="nama" id="nama" value="{{ $admin->nama }}"
                                class="w-full rounded-md border-gray-300 p-2">
                        </div>

                        <div class="mb-4">
                            <label for="umur" class="mb-2 block text-sm font-semibold">Umur</label>
                            <input type="number" name="umur" id="umur" value="{{ $admin->umur }}"
                                class="w-full rounded-md border-gray-300 p-2">
                        </div>

                        <div class="mb-4">
                            <label for="jenis_kelamin" class="mb-2 block text-sm font-semibold">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="w-full rounded-md border-gray-300 p-2">
                                <option value="Laki-laki" @if ($admin->jenis_kelamin === 'Laki-laki') selected @endif>
                                    Laki-laki
                                </option>
                                <option value="Perempuan" @if ($admin->jenis_kelamin === 'Perempuan') selected @endif>
                                    Perempuan
                                </option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="foto_pengurus" class="mb-2 block text-sm font-semibold">Foto Pengurus</label>
                            <input type="file" name="foto_pengurus" id="foto_pengurus"
                                class="w-full rounded-md border-gray-300 p-2">
                        </div>

                        <div>
                            <button type="submit"
                                class="rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700">
                                Simpan Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
