@extends('layouts.base')

@section('title')
<title>Edit Gallery Admin</title>
@endsection

@section('content')
    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="border-b border-gray-200 bg-white p-6">
                    <h2 class="mb-4 text-2xl font-bold" style="color: #994D7E;">Detail Galeri Kegiatan</h2>

                    <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                        <div>
                            <img src="{{ asset('storage/' . $galery->foto_kegiatan) }}" alt="Foto Kegiatan"
                                class="mb-4 w-full rounded-lg">
                        </div>
                        <div>
                            <!-- Informasi Detail -->
                            <p class="text-lg"><span class="font-bold">Foto Kegiatan:</span> <br>
                                <img src="{{ asset('storage/' . $galery->foto_kegiatan) }}" alt="Foto Kegiatan"
                                    class="h-64 w-64 rounded-lg object-cover">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
