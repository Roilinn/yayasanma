@extends('layouts.base')

@section('title')
<title>Edit Gallery Admin</title>
@endsection

@section('content')
    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="border-b border-gray-200 bg-white p-6">
                    <h2 class="mb-4 text-2xl font-bold">Tambah Foto Kegiatan</h2>

                    @if ($errors->any())
                        <div class="mb-4">
                            <div class="font-medium text-red-600">{{ __('Whoops! Ada kesalahan.') }}</div>

                            <ul class="mt-3 list-inside list-disc text-sm text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('galeri.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <label for="foto_kegiatan" class="block text-sm font-medium text-gray-700">Foto Kegiatan</label>
                            <input type="file" name="foto_kegiatan" id="foto_kegiatan" accept="image/*"
                                class="mt-1 block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </div>

                        <div class="mt-4 flex items-center justify-end">
                            <button type="submit"
                                class="inline-block rounded bg-blue-500 px-4 py-2 font-bold text-white hover:bg-blue-700">
                                Tambah Foto Kegiatan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
