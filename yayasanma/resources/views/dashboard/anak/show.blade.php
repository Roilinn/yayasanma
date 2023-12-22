@extends('layouts.base')

@section('title')
    Kelola Anak
@endsection

@section('content')
    <div class="mx-auto max-w-4xl py-6 sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="border-b border-gray-200 bg-white p-6">
                <h2 class="mb-4 text-2xl font-bold">Detail Anak</h2>

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                    <div>
                        <img src="{{ asset('storage/' . $child->foto_anak) }}" alt="Foto Anak" class="mb-4 w-full rounded-lg">
                    </div>
                    <div>
                        <p class="text-lg"><span class="font-bold">Nama:</span> {{ $child->nama }}</p>
                        <p class="text-lg"><span class="font-bold">Umur:</span> {{ $child->umur }}</p>
                        <p class="text-lg"><span class="font-bold">Jenis Kelamin:</span> {{ $child->jenis_kelamin }}</p>
                        <p class="text-lg"><span class="font-bold">Tanggal Lahir:</span> {{ $child->tanggal_lahir }}</p>
                        <p class="text-lg"><span class="font-bold">Tempat Lahir:</span> {{ $child->tempat_tanggal_lahir }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
