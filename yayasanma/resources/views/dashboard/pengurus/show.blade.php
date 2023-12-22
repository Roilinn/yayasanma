@extends('layouts.base')

@section('title')
    Kelola Pengurus
@endsection

@section('content')
    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="border-b border-gray-200 bg-white p-6">
                    <h2 class="mb-4 text-2xl font-bold">Detail Pengurus</h2>

                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <img src="{{ asset('storage/' . $admin->foto_pengurus) }}" alt="Foto Pengurus"
                                class="mb-4 w-full rounded-lg">
                        </div>
                        <div>
                            <p class="text-lg"><span class="font-bold">Nama:</span> {{ $admin->nama }}</p>
                            <p class="text-lg"><span class="font-bold">Umur:</span> {{ $admin->umur }}</p>
                            <p class="text-lg"><span class="font-bold">Jenis Kelamin:</span> {{ $admin->jenis_kelamin }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
