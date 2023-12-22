@extends('layouts.base')

@section('title')
    Detail Pesan Kontak
@endsection

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="mb-4 text-2xl font-bold">Detail Pesan Kontak</h1>

        <div class="overflow-hidden bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg font-semibold leading-6 text-gray-900">Informasi Pesan Kontak</h3>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">ID</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $contact->id }}</dd>
                    </div>

                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Nama Penulis</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $contact->nama_penulis }}</dd>
                    </div>

                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Email Penulis</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $contact->email_penulis }}</dd>
                    </div>

                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Nomor Telepon</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{{ $contact->nomor_telepon }}</dd>
                    </div>

                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">Pesan</dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">{!! $contact->pesan !!}</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
@endsection
