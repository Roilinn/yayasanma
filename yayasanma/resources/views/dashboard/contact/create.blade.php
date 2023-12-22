@extends('layouts.base')

@section('title')
    Create Contact Message
@endsection

@section('content')
    <div class="container mx-auto py-6">
        <h1 class="mb-4 text-2xl font-bold">Create Contact Message</h1>

        <!-- Form untuk membuat pesan kontak baru -->
        <form action="{{ route('pesan.store') }}" method="POST" class="mx-auto max-w-md rounded-lg bg-white p-6 shadow-md">
            @csrf

            <!-- Input Nama Penulis -->
            <div class="mb-4">
                <label for="nama_penulis" class="block text-sm font-semibold text-gray-600">Nama Penulis</label>
                <input type="text" name="nama_penulis" id="nama_penulis"
                    class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    placeholder="Nama Penulis" required>
            </div>

            <!-- Input Email Penulis -->
            <div class="mb-4">
                <label for="email_penulis" class="block text-sm font-semibold text-gray-600">Email Penulis</label>
                <input type="email" name="email_penulis" id="email_penulis"
                    class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    placeholder="Email Penulis" required>
            </div>

            <!-- Input Nomor Telepon -->
            <div class="mb-4">
                <label for="nomor_telepon" class="block text-sm font-semibold text-gray-600">Nomor Telepon</label>
                <input type="text" name="nomor_telepon" id="nomor_telepon"
                    class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    placeholder="Nomor Telepon" required>
            </div>

            <!-- Input Pesan -->
            <div class="mb-4">
                <label for="pesan" class="block text-sm font-semibold text-gray-600">Pesan</label>
                <textarea name="pesan" id="pesan" rows="4"
                    class="w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    placeholder="Pesan" required></textarea>
            </div>

            <button type="submit" class="w-full rounded-md bg-indigo-500 px-4 py-2 text-white hover:bg-indigo-600">Create
                Contact Message</button>
        </form>
    </div>
@endsection
