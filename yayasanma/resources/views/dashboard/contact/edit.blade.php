@extends('layouts.base')

@section('title')
    Edit Contact Message
@endsection

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="mb-4 text-2xl font-bold">Edit Contact Message</h1>

        <!-- Form untuk edit pesan kontak -->
        <form action="{{ route('pesan.update', $contact->id) }}" method="POST"
            class="mx-auto max-w-lg rounded-lg bg-white p-6 shadow-md">
            @csrf
            @method('PUT')

            <!-- Nama Penulis -->
            <div class="mb-4">
                <label for="nama_penulis" class="block text-sm font-semibold text-gray-600">Nama Penulis</label>
                <input type="text" name="nama_penulis" id="nama_penulis" value="{{ $contact->nama_penulis }}"
                    class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    required>
            </div>

            <!-- Email Penulis -->
            <div class="mb-4">
                <label for="email_penulis" class="block text-sm font-semibold text-gray-600">Email Penulis</label>
                <input type="email" name="email_penulis" id="email_penulis" value="{{ $contact->email_penulis }}"
                    class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    required>
            </div>

            <!-- Nomor Telepon -->
            <div class="mb-4">
                <label for="nomor_telepon" class="block text-sm font-semibold text-gray-600">Nomor Telepon</label>
                <input type="text" name="nomor_telepon" id="nomor_telepon" value="{{ $contact->nomor_telepon }}"
                    class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    required>
            </div>

            <!-- Pesan -->
            <div class="mb-4">
                <label for="pesan" class="block text-sm font-semibold text-gray-600">Pesan</label>
                <textarea name="pesan" id="pesan"
                    class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    required>{{ $contact->pesan }}</textarea>
            </div>

            <button type="submit"
                class="rounded-md bg-indigo-500 px-4 py-2 text-white transition duration-300 hover:bg-indigo-600">Update
                Contact Message</button>
        </form>
    </div>
@endsection
